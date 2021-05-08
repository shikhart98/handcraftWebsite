<?php
session_start();
include 'includes/dbconnection.php';

// check login cookies if present set the session values else have to login
if (isset($_COOKIE['loginCookie']) && $_COOKIE['loginCookie']) {
    $val = explode("+",$_COOKIE['loginCookie']);
    $_SESSION['EmailID'] = $val[0];
    $_SESSION['FirstName'] = $val[1];
    $_SESSION['LastName'] = $val[2];
    $_SESSION['UserID'] = $val[3];
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320">
    <!-- favicon links-->
    <link rel="icon" type="image/icon" href="favicon.png" />
    <!-- main css -->
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/custom_animation.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="js/plugin/owl/owl.carousel.css" />
    <link rel="stylesheet" href="js/plugin/range_slider/jquery-ui.css" />
    <link rel="stylesheet" href="css/style.css" media="screen" />
    <link rel="stylesheet" href="css/colors/default.css" id="colors" />

    <!--revolution-->
    <link href="js/plugin/revolution/css/settings.css" rel="stylesheet" type="text/css">
    <link href="js/plugin/revolution/css/layers.css" rel="stylesheet" type="text/css">
    <link href="js/plugin/revolution/css/navigation.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="js/plugin/owl/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" media="screen" />
    <link rel="stylesheet" href="css/colors/default.css" id="colors" />
</head>

<body>
    <!--preloader-->
    <div class="loader">
        <div class="loader-inner ball-scale-ripple-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!--main wrapper start-->
    <div id="wrapper">
        <!--top_header start-->
        <!--Header start-->
        <div class="hm_header_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-2">
                        <div class="hm_logo">
                            <a href="index.php"><img src="images/logo.jpg" alt="handmade-craft-logo" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="hm_top_search">
                            <input type="search" name="search" placeholder="Search....">
                            <span class="search_icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                        
                    </div>    
                </div>
            </div>
            <div class="hm_header_overlay"></div>
        </div>
            <li><div id="google_translate_element" ></div></li> 
        <!--menu start-->
        <div class="hm_menu_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="hm_menu_wrap">
							<nav>
								<div class="menu_btn"><span></span><span></span><span></span></div>
								<div class="hm_menu">
									<ul>
										<li class=""><a href="index.php">home</a>
										</li>
										
        <?php
          if(isset($_SESSION['UserID'])){
            echo'
            <li><a href="india.php">Explore India</a></li>
            <li><a href="profile.php?cart=1"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
            <li><a href="profile.php?wishlist=1"><i class="fa fa-heart" aria-hidden="true"></i> Wishlist</a></li>
            <li><a href="profile.php?order=1"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Orders</a></li>
            <li><a href="profile.php?profile=1"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a></li>
            <li><a href="includes/signout.php" class="rounded-pill">log out </a></li></ul>';
          }
          else {
            echo'
                   
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="india.php">Explore India</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php" class="rounded-pill">log in </a></li>
                    <li><a href="SellerDashboard/SellerDashboard/login.php" style="position:relative">log in as seller </a></li>

                 </ul>
                  
                  ';
          }

       ?>
                                  
								</div>
							</nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>