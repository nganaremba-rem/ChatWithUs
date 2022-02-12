<?php
    session_start();
    include 'connect.php';
    if(isset($_COOKIE['Username'])){
        $username = $_COOKIE['Username'];
    }else{
        $_SESSION['msg'] = 'Please login again';
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en" id='overwrite'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatWithMe</title>
    <script defer src="search.js"></script>
    <link id='homecss' rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="style.css" id="css" />
    <script src="https://kit.fontawesome.com/28d0d779f8.js" crossorigin="anonymous"></script>
    <script defer src="script.js" id="js"></script>
    <script id='fetchjs' defer src="fetchMsg.js"></script>
    <script>
    let css = document.querySelector("#css");
    let js = document.querySelector("#js");
    let fetchjs = document.querySelector("#fetchjs");
    let homecss = document.querySelector("#homecss");
    css.setAttribute("href", "style.css?version=" + Date.now());
    js.setAttribute("src", "script.js?version=" + Date.now());
    fetchjs.setAttribute("src", "fetchMsg.js?version=" + Date.now());
    homecss.setAttribute("href", "homepage.css?version=" + Date.now());

    </script>
</head>

<body onload="fetchMainPage()">
    <div class="container">
        <div class="chat-box">
            <div class="chat-header">
                <div class="back-btn" onclick="back()">
                    <button><i class="fas fa-arrow-circle-left"></i></button>
                </div>
                <div class="chat-name" id="chatname"></div>
                <div class="fullscreen">
                    <button id="fsbtn" onclick="openFullscreen()">
                        <i class="fas fa-expand-alt"></i>
                    </button>
                </div>
            </div>
            <div class="chat-area"></div>
            <div class="chat-input-area">
                <div class="chat-wrap">
                    <button class="emoji"><i class="far fa-grin-beam"></i></button>
                    <input type="text" id="chat" name="chat" placeholder="Message" autocomplete="off" />
                    <button class="send"><i class="far fa-paper-plane"></i></button>
                </div>
            </div>
        </div>

    </div>

    <div class="homepage" id="homepage">
        <div class="heading">
            <div class="user-title" id="userID"><?php  echo $username; ?></div>
            <a href="logout.php">
                <div class="logout">Logout
                </div>
            </a>
        </div>
        <div class="search-area">
            <div class="search-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <input type="search" name="search" id="search" autocomplete="off">

        </div>
        <div class="main-chat-list">
            <div class="chat-item-wrap" id="Global Chat" onclick='openChat(this.id)'>
                <div class="prof-icon"><img src="./icon/global.jpg" alt=""></div>
                <div class="chat-details">
                    <div class="chatname">Global Chat</div>
                    <div class="last-chat">Last Chat</div>
                </div>
            </div>
            <div class="display" id="displaySearch"></div>
        </div>
    </div>
</body>

</html>