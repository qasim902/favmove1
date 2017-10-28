<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Favourite Move</title>

</head>
<body>

<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/settings.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/search.css">
<link rel="stylesheet" type="text/css" href="<?= $assets;?>css/style.css">
<link rel="icon" href="<?= $assets;?>img/icon.png">

<header class="layout_double">
  <div class="topbar dark">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <p>We are Best in Town With 40 years of Experience.</p>
        </div>
        <div class="col-md-7 text-right">
          <ul class="breadcrumb_top text-right">
            <li><a href="#"><i class="icon-icons43"></i>Favorites</a></li>
            <li><a href="#"><i class="icon-icons215"></i>Submit Property</a></li>
            <li><a href="#"><i class="icon-icons215"></i>My Property</a></li>
            <li><a href="#"><i class="icon-icons230"></i>Profile</a></li>
            <?php if ($this->session->userdata('userData')['logged_in'])
            { ?>
<li class="colors"><a href="user_login"><i class="icon-icons179"></i>Logout</a></li>
<?php
            }else { ?>
            <li class="colors"><a href="user_login"><i class="icon-icons179"></i>Login / Register</a></li>
<?php
}
?>            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header-upper dark">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="logo">
            <a href="index.php"><!-- <img alt="" src="img/logo1.png" class="img-responsive"> -->
          <h3 style="color:white;">LOGO</h3>
        </a>
          </div>
        </div>
        <!--Info Box-->
        <div class="col-md-9 col-sm-12 right">
          <div class="info-box first">
            <div class="icons"><i class="icon-telephone114"></i></div>
            <ul>
              <li><strong>Phone Number</strong></li>
              <li>+44 90023 45678</li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons74"></i></div>
            <ul>
              <li><strong>Favourite Move</strong></li>
              <li>London, UK</li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons142"></i></div>
            <ul>
              <li><strong>Email Address</strong></li>
              <li><a href="#">info@favouritemove.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="attr-nav">
        <ul class="social_share clearfix">
        <li><a href="https://www.facebook.com/Favorite-Move-289824988168746/" class="facebook"><i class="icon-facebook-1"></i></a></li>
          <li><a href="https://twitter.com/FavoriteMove?lang=en" class="twitter"><i class="icon-twitter-1"></i></a></li>
          <li><a href="https://plus.google.com/u/0/117312310920088960356" class="google"><i class="icon-google4"></i></a></li>
          <li><a href="https://www.linkedin.com/in/favorite-move-6b703a151/" class="linkden"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>

      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
          </button>
        <a class="navbar-brand sticky_logo" href="index.php">
          <h3 style="color:black;">LOGO</h3>
          <!-- <img src="img/logo.png" class="logo" alt=""> --></a>
      </div>
      <!-- End Header Navigation -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About Us</a></li>
          <!-- <li class="dropdown active">
              <a href="#." class="dropdown-toggle" data-toggle="dropdown">Home </a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Home Style 1</a></li>
                <li><a href="index2.html">Home Style 2</a></li>
                <li><a href="index3.html">Home Style 3</a></li>
                <li><a href="index4.html">Home Style 4</a></li>
                <li> <a href="index5.html">Home Style 5</a></li>
                <li> <a href="index6.html">Home Style 6</a></li>
                <li> <a href="index7.html">Home Style 7</a></li>
                <li> <a href="index8.html">Home Style 8</a></li>
                <li> <a href="index9.html">Home Style 9</a></li>
                <li> <a href="fullscreen.html">Home Fullscreen<span>new</span></a></li>
              </ul>
            </li> -->
          <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-3">
                    <h5 class="title">PROPERTIES LIST</h5>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="properties?o=b">Buy Property</a></li>
                        <li><a href="properties?o=r">Rent Property</a></li>
                        <li><a href="properties?o=n"><b>New Properties</b></a></li>
                        <!-- <li><a href="listing2.html">Search by City</a></li>
                          <li><a href="listing5.html">Search by Category</a></li>
                          <li><a href="listing3.html">Search by Type</a></li> -->
                      </ul>
                    </div>
                  </div>
                  <div class="col-menu col-md-9">
                    <h5 class="title bottom20">PROPERTIES LIST</h5>
                    <div class="row">
                      <div id="nav_slider" class="owl-carousel">
                        <div class="item">
                          <div class="image bottom15">
                            <a href="property_detail.php"><img src="<?= $assets;?>img/nav-slider1.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">for rent</span></a>
                          </div>
                          <h4><a href="property_detail.php">Park Avenue Apartment</a></h4>
                          <p>Towson London, MR 21501</p>
                        </div>
                        <div class="item">
                          <div class="image bottom15">
                            <a href="property_detail.php"><img src="<?= $assets;?>img/nav-slider2.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">for rent</span></a>
                          </div>
                          <h4><a href="property_detail.php">Park Avenue Apartment</a></h4>
                          <p>Towson London, MR 21501</p>
                        </div>
                        <div class="item">
                          <div class="image bottom15">
                            <a href="property_detail.php"><img src="<?= $assets;?>img/nav-slider3.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">for rent</span></a>
                          </div>
                          <h4><a href="property_detail.php">Park Avenue Apartment</a></h4>
                          <p>Towson London, MR 21501</p>
                        </div>
                        <div class="item">
                          <div class="image bottom15">
                            <a href="property_detail.php"><img src="<?= $assets;?>img/nav-slider1.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">for rent</span></a>
                          </div>
                          <h4><a href="property_detail.php">Park Avenue Apartment</a></h4>
                          <p>Towson London, MR 21501</p>
                        </div>
                        <div class="item">
                          <div class="image bottom15">
                            <a href="property_detail.php"><img src="<?= $assets;?>img/nav-slider2.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">for rent</span></a>
                          </div>
                          <h4><a href="property_detail.php">Park Avenue Apartment</a></h4>
                          <p>Towson London, MR 21501</p>
                        </div>
                        <div class="item">
                          <div class="image bottom15">
                            <a href="property_detail.php"><img src="<?= $assets;?>img/nav-slider3.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">for rent</span></a>
                          </div>
                          <h4><a href="property_detail.php">Park Avenue Apartment</a></h4>
                          <p>Towson London, MR 21501</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agents</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-3">
                    <h5 class="title">AGENT LIST</h5>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="agents?s=1">Search an Agent</a></li>
                        <li><a href="agents?l=1">List Agents</a></li>
                        <!-- <li><a href="listing2.html">Search by City</a></li>
                          <li><a href="listing5.html">Search by Category</a></li>
                          <li><a href="listing3.html">Search by Type</a></li> -->
                      </ul>
                    </div>
                  </div>
                  <div class="col-menu col-md-9">
                    <h5 class="title bottom20">AGENT LIST</h5>
                    <div class="row">
                      <div id="nav_slider" class="owl-carousel">
                        <div class="item">
                          <div class="image bottom15">
                            <a href="agent_profile.php">
                            <img src="<?= $assets;?>img/agent-media1.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">Available</span>
                            </a>
                          </div>
                          <h4><a href="agent_profile.php">John Jacobs</a></h4>
                          <p>Towson London, MR 21501</p>
                        </div>
                        <div class="item">
                          <div class="image bottom15">
                              <a href="agent_profile.php">
                            <img src="<?= $assets;?>img/agent-media2.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">for rent</span>
                            </a>
                          </div>
                          <h4><a href="agent_profile.php">Sarah Parker</a></h4>
                          <p>Towson London, MR 21501</p>
                        </div>
                        <div class="item">
                          <div class="image bottom15">
                              <a href="agent_profile.php">
                            <img src="<?= $assets;?>img/agent-media1.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">Available</span>
                            </a>
                          </div>
                          <h4><a href="agent_profile.php">John Jacobs</a></h4>
                          <p>Towson London, MR 21501</p>
                        </div>
                        <div class="item">
                          <div class="image bottom15">
                              <a href="agent_profile.php">
                            <img src="<?= $assets;?>img/agent-media2.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">for rent</span>
                            </a>
                          </div>
                          <h4><a href="agent_profile.php">Sarah Parker</a></h4>
                          <p>Towson London, MR 21501</p>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>

          <!--  <li class="dropdown megamenu-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
              <ul class="dropdown-menu megamenu-content bg" role="menu">
                <li>
                  <div class="row">
                    <div class="col-menu col-md-3">
                      <h5 class="title">PROPERTY LISTINGS</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="listing1.html">List Style 1</a></li>
                          <li><a href="listing2.html">List Style 2</a></li>
                          <li><a href="listing3.html">List Style 3</a></li>
                          <li><a href="listing4.html">List Style 4</a></li>
                          <li><a href="listing5.html">List Style 5</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title">PROPERTY LISTINGS</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="listing6.html">List Style 5</a></li>
                          <li><a href="listing7.html">List Style 6</a></li>
                          <li><a href="listing1.html">Search by City</a></li>
                          <li><a href="listing2.html">Search by Category</a></li>
                          <li><a href="listing3.html">Search by Type</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title">PROPERTY DETAIL</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="property_detail1.html">Property Detail 1</a></li>
                          <li><a href="property_detail2.html">Property Detail 2</a></li>
                          <li><a href="property_detail3.html">Property Detail 3</a></li>
                          <li><a href="index7.html">Single Property</a></li>
                          <li><a href="listing4.html">Search by Type</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title">OTHER PAGES</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="favorite_properties.html">Favorite Properties</a></li>
                          <li><a href="agent_profile.html">Agent Profile</a></li>
                          <li><a href="404.html">404 Error</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                          <li><a href="testimonial.html">Testimonials</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li> -->
          <li><a href="news">News</a></li>
          <!--  <li class="dropdown">
              <a href="#." class="dropdown-toggle" data-toggle="dropdown">News </a>
              <ul class="dropdown-menu">
                <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">News</a>
                  <ul class="dropdown-menu">
                    <li><a href="news.html">news Style1</a></li>
                    <li><a href="news2.html">news Style2</a></li>
                    <li><a href="news3.html">news Style3</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Property Agents</a>
                  <ul class="dropdown-menu">
                    <li><a href="agent1.html">Agent Style1</a></li>
                    <li><a href="agent2.html">Agent Style2</a></li>
                    <li><a href="agent3.html">Agent Style3</a></li>
                    <li><a href="agent4.htm4">Agent Style4</a></li>
                    <li><a href="agent5.htm5">Agent Style5</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Agetn Profile Styles</a>
                  <ul class="dropdown-menu">
                    <li><a href="agent_profile.html">Agent Profile 1</a></li>
                    <li><a href="agent_profile2.html">Agent Profile 2</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Testimonials</a>
                <ul class="dropdown-menu">
                    <li><a href="testimonial.html">Style 1</a></li>
                    <li><a href="testimonial2.html">Style 2</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">FAQ's</a>
                <ul class="dropdown-menu">
                    <li><a href="faq.html">Style 1</a></li>
                    <li><a href="faq2.html">Style 2</a></li>
                  </ul>
                </li>
                <li><a href="favorite_properties.html">Favorite Properties</a></li>
                <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">404 Error</a>
                <ul class="dropdown-menu">
                    <li><a href="404.html">404 Error 1</a></li>
                    <li><a href="404-2.html">404 Error 2</a></li>
                  </ul>
                </li>
              </ul>
            </li> -->
          <li><a href="contactus">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
 
    <?php   
        $data['assets'] = $assets;
        if(isset($_view) && $_view)
        {
          if(isset($defdata) && $defdata)
          {
            
            $data = $defdata;
            
          }
          if(isset($viewdata) && $viewdata)
          {

            $data['viewdata'] = $viewdata;
                $this->load->view($_view,$data);
          }
          else
          {
            $this->load->view($_view,$data);
          }
      }
        else
          {
             show_404();
          }
    ?>



