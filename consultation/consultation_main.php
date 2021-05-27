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


    <link rel="stylesheet" href="consultation_main.css?v=<?php echo time(); ?>">

    <!-- <script>
        function recloc(){
            window.location.href("machines_product_page.php")
        }
    </script> -->

    <!-- <link rel="stylesheet" href="D:\xampp\htdocs\software_proj\machines\machines_user.css?v=<?php echo time();?>">     -->
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

        $query="SELECT * FROM CONSULTATION";
        $query_run=mysqli_query($con,$query);
        ?>
    <header>
        <div style="display: inline-flex;">
            <img src="mainicon.png">
            <h1>Frenzy Farming</h1>
        </div>
        <!-- <div class="cart">
            <a href="#">
                <img src="cart-symbol.png"><sup></sup>
            </a>
        </div> -->
        <!-- <div class="cart-text" style="align-items: center;float:right;">
            <p>
                0
            </p>
        </div> -->
    </header>
    <div>
        <div class="main-content" style="display: flex;">
            <div class="container" style="margin-top: 0%;">
                <div  class="row text-center py-5">
                    <?php
                        if(mysqli_num_rows($query_run)>0)
                        {
                            while($row=mysqli_fetch_assoc($query_run))
                            {?>
                            <div class="col-md-3 col-sm-6 my-3 my-md-0" style=" margin-top:0px;">
                                <div class="card shadow"  style="margin-bottom: 20px; display:flex;">

                                    <form action="consultation_product_page.php" style="margin-bottom: 0%;">
                                            <div>
                                                <img src="<?php echo $row['image']?>" style="height: 200px; width: 200px;">
                                            </div>
                                                <div class="card-body" style="margin-bottom: 0%; padding: 0px 0px 0px 0px;">
                                                    <input name="id" id="id" value="<?php echo $row['con_id']?>" type="hidden">
                                                    <h5 class="card-title">
                                                        <?php echo $row['name']?> 
                                                    </h5>
                                                    <!-- <h6>
                                                        <i class="fas fa-star"></i>
                                                    </h6> -->
                                                    <button class="btn btn-primary my-3" name="view">View Details  <i class="fas fa-list"></i></button>
                                                </div>
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
