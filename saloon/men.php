
<?php 

  if(!isset($_SESSION)){
 session_start();
}

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Saloon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

header{
  background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
//    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
    </style>
  </head>
  <body>
    
    <?php include("header.php") ?>
    <!-- END header -->
<br><br><br><br>

<form method='post' action="register.php">
  
  <div class="container bg">
      <h2><font color='white'>MEN HairStyles</font></h2>
  <div class="row left1"> 
          <div class="col-md-4">
          <img style="border-radius: 10px 10px 10px 10px;"src="images/m1%20(2).jpg" class="img-responsive" />
              <div class="m1">
              <p>Hairstyle name:hey </p>
              <p>Price:</p>
                  <p><a href="appointment.php" class="btn btn-primary"style="border-radius: 10px 10px 10px 10px;">Get an Appointment</a></p>
                  </div>
          </div>
          <div class="col-md-4">
          <img style="border-radius: 10px 10px 10px 10px;"src="images/m2.jpg" class="img-responsive" />
              <div class="left">
              <p>Hairstyle name:hello </p>
              <p>Price:</p>
                  <p><a href="appointment.php" class="btn btn-primary"style="border-radius: 10px 10px 10px 10px;">Get an Appointment</a></p>
                  </div>
          </div>
           <div class="col-md-4">
          <img style="border-radius: 10px 10px 10px 10px;"src="images/m3.jpg" class="img-responsive" />
              <div class="left">
              <p>Hairstyle name: </p>
              <p>Price:</p>
                  <p><a href="appointment.php" class="btn btn-primary" style="border-radius: 10px 10px 10px 10px;">Get an Appointment</a></p>
                  </div>
          </div>
        <div class="row left1"> 
          <div class="col-md-4">
          <img style="border-radius: 10px 10px 10px 10px;"src="images/m4.jpg" class="img-responsive" />
              <div class="m1">
              <p>Hairstyle name:hey </p>
              <p>Price:</p>
                  <p><a href="appointment.php" class="btn btn-primary"style="border-radius: 10px 10px 10px 10px;">Get an Appointment</a></p>
                  </div>
          </div>
          <div class="col-md-4">
          <img style="border-radius: 10px 10px 10px 10px;"src="images/m5.jpg" class="img-responsive" />
              <div class="left">
              <p>Hairstyle name:hello </p>
              <p>Price:</p>
                  <p><a href="appointment.php" class="btn btn-primary"style="border-radius: 10px 10px 10px 10px;">Get an Appointment</a></p>
                  </div>
          </div>
           <div class="col-md-4">
          <img style="border-radius: 10px 10px 10px 10px;"src="images/m6.jpg" class="img-responsive" />
              <div class="left">
              <p>Hairstyle name: </p>
              <p>Price:</p>
                  <p><a href="appointment.php" class="btn btn-primary"style="border-radius: 10px 10px 10px 10px;">Get an Appointment</a></p>
                  </div>
          </div>
<br>
</form>
<br><br><br>

    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="mb-4">About</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quod!</p>
            <ul class="list-unstyled ">
              <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span class="">34 Street Name, City Name Here, United States</span></li>
              <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span class="">+1 242 4942 290</span></li>
              <li class="d-flex"><span class="mr-3"><span class="icon ion-email"></span></span><span class="">info@yourdomain.com</span></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h3 class="mb-4">Links</h3>
            <ul class="list-unstyled ">
              <li><a href="#">About</a></li>
              <li><a href="#">Hairstyle</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="mb-4">Latest Blog</h3>
            <ul class="list-unstyled blog-entry-footer">
              <li><a href="#">
                <span class="post-meta">March 20, 2018</span>
                <h3>7 Best Destination in The World</h3></a>
              </li>
              <li><a href="#">
                <span class="post-meta">March 20, 2018</span>
                <h3>4 Hour Work Week And The Rest Is Travel</h3></a>
              </li>
              <li><a href="#">
                <span class="post-meta">March 20, 2018</span>
                <h3>Why You Should Travel Today</h3></a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Connect</h3>
            <p>
              <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
              <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
              <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>