<!--Footer-->
<footer class="footer_fourth">

<div class="container padding_top">
  <div class="row">
    <div class="col-md-3 col-sm-6">
      <div class="footer_panel bottom30">
        <a href="#." class="logo bottom30">
            <!-- <img src="img/logo.png" alt="logo"> -->
            <h2>LOGO</h2>
        </a>
        <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
          tempor cum consectetuer 
          adipiscing.
        </p>
        
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footer_panel bottom30">
        <h4 class="bottom30">Search by Area</h4>
        <table style="width:100%;">
          <tbody>
            <tr>
              <td>
                <ul class="links">
                  <li><a href="#."><i></i>About</a></li>
                  <li class="active"><a href="#."><i></i>News</a></li>
                  <li><a href="#."> <i></i>Contacts</a></li>
                  <li><a href="#."><i></i>Testimonials</a></li>
                  <li><a href="#."><i></i>Typography</a></li>
                </ul>
              </td>
              <td class="text-right">
                <ul class="links text-left">
                  <li><a href="#."><i></i>Services</a></li>
                  <li class="active"><a href="#."><i></i>Careers</a></li>
                  <li><a href="#."><i></i>Our team</a></li>
                  <li><a href="#."><i></i>Shop</a></li>
                  <li><a href="#."><i></i>Our approach</a></li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footer_panel bottom30">
        <h4 class="bottom30">Get in Touch</h4>
        <ul class="getin_touch">
        <!--   <li><i class="icon-telephone114"></i>01 900 234 567 - 68</li> -->
         <!--  <li><a href="javascript:void(0)"><i class="icon-mail-envelope-open"></i>info@castle.com</a></li>
          <li><a href="javascript:void(0)"><i class="icon-global"></i>www.castle.com</a></li> -->
          <li><i class="icon-icons74"></i>London, UK</li>
        </ul>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footer_panel bottom30">
        <h4 class="bottom30">Subscribe</h4>
        <p>Sign up with your email to get latest updates and offers</p>
        <form class="top30">
          <input class="search" placeholder="Enter your Email" type="search">
          <a class="button_s" href="#.">
          <i class="icon-mail-envelope-open"></i>
          </a>
        </form>
      </div>
    </div>
  </div>
  <!--CopyRight-->
  <div class="copyright_simple">
    <div class="row">
      <div class="col-md-6 col-sm-5 top20 bottom20">
        <p>Copyright &copy; 2017 <span><a href="http://www.favouritemove.com/">Favourite Move</a></span>. All rights reserved.</p>
      </div>
      <div class="col-md-6 col-sm-7 text-right top15 bottom10">
        <ul class="social_share">
          <li><a href="https://www.facebook.com/Favorite-Move-289824988168746/" class="facebook"><i class="icon-facebook-1"></i></a></li>
          <li><a href="https://twitter.com/FavoriteMove?lang=en" class="twitter"><i class="icon-twitter-1"></i></a></li>
          <li><a href="https://plus.google.com/u/0/117312310920088960356" class="google"><i class="icon-google4"></i></a></li>
          <li><a href="https://www.linkedin.com/in/favorite-move-6b703a151/" class="linkden"><i class="fa fa-linkedin"></i></a></li>
          <!-- <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li> -->
        </ul>
      </div>
    </div>
  </div>
