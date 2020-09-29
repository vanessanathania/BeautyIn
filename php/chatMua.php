<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEAUTYIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background: linear-gradient(to right, #db7290, pink); padding: 1% 20%;">
        <!-- <a class="navbar-brand" href="../index.html"><img class="nav-brand-view-content mx-4 my-2" src="../src/logo/fourntec-logo/logo-fourntec-side-white.png" /></a> -->
        <a class="navbar-brand">Beauty<span>IN</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pl-5" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="logout.php">Sign Out</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row p-4">
            <div class="col-md-12 text-center" style="width: 100%;  ">
                <h1>Chatting</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" id="userList"></div>
            <div class="col-md-6">
                <div class="card" style="max-height: 500px; overflow-y: auto;">
                    <div class="card-body" id="chatList">Chat Kosong</div>
                </div>
                <div class="input-group my-3">
                    <input type="text" class="form-control" placeholder="Your Message" id="messageBox">
                    <div class="input-group-append">
                        <button id="sendMessage" class="btn btn-primary" type="button"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/chat.js"></script>
</body>