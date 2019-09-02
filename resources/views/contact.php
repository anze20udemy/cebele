<?php
   if(isset($_POST['contact'])){
	   
	   $name = $_POST['fullname'];
	   $company = $_POST['company'];
	   $email = $_POST['email'];
	   $phone = $_POST['phone'];

	   $message = "\nName    : ".$name.'<br><br>';  
	   $message .= "\nCompany    : ".$company.'<br><br>';                   
	   $message .= "\nEmail   : ".$email.'<br><br>'; 
	   $message .= "\nMobile Number   : ".$phone.'<br><br>';  
	   $message .= $_POST['message'];
		   
	   $to = 'sustar.anze@gmail.com';
				 
	   $headers  = 'MIME-Version: 1.0' . "\r\n";
	   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $subject = 'Mail from our website';
   
	   // Additional headers
	   $headers .= 'To: '.$name.' <'.$to.'>' . "\r\n";
	   $headers .= 'From: <anze20@hotmail.com>' . "\r\n";
									   
	   @mail($to, $subject, $message, $headers);  
	   
	   $message = "<div class='success'>'Your Message send sucsessfully.</div>";                                                
   }

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Bootstrap4, Multipurpose, Bee, Beekeeping, Honey, Honey Bee, responsive, template, Beekeeper, Hive, html, html5, css" />
    <meta name="author" content="web24service">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>w-Beekeeping  - The Multipurpose Ecommerce Honey Bee Keeping HTML5 Template</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/fevicon.png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!-- chat CSS -->
    <link rel="stylesheet" href="assets/css/chat.css">
    
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>
</head>
<body>
<!-- Main Wrapper Start --> 
<div class="main-wrapper">

<!-- skiptocontent start ( This section for blind and Google SEO, Also for page speed )--> 
<a id="skiptocontent" href="#maincontent">skip navigation</a> 
<!-- skiptocontent End --> 

<!-- Header area start -->
<header>
  <div class="container">
    <div class="header-content"> 
      <!-- Site logo Start -->
      <div class="logo"> <a href="index.html" title="w-Beekeeping"><img src="assets/images/logo.png" alt="w-Beekeeping"/></a> </div>
      <div class="top-menu-holder"></div>
      <!-- Site logo end -->
      <div class="header-right">
        <div class="top-menu">
          <ul>
            <li><a href="#">My Account</a>
              <ul>
                <li><a href="my-account.html">Account Overview</a></li>
                <li><a href="edit-account.html">Edit Account</a></li>
                <li><a href="my-order.html">My Order</a></li>
                <li><a href="my-wishlist.html">My Wishlist</a></li>
                <li><a href="cart.html">My Cart</a></li>
                <li><a href="order-tracking.html">Order Tracking</a></li>
                <li><a href="order-form.html">Create Order</a></li>
                <li><a href="change-pass.html">Change Password</a></li>
              </ul>
            </li>
            <li><a href="checkout.html">Checkout</a></li>
            <li><a href="login.html">Login</a></li>
          </ul>
        </div>
        <div class="header-search-bar">
          <form action="#">
            <input type="search" placeholder="kyewords.." class="search-box">
          </form>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header area End --> 

