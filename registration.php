<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>registration</title>
        <link rel="stylesheet" href="regi.css">
        
    </head>
    <body>
        <header>
            <div style="float: left;" class="head">
                <img src="mainicon.png" class="logo">
                <h1 style="margin-top: 50px;">farmerS' House</h1>
            </div>
        </header>
        
        <div>
            <form class="regform" method="POST">
                <label><h2>Create an Account</h2></label>
                <h3>User Details</h3>
                <div class="input-container">
                    <input type="text" name="username" id="username" required=""><label>Name</label>
                </div>
                <div class="input-container">
                    <input type="text" name="phone" id="phone" required=""><label>Ph Number</label>
                </div>
                <div class="input-container">
                    <input type="text" name="email" id="email" required=""><label>Email</label>
                </div>
                <div class="input-container">
                    <input type="text" name="address" id="address" required=""><label>Address</label>
                </div>
                <div class="input-container">
                    <input type="text" name="password" id="password" required=""><label>Password</label>
                </div>
                <!-- <input type="submit" name="Submit" id="Submit" required="" value="register"> -->
                <a href="login.php"><button type="submit" name="regissubmit" id="regissubmit" class="regis">register</button></a>
            </form>
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
    // echo "Connected successfully";

    if(isset($_POST['regissubmit'])){
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $insertuser = "INSERT INTO `user`(`USERNAME`, `PHONE`, `EMAIL`, `ADDRESS`, `PASSWORD`) VALUES ('$username','$phone','$email','$address','$password')";
        $insertuser_run = mysqli_query($con,$insertuser);

        if($insertuser_run)
        {
            header('LOCATION: login.php');
        }
        else
        {
            echo "not changed";
        }

        // if ($insertuser_run) {
        // } else {
        //     echo "user not added";
        // }
        
    }

    mysqli_close($con);
?>