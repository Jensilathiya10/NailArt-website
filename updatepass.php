
<?php
 error_reporting(E_ERROR | E_PARSE);
    require("config.php");
    session_start();
    if(!isset($_SESSION["username"])){
        header("location: index.php");
    }

    if(isset($_POST['update'])){
        $oldpass = $_POST['oldpass'];
        $user =$_SESSION["username"];
        $newpass = $_POST['newpass'];
        $query = "update users set password='$newpass' where username = '$user' ";
        $result = mysqli_query($con,$query);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title>NailArt-update password</title>
    
    <!-- animate.css-->  
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- Timeline -->
    <link rel="stylesheet" href="assets/vendor/timeline/timeline.css"> 
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet"> 
     
</head>

<body>
    <button onclick="topFunction()" id="myBtn" class="bounce-1" title="Go to top"><i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </button>

    <div class="search-section">
        <a class="close-search" href="#"></a>
        <div class="d-flex justify-content-center align-items-center h-100">
            <form method="post" action="#" class="w-50">
                <div class="row">
                    <div class="col-10">
                        <input type="search" value="" class="form-control palce bg-transparent border-0 search-input"
                            placeholder="Search Here ..." />
                    </div>
                    <div class="col-2 mt-3">
                        <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <!-- Loading Screen -->
    <!-- <div id="ju-loading-screen">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div> -->

    <?php
        require("nav.php");
    ?>



<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Update Password</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Updatepass</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content -->   
<div class="container">
     <div class="row my-4 my-lg-5">
          <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
               <img src="./assets/custom/images/sign.jpg" alt="signin" class="img-fluid">
               <p class="font-20 semi-font fables-main-text-color mt-4 mb-4 mb-lg-5">Update Password</p>
               <form action="" method="POST">
                  <div class="form-group"> 
                      <div class="input-icon">
                          <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                          <input type="text" name="oldpass" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  placeholder="Old Password"> 
                      </div>
                    
                  </div>
                  <div class="form-group"> 
                      <div class="input-icon">
                         <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                         <input type="text" name="newpass" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="New Password">
                      </div>
                    
                  </div> 
                  <button type="submit" name="update" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color font-16 semi-font py-3">Update</button>
                  <a href="#" class="fables-forth-text-color font-16 fables-second-hover-color underline mt-3 mb-4 m-lg-5 d-block">Forgot Password ?</a>
                </form>
                
          </div>
     </div>

</div>
      
<!-- /End page content -->
    
    
<!-- Start Footer 2 Background Image  -->
<div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules">
    <div class="container">
        <div class="row">
            
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <div class="navbar-brand text-center fables-logo-brand pl-0" style="width: 8em;">
                    <h1 class="m-0 site-logo "><a href="index.php" class="text-center">NailArt</a></h1>

                </div>
                <p class="font-15 fables-third-text-color">
                    t is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters.
                    <br><br>
                    t is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout.
                </p>

            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">Contact us</h2>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span
                            class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>
                        Address Information</h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">level13, 2Elizabeth St, Melbourne, Victor
                        2000</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span
                            class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>
                        Call Now </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">+333 111 111 000</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span
                            class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>
                        Mail </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">adminsupport@website.com</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">EXPLORE OUR SITE
                </h2>
                <ul class="nav fables-footer-links">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="testimonials.php">Testimonials</a></li>
                </ul>
            </div>

        </div>

    </div>
</div>
<div class="copyright  mt-0 border-0 white-color" style="background-color: #82a7b3  ;">
    <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
        <li><a href="#" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    </ul>
    <p class="mb-0">Copyright © me 2018. All rights reserved.</p>

</div>
<!-- /End Footer 2 Background Image --> 


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/custom/js/custom.js"></script>  
   
    
</body>
</html>