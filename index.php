﻿<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title>qeek.me - Instant Sharing</title>
	<meta content="Qeek.me is the best WebApp to easily transfer files with a direct connection between different devices." name="description">       
    </head>
	<link rel="image_src" href="http://stackoverflow.com/images/logo.gif" />
    <style>
        body {
            background-color: #000;  
            color: #eee;
            font-family: 'Calibri';
            text-align: center;
            font-size: 30px;
        }
        
        body img {
            height: 80px;    
        }
    </style>
    <body>
        <br>
        <img src="img/logo4.png">
        <br><br><br>
        <?php
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            if($lang == "pt")
                echo "Carregando...<br><br> É rapidinho =D~~";
            else 
                echo "Loading...<br><br> It's fast =D~~";   
        ?>
        <script src="Wocket.js"></script>
        <script>
            var s = new Wocket();
            s.on("connected", function() {
                s.on("sessionCreated", function(session) {
                        //window.location.replace(window.location.href + "session.php?s=" + session);
                    window.location.replace(window.location.href + session);
                });
                s.emit("createSession");
            });
            s.connect("wss://qeekmeserver2.mybluemix.net/");
        </script>    
    </body>
</html>
    