<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container flexbox">
            <div class="flexbox loginform">
                <form class="flexbox" method="post" action="php_scripts/login_into.php">
                    <h1>Welcome to MessageApp!</h1>
                    <div class="forminput">
                        <a>Username:</a>
                        <input name="username" type="text" autocomplete="off">
                    </div>
                    <div class="forminput">
                        <a>Password:</a>
                        <input name="password" type="password" autocomplete="off">
                    </div>
                    <button id="login" type="submit">Log in</button>
                    <div class="signin flexbox">
                        <a>Don't have an account?</a>
                        <span id="hovercyan"><a href="register.php">Sign in</a></span>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>