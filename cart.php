<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css" integrity="sha512-3icgkoIO5qm2D4bGSUkPqeQ96LS8+ukJC7Eqhl1H5B2OJMEnFqLmNDxXVmtV/eq5M65tTDkUYS/Q0P4gvZv+yA==" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="cart1.css">


    <!-- <script src="cart.js" async></script> -->
</head>
<body>
    <header>
        <h1>
            Shopping Cart
        </h1>
    </header>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "farmers' house";

    $con = mysqli_connect($servername,$username,$password,$database);
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $query = "SELECT * FROM MACHINES";
    $query_run = mysqli_query($con,$query);

    ?>

    <div class="all-container" style="display: flex;">
        <table class="table table-borderless" id="main-table" style="width: 70%;">
            <tr>
                <th></th>
                <th></th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Delete</th>
            </tr>
            <?php
                if (mysqli_num_rows($query_run)>0)
                    {
                        while ($row = mysqli_fetch_assoc($query_run))
                        {?>
            <tr class="cart-items">
                <td style="margin-right: 10px;"><img src="1.jpg" style="width: 200px; height: 200px;"></td>
                <td style="margin-right: 10px;">
                    <h2>
                        <?php echo $row['NAME']?>
                    </h2>
                    <h6>
                        by <?php echo $row['COMPANY_NAME']?>
                    </h6>
                    <h4>
                        <b>
                            Heavy Machinery
                        </b>
                    </h4>
                </td>
                <td style="margin-right: 10px;" class="cart-price">
                    <h4>
                        ₹ <?php echo $row['PRICE']?>
                    </h4>
                </td>
                <td>
                    <input class="cart-quantity" id="cart-quantity" type="number" value="1">
                </td>
                <td>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            <?php
                        }
                    }
                    ?>
        </table>
        <div class="details-container" style="float: right; margin: 20px 10px 0px 20px;">
            <h3 style="margin-top: 0% ;">
                Subtotal (1 item):₹ 29,997
            </h3>
            <button class="btn btn-warning" style="width: 100%; margin-top: 10px;">proceed to buy</button>
        </div>
    </div>    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>