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

if(isset($_POST['editbutt']))
    {
        $mid = $_POST['edit_id'];
        echo $mid;
        $editname = $_POST['pename'];
        $editdesc = $_POST['pedesc'];
        $editimage = $_POST['peimg'];
        $editprice = $_POST['peprice'];

        $queryedit = "UPDATE `machines` SET `NAME`='$editname',`IMAGE`= '$editimage' ,`DESCRIPTION`= '$editdesc',`PRICE`= '$editprice' WHERE M_ID=$mid";
        $queryedit_run = mysqli_query($con,$queryedit);

        if($queryedit_run)
        {
            header('LOCATION: ADMIN_MACHINES.PHP');
        }
        else
        {
            echo "not changed";
        }
    }

if(isset($_POST['deletebutt']))
{
    $mid = $_POST['edit_id'];
    echo $mid;

    $querydelete = "DELETE FROM `machines` WHERE M_ID=$mid";
    $querydelete_run = mysqli_query($con,$querydelete);

    if($querydelete_run)
        {
            header('LOCATION: ADMIN_MACHINES.PHP');
        }
    else
        {
            echo "not changed";
        }

}

?>