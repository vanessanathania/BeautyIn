<?php 
	require_once("bridge.php");

	$data = json_decode(file_get_contents('php://input'), true);

	$email = $data['email'];
        
        if($data['type'] == "all_users"){
            if($data['role'] == 1){
                $db="user";
            }else{
                $db="mua";
            }
            $sql = "SELECT name, email FROM $db";
            $res = execute($sql, array(), false);
            echo json_encode($res);
        }else if($data['type'] == "all_chats"){
            $sql = "SELECT id, to_user, from_user, chat_message, timestamp FROM chat_message";
            $res = execute($sql, array(), false);
            echo json_encode($res);
        }else if($data['type'] == "send_chat"){
            $sql = "INSERT INTO chat_message (to_user, from_user, chat_message) VALUES(?, ?, ?)";
            $res = execute($sql, array("sss", $data['to_email'], $email, $data['message']), true);
            echo $res;
        }
?>