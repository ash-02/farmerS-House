<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css" integrity="sha512-3icgkoIO5qm2D4bGSUkPqeQ96LS8+ukJC7Eqhl1H5B2OJMEnFqLmNDxXVmtV/eq5M65tTDkUYS/Q0P4gvZv+yA==" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" type="text/css" href="mausr.css">  -->

    <link rel="stylesheet" href="machines_product_page.css?v=<?php echo time(); ?>">


</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "farmers' house";
        $con = mysqli_connect($servername,$username, $password, $database);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        // echo "Connected successfully";

        $idd=$_GET['id'];
        
        $query="SELECT * FROM MACHINES WHERE M_ID='$idd'";
        $query2="SELECT COUNT(cart_id) as totalcart FROM CART";
        $query_run=mysqli_query($con,$query);
        $query_run2=mysqli_query($con,$query2);
            if(mysqli_num_rows($query_run2)>0)
                {
                    while ($row1=mysqli_fetch_assoc($query_run2)) {
                        $countcart=$row1['totalcart'];
                    }
                }
        
    ?>

    <header>
        <div style="display: inline-flex;">
            <img src="mainicon.png">
            <h1>Frenzy Farming</h1>
        </div>
        <div class="cart">
            <a href="#">
                <img src="cart-symbol.png"><sup><?php echo $countcart?></sup>
            </a>
        </div>
    </header>

    <?php
    if(mysqli_num_rows($query_run)>0){
            while($row=mysqli_fetch_assoc($query_run))
            {
    ?>

    <div class="all-details" style="display: inline-flex; color:white;">
        <div class="prod-image">
            <img src="<?php echo $row['IMAGE'] ?>">
        </div>
        <div class="text-details">
            <h4>
            <?php echo $row['COMPANY_NAME'] ?>
            </h4>
            <h2>
                <?php echo $row['NAME'] ?>
            </h2>
            <h3>
                PRICE: ₹ <?php echo $row['PRICE'] ?>
            </h3>

            <button class="btn btn-warning my-3" name="add">Add to Cart  <i class="fas fa-shopping-cart"></i></button>

            <h4>
                <ul>
                    <?php 
                        $desc_points = explode(".",$row['DESCRIPTION']);
                        foreach ($desc_points as $points) {
                           ?>
                           <li>
                               <?php
                                    echo $points
                                ?>
                           </li>
                           <?php
                        }
                    ?>
                </ul>
            </h4>
        </div>
    </div>

    <?php
            }
        }
    ?>
</body>
</html>