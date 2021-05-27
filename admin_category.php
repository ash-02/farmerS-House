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

            $query="SELECT * FROM CATEGORY";
            $query_run=mysqli_query($con,$query);
        ?>
        <table class="table table-bordered" id="dataTable" width="50%">
            <tr>
                <td><b>ID</b></td>
                <td><b>CATEGORY NAME<b></td>
                <td><b>OPEN</b></td>
                <td><b>DELETE</b></td>
            </tr>
            <tbody>
                <?php
                    if(mysqli_num_rows($query_run)>0)
                    {
                        while($row=mysqli_fetch_assoc($query_run))
                        {?>
                        <tr>
                            <td><?php echo $row['cat_id']?></td>
                            <td><?php echo $row['cat_name']?></td>
                            <td><buttoN type="submit" class="btn btn-success">OPEN</button></td>
                            <td><buttoN type="submit" class="btn btn-danger">DELETE</button></td>
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