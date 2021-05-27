<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "farmers' house";
    $con = mysqli_connect($servername,$username, $password, $database);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    echo "Connected successfully";

    if(isset($_POST['newprod']))
    {
        $name  =  $_POST['pname'];
        $desc  =  $_POST['pdesc'];
        $image =  $_FILES['pimg']['name'];
        echo $image;
        $price =  $_POST['pprice'];

        $query = "INSERT INTO `machines`(`CAT_ID`, `NAME`, `IMAGE`, `DESCRIPTION`, `PRICE`) VALUES ('1','$name','$image','$desc','$price')";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            echo("ok");
        }
        else
        {
            echo("no");
        }
    }

?>