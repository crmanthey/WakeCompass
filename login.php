<!DOCTYPE html> 
<html>
    <head>
        <title>Wake Compass</title>
        <script src="signup.js"></script>
        <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    </head>
    <body>
        <h1>
            Wake Compass
        </h1>
        <form method="post" action="login_script.php">
            Username:
            <input id="loginName" type="text" name="username"><br>
            Password:
            <input id="loginPass" type="password" name="password"><br>
            <input id="sign_up" type="button" onclick="signup()" value="Sign Up">
            <input id="submit" type="submit" value="Submit"> <br>
            <?php
            $reasons = array("password" => "Wrong Username or Password", "empty" => "One or more fields was left blank"); 
            if(isset($_GET["loginFailed"])) echo $reasons[$_GET["reason"]];
            ?>
        </form>
    </body>
</html>