<!-- Main menu start -->
<nav class="full-width-menu">
  <div class="container">
    <div class="nav-block">
      <ul id="navigation">
        <li><a href="#">Home</a>
          <ul>
            <li><a href="index.html">Home version 1</a></li>
            <li><a href="index2.html">Home version 2</a></li>
            <li><a href="index3.html">Background video</a></li>
            <li><a href="index4.html">Box Layout with banner video</a></li>
          </ul>
        </li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="#">Shop</a>
          <ul>
            <li><a href="product.html">Shop page 1</a></li>
            <li><a href="product-2.html">Shop page 2</a></li>
            <li><a href="product-details.html">Shop Details</a></li>
          </ul>
        </li>
        <li><a href="news.html">News &amp; Media</a></li>
        <li><a href="#">Blog</a>
          <ul>
            <li><a href="blog.html">Blog Page</a></li>
            <li><a href="single-blog.html">Single Blog</a></li>
          </ul>
        </li>
        <li><a href="#">pages</a>
          <ul>
            <li><a href="training.html">Our Training</a></li>
            <li><a href="video-gallery.html">Video Gallery</a></li>
            <li><a href="photo-gallery.html">Photo Gallery</a></li>
            <li><a href="#">My Account</a>
              <ul>
                <li><a href="my-account.html">Account Overview</a></li>
                <li><a href="edit-account.html">Edit Account</a></li>
                <li><a href="my-order.html">My Order</a></li>
                <li><a href="my-wishlist.html">My Wishlist</a></li>
                <li><a href="cart.html">My Cart</a></li>
                <li><a href="order-tracking.html">Order Tracking</a></li>
                <li><a href="order-form.html">Create Order</a></li>
                <li><a href="change-pass.html">Change Password</a></li>
              </ul>
            </li>
            <li><a href="checkout.html">Checkout</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="registration.html">Registration</a></li>
            <li><a href="typography.html">Typography</a></li>
            <li><a href="404-error.html">404 Error</a></li>
            <li><a href="sitemap.html">Site map</a></li>
            <li><a href="coming-soon.html">Coming Soon</a></li>
          </ul>
        </li>
        <li class="nav-active"><a href="contact.html">Contuct Us</a></li>
      </ul>
    </div>
    <div class="cart" id="cart"><i class="fa fa-shopping-cart"></i><span class="badge">3</span></div>
    <div class="shopping-cart">
      <div class="shopping-cart-header">
        <div class="cart-status"><i class="fa fa-shopping-cart"></i><span class="badge">3</span></div>
        <div class="shopping-cart-total"> <span class="lighter-text">Total:</span> <span class="main-color-text">$2,229.97</span> </div>
      </div>
      <!--end shopping-cart-header -->
      
      <ul class="shopping-cart-items">
        <li class="clearfix"> <img src="assets/images/latest-post1.jpg" alt="item1" /> <span class="item-name">Beekeeping Hive for beeginer</span> <span class="item-price">$849.99</span> <span class="item-quantity">Quantity: 01</span> </li>
        <li class="clearfix"> <img src="assets/images/latest-post2.jpg" alt="item1" /> <span class="item-name">Beekeeping Smoker for Beekeeper</span> <span class="item-price">$1,249.99</span> <span class="item-quantity">Quantity: 01</span> </li>
        <li class="clearfix"> <img src="assets/images/latest-post3.jpg" alt="item1" /> <span class="item-name">Beekeeping Brash for Beekeeper</span> <span class="item-price">$129.99</span> <span class="item-quantity">Quantity: 01</span> </li>
      </ul>
      <a href="checkout.html" class="button">Checkout</a> </div>
    <div class="mobile-menu-wrapper"></div>
  </div>
</nav>
<!-- Main menu end --> 

<!-- Breadcroumbs start -->
<div class="bee-content-block bee-breadcroumb inner-bg-1">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-7">
        <h1>Contact Us</h1>
        <a href="index.html" title="Home">Home</a> / Contact Us </div>
      <div class="col-12 col-lg-5 text-right">
        <h4>The world best quality of product and Training, for <span>Beekeeping</span> with <span>Bee!</span></h4>
      </div>
    </div>
  </div>
</div>
<!-- Breadcroumbs end --> 

<!-- Address start -->
<div class="bee-content-block">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="contact-top">
          <div class="row">
            <div class="col-12 col-lg-5">
              <div class="address">
                <h3>Office Address</h3>
                <div class="address-block">
                  <ul>
                    <li class="address-icon"><strong>Adderss:</strong><br>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li class="phone-icon"><strong>Telephone No:</strong><br>
                      +88 01711 123456</li>
                    <li class="fax-icon"><strong>Fax No:</strong><br>
                      +88 01711 123456</li>
                    <li class="email-icon"><strong>Email:</strong><br>
                      <a href="mailto:web24service@gmail.com" title="">web24service@gmail.com</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-7">
              <div class="contact-form">
                <h3 class="heading3-border text-uppercase">Quick Feedback Form</h3>
                <?php if(isset($message)) echo $message;  ?>
                <form action="contact.php" enctype="multipart/form-data" method="post">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                        <input type="text" class="form-control" placeholder="Your Full Name" name="fullname" required >
                      </div>
                      <div class="col-12 col-md-6 col-lg-6">
                        <input type="text" class="form-control" placeholder="Company" name="company" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                      </div>
                      <div class="col-12 col-md-6 col-lg-6">
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message" name="message"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn bee-button" name="contact">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Address End --> 
    
    <!-- Map start -->
    <div class="row">
      <div class="col-12">
        <div class="map">
          <iframe src="https://www.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=++Gulshan-1,+Dhaka-1212.&aq=&sll=23.78024,90.418081&sspn=0.01076,0.018475&ie=UTF8&hq=&hnear=1+Gulshan+Ave,+Gulshan,+Dhaka,+Dhaka+Division+1212,+Bangladesh&t=m&z=14&ll=23.780244,90.418078&output=embed"></iframe>
        </div>
      </div>
    </div>
    <!-- Map End --> 
  </div>
