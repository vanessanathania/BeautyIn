<?php
    include 'dbh.php';

    function getUserData($dbConn, $email){
        return $dbConn->query("
            SELECT * FROM user
            WHERE email LIKE '$email'
        ")->fetch_assoc();
    }

    function generateQuery($userData, $dbConn){              
        $name = empty($_POST['name']) ? $userData['name'] : $_POST['name'];
        $password = empty($_POST['password']) ? $userData['password'] : $_POST['password'];
        $email = empty($_POST['email']) ? $userData['email'] : $_POST['email'];
        $bio = empty($_POST['bio']) ? $userData['bio'] : $_POST['bio'];
        $image = empty($_FILES['image']['name']) ? $userData['image'] : storeImage($dbConn, $_SESSION['email']);

        return 
        "UPDATE user SET 
            name = '".$name."', email = '".$email."', 
            bio = '".$bio."', password = '".$password."', 
            image = '".$image."' WHERE email LIKE '$email'";
    }

    function isValidImage(){
        $errMsgs = [];
        $validExt = array('jpg', 'jpeg', 'svg', 'png');
        if(!empty($_FILES['image']['name'])){
            $imgExt = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            if(!in_array($imgExt, $validExt)){
                array_push($errMsgs, "File is not an image");
            }
        }
        return $errMsgs;
    }

    function printErrMsg($errMsgArr){
        $errMsgString = "";
        foreach($errMsgArr as $errMsg){
            $errMsgString = $errMsgString."$errMsg
";
        }
        return $errMsgString;
    }

    function storeImage($dbConn, $email){
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $filename = $_SESSION['email'].'.'.$ext;
        $folder = 'images/user';

        $img = $dbConn->query("SELECT image FROM user WHERE email LIKE '$email'")->fetch_assoc();
        if($img != null) unlink($img['image']);
        
        move_uploaded_file($_FILES['image']['tmp_name'], $folder.$filename);
        return $folder.$filename;
    }

    session_start();
    $email = $_SESSION['email'];
    $errMsgs = isValidImage();

    $userData = getUserData($conn, $email);
    
    if(!empty($errMsgs)){
        echo "<script> alert(`".printErrMsg($errMsgs)."`)</script>";
        $_SESSION['old'] = $_POST;
        echo "<script> history.back() </script>";
    } else {
        $test = $conn->query(generateQuery($userData, $conn));
        $_SESSION['old'] = [];
        
        echo "<script> window.location.replace('profile.php') </script>";
    }
