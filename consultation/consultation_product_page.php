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

    <link rel="stylesheet" href="consultation_product_page.css?v=<?php echo time(); ?>">


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
        
        $query="SELECT * FROM CONSULTATION WHERE con_id='$idd'";
        $query_run=mysqli_query($con,$query);
    ?>

    <header>
        <div style="display: inline-flex;">
            <img src="mainicon.png">
            <h1>Frenzy Farming</h1>
        </div>
    </header>

    <?php
    if(mysqli_num_rows($query_run)>0){
            while($row=mysqli_fetch_assoc($query_run))
            {
    ?>

    <div class="all-details" style="display: inline-flex; color:white;">
        <div class="prod-image">
            <img src="<?php echo $row['image'] ?>">
        </div>
        <div class="text-details">
            <h2>
                <?php echo $row['name'] ?>
            </h2>
            <h4 style="font-size:0.6cm;">
                <?php echo $row['description']?>    
            </h4>
        </div>
    </div>
    <div class="other-details">
        <h2>
            SOIL REQUIREMENTS:
        </h2>
        <h4>
            <?php echo $row['soil']?>
        </h4>
        <h2 style="margin-top: 3cm;">
            FERTILISER:
        </h2>
        <h4>
            <?php echo $row['fertiliser']?>
        </h4>
        <div class="youtubeplayer">
            <iframe width="650" height="405" src="<?php echo $row['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="appform" style="margin-top: 3.5cm;">
            <h3 style="text-align: center;">Book an appointment<br>
                                            that our own qualified expert<br>
                                            make you your own cultivation plan<br>
                                            tailor-made especially for you!!
            </h3>
            <form class="regform" method="POST">
                <div class="input-container">
                    <input type="text" name="name" id="name" required=""><label>Name</label>
                </div>
                <div class="input-container">
                    <input type="text" name="phone" id="phone" required=""><label>Phone</label>
                </div>
                <div class="input-container">
                    <input type="text" name="email" id="email" required=""><label>Email</label>
                </div>
                <div class="input-container">
                    <input type="text" name="city" id="city" required=""><label>City</label>
                </div>
                <div class="input-container">
                    <input type="date" name="date" id="date" placeholder="" required=""><label>Appointment Date</label>
                </div>
                <!-- <input type="submit" name="Submit" id="Submit" required="" value="register"> -->
                <button type="submit" name="regissubmit" id="regissubmit">Register</button>
            </form>
        </div>
    <?php
            }
        }
    ?>
    <button onclick="window.print()">Print this page</button>
</body>
</html>