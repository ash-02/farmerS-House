<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css" integrity="sha512-3icgkoIO5qm2D4bGSUkPqeQ96LS8+ukJC7Eqhl1H5B2OJMEnFqLmNDxXVmtV/eq5M65tTDkUYS/Q0P4gvZv+yA==" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

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
    echo "Connected successfully";

    $CID=$_POST['edit_id'];
    echo $CID;

    $query="SELECT `C_ID`, `CAT_ID`, `NAME`, `DESCRIPTION`, `PRICE` FROM `chemical` WHERE C_ID ='$CID'";
    $query_run=mysqli_query($con,$query);
?>

    <form action="CHEMICALPHP.php" method="POST">
        <div class="formmain">
            <?php
                if(mysqli_num_rows($query_run)>0)
                {
                    while($row=mysqli_fetch_assoc($query_run))
                        {?>
            <label>Name</label><br>
            <input type="text" name="pename" placeholder="<?php echo $row['NAME']?>" size="40"><br>
            <label>Image</label><br>
            <input type="file" name="peimg" placeholder="enter name of the product" size="40"><br>
            <label>Description</label><br>
            <input type="text" name="pedesc" placeholder="<?php echo $row['DESCRIPTION']?>" size="40"><br>
            <label>Price</label><br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">₹</span>
                </div>
                <input type="text" name="peprice" placeholder="<?php echo $row['PRICE']?>" aria-label="Username" aria-describedby="basic-addon1" size="36">
            </div>
            <?php
                        }
                }
                ?>
        </div>
        <a href="admin_chemical.php" class="btn btn-danger">CANCEL</a>
        <input type="hidden" name="edit_id" value="<?php echo $CID?>">
        <button type="submit" name="editbutt" class="btn btn-success">SAVE</button>   
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
</body>
</html>