</div>
</footer>



<script type="text/javascript" language="javascript">
function myMap() {
  var mapCanvas = document.getElementById("single_map");
  var myCenter = new google.maps.LatLng(51.508742,-0.120850); 
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
  animation:google.maps.Animation.BOUNCE,
    icon: "images/map_marker.png"
  });
  marker.setMap(map);
}

</script>

<script src="resources/js/jquery-2.1.4.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script src="resources/js/bootsnav.js"></script>
<script src="resources/js/jquery.parallax-1.1.3.js"></script>
<script src="resources/js/jquery.appear.js"></script>
<script src="resources/js/jquery-countTo.js"></script>
<script src="resources/js/masonry.pkgd.min.js"></script>
<script src="resources/js/range-Slider.min.js"></script>
<script src="resources/js/owl.carousel.min.js"></script>
<script src="resources/js/jquery.cubeportfolio.min.js"></script>
<script src="resources/js/selectbox-0.2.min.js"></script>
<script src="resources/js/zelect.js"></script>
<script src="resources/js/jquery.fancybox.js"></script>
<script src="resources/js/jquery.themepunch.tools.min.js"></script>
<script src="resources/js/jquery.themepunch.revolution.min.js"></script>
<script src="resources/js/revolution.extension.layeranimation.min.js"></script>
<script src="resources/js/revolution.extension.navigation.min.js"></script>
<script src="resources/js/revolution.extension.parallax.min.js"></script>
<script src="resources/js/revolution.extension.slideanims.min.js"></script>
<script src="resources/js/revolution.extension.video.min.js"></script>
<script src="resources/js/custom.js"></script>
<script src="resources/js/functions.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 
<script src="resources/js/editor.js"></script>
<script src="resources/js/dropzone.min.js"></script>
<script type="text/javascript">
   $("#txtEditor").Editor();
   $('[data-toggle="tooltip"]').tooltip(); 
</script>
</body>
</html>



