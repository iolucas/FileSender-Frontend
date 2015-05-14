<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <link rel="stylesheet" href="style.css"/>
        <title>qeek.me - Instant Sharing</title>        
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
                        Bem vindo! <br><br>Insira seu nome para ser identificado por outros dispositivos:<br>
                        <input id="userInput" type="text" maxlength="20" placeholder="Ex.: Lucas-PC, Junior-Cel"><br>
                        <input id="terms" type="checkbox"> Aceito os <a id="termsBut" href="#">Termos de Uso</a><br>
                        <div class="popupButton" onclick="setUserAndStart();">OK</div>
                    </div>
                </td></tr>        
            </table>  
        </div>

        <section id="section">
            <table id="menu">
                <tr><td onclick="ShowAbout();">Sobre</td></tr>        
            </table>
        </section>
        <script src="Wocket.js"></script>
        <script src="layout.js"></script>
        <script src="smartc.js"></script>
        <script src="fileManager.js"></script>
        <script src="idb.filesystem.js"></script>
        <script src="LocalStorager.js"></script>
        <script src="downloadManager.js"></script>
        <script src="misc.js"></script>
        <script src="main.js"></script>
            <script> 
                //if(window.location.protocol == "http:")
                //alert("https://" + window.location.href.substr(7));
                //window.location.replace("https://" + window.location.href.substr(7));    
                            
            var sessionAddr = "<?php echo $_GET["s"]?>",
                localIp;
            function getIP(json) { 
                localIp = json.ip; 
                begin();   //only starts after gathering the ip
            }
        </script>
        <script src="https://api.ipify.org?format=jsonp&callback=getIP"></script>
    </body>   
</html>