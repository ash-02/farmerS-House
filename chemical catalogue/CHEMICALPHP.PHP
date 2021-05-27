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
        $cid = $_POST['edit_id'];
        echo $cid;
        $editname = $_POST['pename'];
        $editdesc = $_POST['pedesc'];
        $editimage = $_POST['peimg'];
        $editprice = $_POST['peprice'];

        $queryedit = "UPDATE `chemical` SET `NAME`='$editname',`IMAGE`= '$editimage' ,`DESCRIPTION`= '$editdesc',`PRICE`= '$editprice' WHERE C_ID=$cid";
        $queryedit_run = mysqli_query($con,$queryedit);

        if($queryedit_run)
        {
            header('LOCATION: ADMIN_CHEMICAL.PHP');
        }
        else
        {
            echo "not changed";
        }
    }

if(isset($_POST['deletebutt']))
{
    $cid = $_POST['edit_id'];
    echo $cid;

    $querydelete = "DELETE FROM `chemical` WHERE C_ID=$cid";
    $querydelete_run = mysqli_query($con,$querydelete);

    if($querydelete_run)
        {
            header('LOCATION: ADMIN_CHEMICAL.PHP');
        }
    else
        {
            echo "not changed";
        }

}

?>