<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <!--Begin Style-->
        <link rel="stylesheet" href="style.css"/>
        <!--End Style-->
        <title>qeek.me - Instant Sharing</title> 
	<meta content="Qeek.me is the best WebApp to easily transfer files with a direct connection between different devices." name="description">       
    </head>
    
    <body>
        <div id="message"></div>       
        
        <header>
            <img class="logo" src="img/logo.png">         
            <table id="user">
                <tr>
                    <td rowspan="2" class="icoCol"><img id="userImg" src="img/mob.png"></td>
                    <td id="userName"></td>
                </tr>
                <tr><td id="sessionName"></td></tr>
            </table>           
        </header>
        
        <div id="screen" class="fullscreen">
            <table id="welcome" class="fullscreen" style="display:none;">
                <tr><td>
                    <div class="popupWindow">
                    <?php
                        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
                        if($lang == "pt") {
                            echo "Bem vindo! <br><br>Insira seu nome para ser identificado por outros dispositivos:<br>
                            <input id='userInput' type='text' maxlength='20' placeholder='Ex.: Lucas-PC, Junior-Cel'><br>
                            <input id='terms' type='checkbox'> Aceito os <a id='termsBut' href='#'>Termos de Uso</a><br>
                            <div class='popupButton' onclick='setUserAndStart();'>OK</div>";
                        } else {
                            echo "Welcome! <br><br>Enter your name to be identified by the other devices:<br>
                            <input id='userInput' type='text' maxlength='20' placeholder='Eg.: Lucas-PC, Junior-Cel'><br>
                            <input id='terms' type='checkbox'> I agree with the <a id='termsBut' href='#'>Terms of Use</a><br>
                            <div class='popupButton' onclick='setUserAndStart();'>OK</div>";
                        }
                    ?>                      
                    </div>
                </td></tr>        
            </table>  
        </div>

        <section id="section">
            <table id="menu">
                <?php
                    if($lang == "pt") {
                        echo "<tr><td onclick='ShowAbout();'>Sobre</td></tr>";
                    } else {
                        echo "<tr><td onclick='ShowAbout();'>About</td></tr>";
                    }
                ?>
            </table>
        </section>
        <!--Begin Script-->
        <script src="Wocket.js"></script>
        <script src="layout.js"></script>
        <script src="smartc.js"></script>
        <script src="fileManager.js"></script>
        <script src="idb.filesystem.js"></script>
        <script src="LocalStorager.js"></script>
        <script src="downloadManager.js"></script>
        <script src="misc.js"></script>
        <script src="main.js"></script>
        <!--End Script-->
        <script>    
            <?php
                if($lang == "pt")
                    echo "window.ptbr = true; \n";
            ?>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60400657-1', 'auto');
  ga('send', 'pageview');
            var localIp;
            function getIP(json) { 
                localIp = json.ip; 
                begin("<?php echo $_GET["s"]?>");   //only starts after gathering the ip
            }
        </script>
        <script src="https://api.ipify.org?format=jsonp&callback=getIP"></script>
    </body>   
</html>