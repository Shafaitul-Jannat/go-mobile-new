<!Doctype html>
<html lang="en">
  <head>

    <title>GoMobilo.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
  </head>
  <body>

    <header role="banner">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">GoMobile.com</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rankings</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="https://www.toptenreviews.com/mobile/phones/best-smartphones/ " target="_blank">Ranking by Configuration</a>
                  <a class="dropdown-item" href="https://www.mbaskool.com/fun-corner/top-brand-lists/17610-top-10-global-mobile-phone-brands-in-2018.html" target="_blank">Ranking by User</a>

                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Phone Information</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="Huawei.html" target="_blank">Huawei</a>
                  <a class="dropdown-item" href="samsung.html" target="_blank">Samsung</a>

                  <a class="dropdown-item" href="oneplus.html" target="_blank">OnePlus</a>
                   <a class="dropdown-item" href="vivo.html" target="_blank">Vivo</a>
                    <a class="dropdown-item" href="Xiaomi.html" target="_blank">Xiaomi</a>
                     <a class="dropdown-item" href="oppo.html" target="_blank">oppo</a>

                </div>

              </li>

             
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login.php">Login</a> / <a href="register.php">Register</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay
      <div class="container">
        <h2>Images Side by Side</h2>
<p>How to create side-by-side images with the CSS float property:</p>

<div class="row">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM phones";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo "
		<div class='column'>
			<a class='nav-link' href='".$row['ref']."' target='_blank'>".$row['model']."</a><br>
      <h3>".$row['price']."</h3><br>
      <img src='images/".$row['image']."' alt='' style='width:50%'>
		</div>
		";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</div>

    <div class="py-5 block-22">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0 pr-md-5">
            <h2 class="heading">Search phone</h2>
            <p>Find your favourite phone and information.</p>
          </div>
          <div class="col-md-6">
            <form action="#" class="subscribe">
              <div class="form-group">
                <input type="text" class="form-control email" placeholder="Enter Phone name">
             <input type="submit" class="btn btn-primary submit" value="Search">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3>Phone</h3>
            <p>Find your favourite phone here.</p>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About Us</a></li>
                
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                 
               
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="login.php">Privacy</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">1/5-C, Mirpur-2,Dhaka-1216,Bangladesh</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">01517114443</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">shipa96jannat@gmail.com</span></a></li>

              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">

            <p class="float-md-right">
              Copyright &copy; Shipa jannat. All rights reserved |
              <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook p-2"></a>
              <a href="https://twitter.com/login?lang=en" target="_blank" class="fa fa-twitter p-2"></a>
              <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin p-2"></a>
              <a href="https://www.instagram.com/?hl=en " target="_blank"class="fa fa-instagram p-2"></a>

            </p>
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
    <script src="js/bootstrap.min.js"></script>k,
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>
