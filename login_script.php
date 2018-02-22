<html>
    <body>
        <?php
        $host = "localhost";
        $sql_username = "root";
        $sql_password = "";
        $db_name = "wake_compass";
        $tbl_name = "users";
        
        $mysqli = mysqli_connect("$host", "$sql_username", "$sql_password", "$db_name") or die ("Cannot Connect.");
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $username = $_POST["username"];
            $password = $_POST["password"];
           
            function test_input($mysqli,$data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                $data = mysqli_real_escape_string($mysqli, $data);
                return $data;
            }
            
            if($username&&$password){
               $username = test_input($mysqli, $username);
               $password = test_input($mysqli, $password);
               
               $sql = "SELECT * FROM $tbl_name WHERE Username='$username' AND Password='$password'";
               $result = mysqli_query($mysqli, $sql);
               $count = mysqli_num_rows($result);
               
               if($count == 1){
                   session_start();
                   $sessionID = session_id();
                   $sql = "UPDATE $tbl_name SET SessionID = '$sessionID' WHERE Username = '$username';";
                   mysqli_query($mysqli, $sql);
                   $_SESSION['username'] = $username;
                   $_SESSION['host'] = $host;
                   $_SESSION['sqlname'] = $sql_username;
                   $_SESSION['sqlpassword'] = $sql_password;
                   $_SESSION['dbname'] = $db_name;
                   $_SESSION['id'] = $sessionID;
                   header("location:profile_page.php/$username");
               } else {
                   die(header("location:login.php?loginFailed=true&reason=password"));
               }
            } else {
               die(header("location:login.php?loginFailed=true&reason=empty"));
            }
        }
        ?>
    </body>
</html>