@extends('layout')
@section('content')
  <!-- Main menu end -->



  <!-- Edit Profile start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-9">
          <div class="my-account-page-title">
            <h3>Edit Profile</h3>
          </div>
          <div class="order-form">
            <form action="#">
              <h5>Personal information</h5>
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Your Name:</label>
                    <input type="text" class="form-control" name="fname" />
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Last Name:</label>
                    <input type="text" class="form-control" name="lname" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12">
                    <label>Address:</label>
                    <input type="text" class="form-control" name="phone" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>City:</label>
                    <input type="text" class="form-control" name="city" />
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>State:</label>
                    <input type="text" class="form-control" name="state" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>zip code:</label>
                    <input type="text" class="form-control" name="zip" />
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Country:</label>
                    <select class="form-control" name="country">
                      <option value="Alabama">Alabama</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Canada">Canada</option>
                      <option value="Japan">Japan</option>
                      <option value="United State">United State</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" />
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Phone:</label>
                    <input type="text" class="form-control" name="phone" />
                  </div>
                </div>
              </div>
              <h5>Shipment information</h5>
              <div class="checkbox mb20">
                <input type="checkbox" name="remember" id="remember" class="css-checkbox" />
                <label for="remember" class="css-label">Same as defalt address</label>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Your Name:</label>
                    <input type="text" class="form-control" name="fname" />
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Last Name:</label>
                    <input type="text" class="form-control" name="lname" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12">
                    <label>Address:</label>
                    <input type="text" class="form-control" name="phone" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>City:</label>
                    <input type="text" class="form-control" name="city" />
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>State:</label>
                    <input type="text" class="form-control" name="state" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>zip code:</label>
                    <input type="text" class="form-control" name="zip" />
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Country:</label>
                    <select class="form-control" name="country">
                      <option value="Alabama">Alabama</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Canada">Canada</option>
                      <option value="Japan">Japan</option>
                      <option value="United State">United State</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" />
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Phone:</label>
                    <input type="text" class="form-control" name="phone" />
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-submit">Update now</button>
            </form>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="left-block left-menu mt-md-30">
            <ul>
              <li><a href="my-account.htm" title="My Account">My Account Overview</a></li>
              <li class="active"><a href="edit-account.htm" title="Edit Account">Edit Account</a></li>
              <li><a href="my-order.html" title="My Order">My Order</a></li>
              <li><a href="my-wishlist.html" title="My Wishlist">My Wishlist</a></li>
              <li><a href="cart.html" title="My Cart">My Cart</a></li>
              <li><a href="order-tracking.html" title="Order Tracking">Order Tracking</a></li>
              <li><a href="order-form.html" title="Order Form">Order Form</a></li>
              <li><a href="change-pass.html" title="Change Password">Change Password</a></li>
              <li><a href="#" title="Sign out">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit Profile End --> 
  

  
  <!-- Footer start -->
  <footer class="site-footer"> 
    <!-- Footer Top start -->
    <div class="footer-top-area wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="footer-wiz">
              <h3 class="footer-logo"><img src="assets/images/footer-logo.png" alt="Beee Keeping"/></h3>
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

<!-- Chat Start -->
<div class="fabs">
  <div class="chat">
    <div class="chat_header">
      <div class="chat_option">
        <div class="header_img"> <img src="http://web24service.com/Razu.jpg" alt="Web24service"/> </div>
        <span id="chat_head">Razu Ahmed</span> <br>
        <span class="agent">Agent</span> <span class="online">(Online)</span> <span id="chat_fullscreen_loader" class="chat_fullscreen_loader"><i class="fullscreen fa fa-window-maximize"></i></span> </div>
    </div>
    <div class="chat_body chat_login"> <a id="chat_first_screen" class="fab"><i class="fa fa-arrow-right"></i></a>
      <p>We make it simple and seamless for businesses and people to talk to each other. Ask us anything</p>
    </div>
    <div id="chat_converse" class="chat_conversion chat_converse"> <span class="chat_msg_item chat_msg_item_admin"> <span class="chat_avatar"> <img src="http://web24service.com/Razu.jpg" alt="Web24service"/> </span> Hey there! Any question?</span> <span class="chat_msg_item chat_msg_item_user"> Hello!</span> <span class="status">Just now. Not seen yet</span> </div>
    <div class="fab_field"> <a id="fab_camera" class="fab"><i class="zmdi zmdi-camera"></i></a> <a id="fab_send" class="fab"><i class="zmdi zmdi-mail-send"></i></a>
      <textarea id="chatSend" name="chat_message" placeholder="Send a message" class="chat_field chat_message"></textarea>
    </div>
  </div>
  <a id="prime" class="fab"><i class="prime fa fa-comments-o"></i></a> </div>
<!-- Chat End --> 

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