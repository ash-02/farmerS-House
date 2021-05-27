<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css" integrity="sha512-3icgkoIO5qm2D4bGSUkPqeQ96LS8+ukJC7Eqhl1H5B2OJMEnFqLmNDxXVmtV/eq5M65tTDkUYS/Q0P4gvZv+yA==" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="mainpage.css" rel="stylesheet">
</head>
<body>

    <header>
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
        <!-- <input type="text" placeholder="search" id="search1" style="height: 1cm; margin-top: 1.2cm; margin-right: 15px;"> -->
        <!-- <div class="login" style="float: right; display: inline-flex;">
            <button class="btn" style="height: 1cm; width: 3cm; margin-right: 10px;">LOGIN</button>
            <button class="btn" style="height: 1cm; width: 3.8cm; margin-right: 10px;">REGISTER</button>
        </div> -->
        <?php
            session_start();
            echo $_SESSION['userLogin'];
        ?>
    </header>
    <div class="slidesnmess">
        <ul class="slidesnnews">
            <li>
                <div class="slides">
                    <img class="mySlides" src="1.jpg" width="70%" height="400cm" style="border-radius: 10px ">
                    <img class="mySlides" src="2.jpg" width="70%" height="400cm" style="border-radius: 10px ">
                    <img class="mySlides" src="3.jpg" width="70%" height="400cm" style="border-radius: 10px ">
                    <img class="mySlides" src="4.jpg" width="70%" height="400cm" style="border-radius: 10px ">
                    <img class="mySlides" src="5.jpg" width="70%" height="400cm" style="border-radius: 10px ">
                </div>
            </li>
            <!-- <li>
                <h2>hi</h2>
            </li> -->
        </ul>
        <!-- <h2>hi</h2> -->
    </div>
    <div class="services">
        <nav>
            <ul class="list">
                <li>
                    <a href="machines_user.php">
                        <button><img src="1.png" alt=""><span class="buttontext">heavy machines</span></button>
                    </a>
                </li>
                <li>
                    <a href="machines_user.php">
                        <button><img src="2.png" alt=""><span class="buttontext">chemical needs</span></button>
                    </a>
                </li>
                <li>
                    <a>
                        <button><img src="3.png" alt=""><span class="buttontext">consultations</span></button>
                    </a>
                </li>
                <li>
                    <a>
                        <button><img src="4.png" alt=""><span class="buttontext">0% interest loans</span></button>
                    </a>
                </li>
                <li>
                    <a>
                        <button><img src="5.png" alt=""><span class="buttontext">other cultures</span></button>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="grid">
        <div class="grid-container">
            <h2>
                SERVICES
            </h2>
            <p>
                Check out all about the services<br> we provide which can help you<br>a lot to increase your yield.<br>
                <button class="done">MORE DETAILS</button>
            </p>
        </div>
        <div class="grid-container-img">
            <img src="1.jpg"  width="100%" >
        </div>
        <div class="grid-container">
            <h2>
                MACHINERY
            </h2>
            <p>
                check out our most safe and best <br> consultations from top agriculturalists<br>to grow the best crops.<br>
                <button class="done">MORE DETAILS</button>
            </p>
        </div>
        <div class="grid-container-img">
            <img src="2.jpg" height="300px" width="100%">
        </div>
        <div class="grid-container">
            <h2>
                0% INTEREST LOANS
            </h2>
            <p>
                Worried about money for farming?<br>No more money hardships<br>with our no interest loan scheme.<br>
                <button class="done">MORE DETAILS</button>
            </p>
        </div>
        <div class="grid-container-img">
            <img src="3.jpg" height="300px" width="100%">
        </div>
    </div>
    <footer>
        <ul class="mainn">
            <li>
                <h1 class="foo">sign up for emails</h1>
                <p>Receive our latest news and offers!</p>
                <input type="text" placeholder="enter email here" style="margin-bottom: 10px;">
            </li>
            <li>
                <h1>do follow us on</h1>
                <div class="socialbuttons" style="margin-left: 30px;">
                    <a class="btn btn-primary" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a> 
                    <a class="btn btn-primary" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary" style="background-color: rgb(188, 42, 141)" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-primary" style="background-color: #ed302f" href="#!" role="button"><i class="fab fa-youtube"></i></a>

                </div>
            </li>
            <li>
                <ul style="list-style-type: none;" class="last">
                    <li style="margin-bottom: 5px;"><a role="button">About</a></li>
                    <li style="margin-bottom: 5px;"><a role="button">Careers</a></li>
                    <li style="margin-bottom: 5px;"><a role="button">Help</a></li>
                </ul>
            </li>
        </ul>
    </footer>























    <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
