
<!Doctype HTML5>
<html>
    <head>
        <title>Caller</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <form action="process.php" action="form1.php" method="POST">
        
        <div class="img_container">
            <img src="no_user.png" alt="avatar" class="avatar">
        </div>

        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="passcode" id="passcode" required>

            <button type="submit">Login</button>
            <label>
                <br><input type="checkbox" checked="checked" name="remember">
                Remember me 
            </label>
        </div>

        <div class="container" style="background-color: #f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        </div>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </form>
    </body>
</html>