<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link type="text/css" rel="stylesheet" href="profilePageStylesheet.css"/>
    </head>
    <body> 
        <?php 
            function sessionData($username){
                $host = $_SESSION['host'];
                $sql_username = $_SESSION['sqlname'];
                $sql_password = $_SESSION['sqlpassword'];
                $db_name = $_SESSION['dbname'];
                $sql = "SELECT SessionID FROM users WHERE Username='$username'";
               
                $mysqli = mysqli_connect("$host", "$sql_username", "$sql_password", "$db_name") or die("Cannot Connect.");
                
                $result = mysqli_query($mysqli, $sql);
                $result = mysqli_fetch_array($result);
                $result = "" . $result['SessionID'];
                return $result;
            }
        
            function profileData($profile){
                $host = $_SESSION['host'];
                $sql_username = $_SESSION['sqlname'];
                $sql_password = $_SESSION['sqlpassword'];
                $db_name = $_SESSION['dbname'];
                $sql = "SELECT ID FROM users WHERE Username='$profile'";
                
                $mysqli = mysqli_connect("$host", "$sql_username", "$sql_password", "$db_name") or die("Cannot Connect.");
                
                $result = mysqli_query($mysqli, $sql);
                $rows = mysqli_num_rows($result);
                if($rows == 1){
                    $result = mysqli_fetch_array($result);
                    $ID = intval($result['ID']);
                } else {
                    return NULL;
                }
                $sql = "SELECT * FROM profiledata WHERE ID=$ID";
                $result = mysqli_query($mysqli, $sql);
                if($result == false){

                } else {
                $result = mysqli_fetch_assoc($result);
                return $result;
                }
            }
        
            session_start();
            if(isset($_SERVER['PATH_INFO'])){
                $account = $_SERVER['PATH_INFO'];
                $account = substr($account, 1);
                $user = $_SESSION['username'];
                $activeSession = session_id();
                $session = $_SESSION['id'];
                $userSession = sessionData($user);
                $access = 2;
            } else {
                die(header("location:/login.php"));
            }
            if($activeSession==$userSession and $account==$user){
                $access = 0;
            } else if(isset($_SESSION['username'])){
                $access = 1;
            } else {
                die(header("location:/login.php"));
            }
        
            $profileInfo = profileData($account);
            
        ?>
        <div id="leftMargin"></div><!--
     --><div id="middleOfPage">
            <div id="tab">
                <input id= "search" type="text" name="search" placeholder="Search">
                <div id="buttons">
                    <button class="tablink" onclick="openPage(event, 'Profile')">Profile</button>
                    <button class="tablink" onclick="openPage(event, 'Connections')">Connections</button>
                    <button class="tablink" onclick="openPage(event, 'Projects')">Projects</button>
                    <button id='logout' onclick="/logout.php">Log Out</button>
                </div><!--
         --></div><!--
         --><div id="Profile" class="tabcontent">
                <div id= "topper"></div>
                <img id="profilePic" src="http://www.sbcba.ca/wp-content/uploads/2012/11/generic.png">
                <h1 id="Name"><?php echo $profileInfo["FirstName"] . " " . $profileInfo["LastName"]?></h1>
                <img id="RoleDecor" src="https://image.flaticon.com/icons/png/512/106/106452.png"/>
                <h3 id="Role">Emergency Medicine Physician</h3>
                <div id="ContactInfo">
                    <p id="Email">Email: johndoe@gmail.com</p>
                	<p id="Phone">Phone: 336-999-9999</p>
                    <p id="Webpage">Faculty Webpage: http://WakeHealth.edu/faculty/JohnDoe</p>
                    <p id="LinkedIn">LinkedIn: http://linkedIn.com/JohnDoe</p>
                    <p id="Facebook">Facebook: http://facebook.com/JohnDoe</p>
                </div>
                <div class="PersonalInfo" id="Education">
                    <button class="Edit" onclick="edit(event, 'Education)" >Edit</button>
                    <h2>Education</h2><!--
                 --><ul><!--
                     --><li>Undergraduate: John's Hopkins</li>
                            <ul><li>Graduation Year: 2000</li></ul>
                        <li>Medical School: University of North Carolina</li>
                            <ul><li>Graduation Year: 2005</li></ul>
                    </ul>
                </div>
                <div class="PersonalInfo">
                    <h2>Experience</h2>
                    <ul>
                        <li>Mass Trauma Triage Research</li>
                            <ul>
                                <li>Fall 2008 - Spring 2010</li>
                                <li>Published in NEJM</li>
                            </ul>
                        <li>Pediatric Trauma Research</li>
                            <ul>
                                <li>Fall 2012 - Fall 2014</li>
                            </ul>
                    </ul>
                </div>
                <div class="PersonalInfo" id="Skills">
                    <h2>Skills</h2>
                    <ul>
                        <li>Microsoft Office</li>
                        <li>Patient Relations</li>
                        <li>Trauma Care</li>
                    </ul>
                </div>
            </div><!--
         --><div id="Connections" class="tabcontent">
                <h1 id="ConnectionsHeader">Connections</h1>
                <div class="Connection">
                    <img id="ConnRoleDecor" src="https://maxcdn.icons8.com/Share/icon/Business//graduation_cap1600.png"/>
                    <img id="ConnProfilePic" src="http://www.sbcba.ca/wp-content/uploads/2012/11/generic.png"/>
                    <h1 id="ConnName">Jane Doe</h1>
                    <h3 id="ConnRole">2nd Year Med Student</h3>
                    <div id="ConntactInfo">
                        <p id="ConnEmail">Email: janedoe@yahoo.com</p>
                        <p id="ConnPhone">Phone: 336-111-1111</p>
                        <p id="ConnWebpage">Faculty Webpage: http://WakeHealth.edu/students/JaneDoe</p>
                        <p id="ConnLinkedIn">LinkedIn: http://linkedIn.com/JaneDoe</p>
                        <p id="ConnFacebook">Facebook: http://facebook.com/JaneDoe</p>
                    </div>
                </div>
            </div><!--
         --><div id="Projects" class="tabcontent">
                <h1>Projects Page (TBD)</h1>
            </div>
        </div><!--
     --><div id="rightMargin">
        </div>
        <script>
            function openPage(event, pageName){
                var i, tabcontent, tablink;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablink = document.getElementsByClassName("tablink");
                for (i = 0; i < tablink.length; i++) {
                    tablink[i].className = tablink[i].className.replace("active", "tablink");
                }
                document.getElementById(pageName).style.display = "block";
                evt.currentTarget.className = "active";
            }
        </script>
    </body>
</html>