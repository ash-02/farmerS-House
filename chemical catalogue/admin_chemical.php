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
    <h1>
        TABLE
    </h1>
    <div class="table-container">
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

            $query="SELECT * FROM CHEMICAL";
            $query_run=mysqli_query($con,$query);
        ?>
        <a href="admin_chemical_addprod.php">
            <button class="btn btn-primary" style="float:right;margin-bottom:10px">+ADD NEW PRODUCT</button>
        </a>
        <table class="table table-hover table-dark" id="dataTable">
            <thread>
                <tr>
                    <td><b>C_ID</b></td>
                    <td><b>CAT_ID<b></td>
                    <td><b>COMPANY NAME</b></td>
                    <td><b>NAME</b></td>
                    <td><b>IMAGE</b></td>
                    <td><b>DESCRIPTION</b></td>
                    <td><b>PRICE</b></td>
                    <td><b>EDIT</b></td>
                    <td><b>DELETE</b></td>
                </tr>
            </thread>  
            <tbody>
                <?php
                    if(mysqli_num_rows($query_run)>0)
                    {
                        while($row=mysqli_fetch_assoc($query_run))
                        {?>
                        <tr>
                            <td><?php echo $row['c_id']?></td>
                            <td><?php echo $row['cat_id']?></td>
                            <td><?php echo $row['company_name']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><img src="<?php echo $row['image']?>" height="100cm" width="100cm"></td>
                            <td><?php echo $row['description']?></td>
                            <td>₹ <?php echo $row['price']?></td>
                            <td>
                                <form action="chemical_edit.php" method="POST">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['c_id']?>">
                                    <buttoN type="submit" class="btn btn-success">EDIT</button>
                                </form>
                            </td>
                            <td>
                                <form action="CHEMICALPHP.php" method="POST">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['c_id']?>">
                                    <button type="submit" name="deletebutt" class="btn btn-danger">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                    else{
                        echo "NO records found";
                    }
                ?>

            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>