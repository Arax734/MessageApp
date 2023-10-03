<?php
    session_start();
    //echo $_SESSION['login'];

?>

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container flexbox">
            <div class="leftmenu flexbox">
                    <div id="info" class="flexbox">
                        <a>Chats</a>
                    </div>
                    <div id="listoffriends" class="flexbox">
                        <div class="conversation flexbox">
                            <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                            <div class="maininfo flexbox">
                                <div class="namefield flexbox">
                                    <a>Kacper</a>
                                    <a>13:57</a>
                                </div>
                                <div class="messagepreview flexbox">
                                    <span style="display:none">If message is longer than 33 characters - cut it</span>
                                    <a>Wiadomość testowa</a>
                                </div>
                            </div>
                        </div>
                        <div class="conversation flexbox">
                            <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                            <div class="maininfo flexbox">
                                <div class="namefield flexbox">
                                    <a>William</a>
                                    <a>14:05</a>
                                </div>
                                <div class="messagepreview flexbox">
                                    <span style="display:none">If message is longer than 12 characters - cut it</span>
                                    <a>Hello!</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="messagebox flexbox">
                <div class="aboutchat flexbox">

                </div>
                <div class="messages flexbox">
                    <a>Chats</a>
                </div>    
            </div>
        </div>
    </body>
</html>