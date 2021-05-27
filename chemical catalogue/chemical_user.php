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


    <link rel="stylesheet" href="chemical_user.css?v=<?php echo time(); ?>">

    <!-- <script>
        function recloc(){
            window.location.href("machines_product_page.php")
        }
    </script> -->

    <!-- <link rel="stylesheet" href="D:\xampp\htdocs\software_proj\machines\machines_user.css?v=<?php echo time();?>">     -->
</head>
<body>
    <!-- <header>
        <div class="login" style="float: right; display: inline-flex;">
            <button class="btn" style="height: 1cm; width: 3cm; margin-right: 10px;">LOGIN</button>
            <button class="btn" style="height: 1cm; width: 3.8cm; margin-right: 10px;">REGISTER</button>
        </div>
        <div style="float: left; display: inline-flex;" class="mainicon">
            <img src="mainicon.png">
            <h1 style="margin-top: 50px; margin-left: 0%;">Frenzy Farming</h1>
            <ul class="navbar">
                <li><button class="btn"><a href="#home">Home</a></button></li>
                <li><button class="btn"><a href="#home">TODAY'S DEALS</a></button></li>
                <li><button class="btn"><a href="#home">YOUR ORDERS</a></button></li>
                <li><button class="btn"><a href="#home">SERVICE</a></button></li>
            </ul>
        </div>
        <input type="text" placeholder="search" id="search1" style="height: 1cm; margin-top: 1.2cm; margin-right: 15px;">
        <div class="login" style="float: right; display: inline-flex;">
            <button class="btn" style="height: 1cm; width: 3cm; margin-right: 10px;">LOGIN</button>
            <button class="btn" style="height: 1cm; width: 3.8cm; margin-right: 10px;">REGISTER</button>
        </div>
    </header> -->
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

        $query="SELECT * FROM CHEMICAL";
        $query1="SELECT COUNT(c_id) as total FROM CHEMICAL";
        $query2="SELECT COUNT(cart_id) as totalcart FROM CART";
        $query3="SELECT company_name FROM CHEMICAL";
        $query_run=mysqli_query($con,$query);
        $query_run1=mysqli_query($con,$query1);
        $query_run2=mysqli_query($con,$query2);
        $query_run3=mysqli_query($con,$query3);
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
        <!-- <div class="cart-text" style="align-items: center;float:right;">
            <p>
                0
            </p>
        </div> -->
    </header>
    <div>
        <?php
            if(mysqli_num_rows($query_run1)>0)
                {
                    while ($row1=mysqli_fetch_assoc($query_run1)) {
                        $count=$row1['total'];
                    }
                }
        ?>
        <div class="main-content" style="display: flex;">
            <div class="filter">
                <div class="price-filter">
                    <h5>Price</h5>
                    <div class="fixed-price" style="display: contents;">
                        <ul>
                            <li>
                                <a href="#">below ₹100</a>
                            </li>
                            <li>
                                <a href="#">₹100 - ₹200</a>
                            </li>
                            <li>
                                <a href="#">₹200 - ₹300</a>
                            </li>
                            <li>
                                <a href="#">₹300 - ₹400</a>
                            </li>
                        </ul>
                    </div>
                    <div class="random-price" style="display: flex;">
                        <div class="min-price">
                            <span>min</span>
                            <div class="min-price-box" style="display: flex;">
                                <p>₹</p>
                                <input type="number" value="0">
                            </div>
                        </div>
                        <div class="max-price" style="margin-left: 10px;">
                            <span>max</span>
                            <div class="max-price-box" style="display: flex;">
                                <p>₹</p>
                                <input type="number" value="65">
                            </div>
                        </div>
                    </div>
                    <div class="price-filter-button">
                        <button class="btn btn-warning my-3" name="price-filter">Apply Price Filters</button>
                    </div>
                </div>
                <div class="brand-filter">
                    <h5>Brand</h5>
                    <ul>
                        <?php 
                            if(mysqli_num_rows($query_run3)>0)
                                {
                                    while($row3=mysqli_fetch_assoc($query_run3))
                                    {?>
                                    <li>
                                        <input type="checkbox" name="<?php echo $row3['company_name']?>" id="<?php echo $row3['company_name']?>" value="<?php echo $row3['company_name']?>">
                                        <label for="<?php echo $row3['company_name']?>"><?php echo $row3['company_name']?></label><br>
                                    </li>
                                    <?php
                                    }
                                }
                                ?>
                    </ul>
                    <div class="brand-filter-button">
                        <button class="btn btn-warning my-3" name="price-filter">Apply Brand Filters</button>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 0%;">
                
                <div  class="row text-center py-5">
                    
                    <h3 style="float: left; color: white; text-decoration:underline">
                        CHEMICAL CATEGORY
                    </h3>

                    <h6 style="margin-left: -284px; padding-right: 400px; padding-bottom:10px">
                        showing 
                        <?php 
                            echo $count;
                        ?>
                        results
                    </h6>
                    <p id="tag">
                        
                    </p>
                    <?php
                        if(mysqli_num_rows($query_run)>0)
                        {
                            while($row=mysqli_fetch_assoc($query_run))
                            {?>
                            <div class="col-md-3 col-sm-6 my-3 my-md-0" style=" margin-top:0px;">
                                <div class="card shadow"  style="margin-bottom: 20px; display:flex;">

                                    <form action="chemical_product_page.php" style="margin-bottom: 0%;">
                                            <div>
                                                <img src="<?php echo $row['image']?>" style="height: 200px; width: 200px;">
                                            </div>
                                                <div class="card-body" style="margin-bottom: 0%; padding: 0px 0px 0px 0px;">
                                                    <input name="id" id="id" value="<?php echo $row['c_id']?>" type="hidden">
                                                    <h5 class="card-title">
                                                        <?php echo $row['company_name']?>
                                                    </h5>
                                                    <h4>
                                                        <?php echo $row['name']?> 
                                                    </h4>
                                                    <!-- <h6>
                                                        <i class="fas fa-star"></i>
                                                    </h6> -->
                                                    <h5>
                                                        <!-- <small><s class="text-secondary">₹ 29,999</s></small> -->
                                                        <span class="price">₹  <?php echo $row['price']?></span>
                                                    </h5>
                                                    <button class="btn btn-primary my-3" name="view">View Details  <i class="fas fa-list"></i></button>


                                                </div>
                                    </form>
                                    <form action="sample.php" method="POST" style="margin-top: 0%; ">
                                        <input name="addtocart" id="addtocart" value="<?php echo $row['c_id']?>" type="hidden">
                                        <button type="submit" class="btn btn-warning my-3" id="addi" name="addi">Add to Cart  <i class="fas fa-shopping-cart"></i></button>
                                    </form>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        else{
                            echo "NO records found";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- <script>
    function tagfunc(idtag)
    {
        document.getElementById("tag").innerHTML = idtag;
        // window.open("machines_product_page.php");
    }
</script> -->

<!-- <script>
function truncateText(selector, maxLength) {
    var element = document.querySelector(selector),
        truncated = element.innerText;

    if (truncated.length > maxLength) {
        truncated = truncated.substr(0,maxLength) + '...';
    }
    return truncated;
}
//You can then call the function with something like what i have below.
document.querySelector('h4').innerText = truncateText('h4', 20);</script> -->

</body>
</html>
