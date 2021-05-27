<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ease</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <header>
            <!-- <img src="listen-ear-icon-icons-and-png-backgrounds-26.png" height="100cm" width="100cm">
            <h1 >easE Education</h1>
            <h1 class="ease_rgt">education for everyone</h1> -->
            <ul>
                <div style="float: left;">
                    <li><img src="mainicon.png" height="100cm" width="100cm"></li>
                    <li><h1>farmerS' House</h1></li>
                </div>
                
                <div style="float: right;">
                    <li><h1>education for everyone</h1></li>
                </div>
                
            </ul>
        </header>
        <div class="trouble">
            <form class="loginform" method="POST">
                <!-- <h2>
                    <strong>Login</strong>
                </h2> -->
                    <div class="input-container">
                        <input type="text" name="uname" required=""><label>Username</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="upassword" required=""><label>Password</label>
                    </div>
                    <div class="loginbutton">
                        <button type="submit" name="loginbut" class="regi">Login</button>
                    </div>
            </form>
            <div class="register" style="margin-left: 575px;">
                <p>New to farmerS' House?</p>
                <div>
                    <a href="registration.php">
                        <button class="regi">register</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "farmers' house";
    $con = mysqli_connect($servername,$username, $password, $database);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    echo "Connected successfully";

    if(isset($_POST['loginbut'])){
        $user = $_POST['uname'];
        $pass = $_POST['upassword'];
        $search = "SELECT * FROM `user` WHERE USERNAME='$user'";
        $search_query = mysqli_query($con,$search);
        // $pass_search = "SELECT * FROM `user` WHERE Password='$pass' ";
        // $pass_result=mysqli_query($con,$pass_search);
        if(mysqli_num_rows($search_query)>1){
            while($row = mysqli_fetch_assoc($search_query)){
                if($row['PASSWORD']==$pass){
                    // echo"<script>alert('Succcess');location.replace('mainpage.php')</script>";
                    $_SESSION['userLogin']=$user;
                    header('LOCATION: MAINPAGE.PHP');
                }
                else{
                    echo 'invalid password';
                }
            }
        }
        else{
            echo 'user not found';
        }
    }
    mysqli_close($con);
?>
<!-- if(isset($_POST['Submit']))
    {
        $user = $_POST['uname'];
        $pass = $_POST['pass'];
        $con = mysqli_connect('localhost','root','','hackathon');
        echo($user);
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: ".mysqli_connect_error();
        }
        else{
            $search = "SELECT * FROM `user` WHERE userName='$user' ";
			$result = mysqli_query($con,$search);
            $pass_search = "SELECT * FROM `user` WHERE Password='$pass' ";
            $pass_result=mysqli_query($con,$pass_search);
			
            if(mysqli_num_rows($result)==1){
                if(mysqli_num_rows($pass_result)==1){
                    echo"<script>alert('Succcess');location.replace('hack/q.html')</script>";
                }
                else{
                    echo"Invalid Password";
                }  
            }
            else{
                echo"Invalid username!";
            }
        }
        mysqli_close($con); 
    } 
     -->