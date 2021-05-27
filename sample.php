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

if(isset($_POST['addi']))
{
    $mid = $_POST['addtocart'];

    $queryaddtocart = "INSERT INTO `cart` (`prod_id`, `cat_id`, `company_name`, `name`, `image`, `description`, `price`) SELECT * FROM `machines` WHERE M_ID=$mid;";
    $queryaddtocart_run = mysqli_query($con,$queryaddtocart);

    if($queryaddtocart_run)
    {
        header('LOCATION: MACHINES_USER.PHP');
    }
    else
    {
        echo "product not added to cart";
    }
}
?>