</div>

<!--Newsletter start -->
<div class="bee-content-block newsletter-signup">
  <div class="container">
    <form action="#">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
          <input class="form-control" type="text" placeholder="First Name">
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
          <input class="form-control" type="text" placeholder="Last Name">
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
          <input class="form-control" type="text" placeholder="Email">
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
          <input class="btn btn-bee-news" type="submit" value="Signup For Newsletter">
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Newsletter end --> 

<!-- Footer start -->
<footer class="site-footer"> 
  <!-- Footer Top start -->
  <div class="footer-top-area wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="footer-wiz">
            <h3 class="footer-logo"><img src="assets/images/footer-logo.png" alt="Bee Keeping"/></h3>
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
            <ul class="footer-contact">
              <li><i class="fa fa-phone"></i> +88 01911 837404</li>
              <li><i class="fa fa-envelope"></i> info@companyname.com</li>
              <li><i class="fa fa-fax"></i> +88 02 123456</li>
            </ul>
            <div class="top-social bottom-social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-rss"></i></a> </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="footer-wiz footer-menu">
            <h3 class="footer-wiz-title">Quick Links</h3>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="product.html">Our Products</a></li>
              <li><a href="product-details.html">Product Details</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="single-blog.html">Single Blog</a></li>
              <li><a href="news.html">News &amp; Media</a></li>
              <li><a href="video-gallery.html">Video Gallery</a></li>
                <li><a href="photo-gallery.html">Photo Gallery</a></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="footer-wiz footer-menu">
            <h3 class="footer-wiz-title">Usefull Links</h3>
            <ul>
              <li><a href="my-account.html">My Account</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="registration.html">Registration</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="typography.html">Typography</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="sitemap.html">Site map</a></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="footer-wiz">
            <h3 class="footer-wiz-title">Latest News</h3>
            <ul class="latest-news">
              <li> <a href="" title="">when an unknown printer took</a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              </li>
              <li> <a href="" title="">when an unknown printer took</a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              </li>
            </ul>
            <a href="" class="all-news">Check All News</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top end --> 
  
  <!-- copyright start -->
  <div class="footer-bottom-area">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 wow fadeInLeft">Copyright © 2018 <span>Wrold BeeKeeping</span>. All Rights Reserved</div>
        <div class="col-12 col-lg-6 text-right wow fadeInRight">Powered By: <a href="http://web24service.com/" title="web24service" target="_blank">web24service</a></div>
      </div>
    </div>
  </div>
  <!-- copyright end --> 
</footer>
<!-- Footer end --> 
</div>
<!-- Main Wrapper end --> 

<!-- Start scroll top -->
<div class="scrollup"><i class="fa fa-angle-up"></i></div>
<!-- End scroll top --> 

<!-- Tether JS --> 
<script src="assets/js/tether.min.js"></script> 

<!-- Popper JS --> 
<script src="assets/js/popper.min.js"></script> 

<!-- Bootstrap JS --> 
<script src="assets/js/bootstrap.min.js"></script> 

<!-- OwlCarousel JS --> 
<script src="assets/js/owl.carousel.min.js"></script> 

<!-- Magnific Popup JS --> 
<script src="assets/js/jquery.magnific-popup.min.js"></script> 

<!-- Gallery Filter --> 
<script src="assets/js/jquery.mixitup.min.js"></script> 

<!-- Easy Zoom JS --> 
<script src="assets/js/easyzoom.js"></script> 

<!-- WOW JS --> 
<script src="assets/js/wow-1.3.0.min.js"></script> 

<!-- Chat JS --> 
<script src="assets/js/chat.js"></script> 

<!-- Coming Soon JS --> 
<script src="assets/js/coming-soon.js"></script> 

<!-- SlickNav JS --> 
<script src="assets/js/jquery.slicknav.min.js"></script> 

<!-- Active JS --> 
<script src="assets/js/active.js"></script>
</body>
</html>