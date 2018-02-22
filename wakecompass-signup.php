<!DOCTYPE html>
<html>
    <head>
        <title>Wake Compass Sign Up</title>
        <link type='text/css' rel='stylesheet' href='signupstylesheet.css'>
    </head>
    <body>
        <div id='left'></div>
        <div id='center'>
            <h1 id='headline'>Wake Compass Sign Up</h1>
            <form method="post" action="usercheck.php">
                Username
                <input id="loginName" type="text" name="username"><br>
                Password:
                <input id="loginPass" type="password" name="password"><br>
                Re-Enter Password:
                <input id="loginPass2" type="password" name="password2"><br>
                <input id="submit" type="submit" value="Submit"> <br>
                <?php
                    $reasons = array("userblank" => "Username left blank", 
                                    "passblank" => "Password field left blank",
                                    "passlength" => "Password must be longer than 8 characters",
                                    "noMatch" => "Passwords do not match",
                                    "usertaken" => "Username is not available"); 
                    if(isset($_GET["signUpFailed"])) echo $reasons[$_GET["reason"]];
                ?>
            </form>
        </div>
        <div id='right'></div>
    </body>
</html>