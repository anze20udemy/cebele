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
  <title>{{ setting('site.title') }}</title>

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
  <link rel="stylesheet" href="assets/css/style.css">

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

  <!-- Preloader start -->
  <div class="bee-site-preloader-wrapper">
    <div class="preloder-logo"><img src="assets/images/logo.png" alt="w-Beekeeping"/></div>
    <div class="spinner">
      <div class="sk-child sk-bounce1"></div>
      <div class="sk-child sk-bounce2"></div>
      <div class="sk-child sk-bounce3"></div>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- Header area start -->
@include('partials.header')
<!-- Header area End -->

  <!-- Main menu start -->
@include('partials.navigation')
<!-- Main menu end -->




  <!-- Slider Start -->
  <div class="homepage-slides-wrapper">
    <div class="homepage-slides text-center">
      <!-- Slider item1 start-->
      <div class="single-slide-item slide-bg-1"></div>
      <!-- Slider item1 end-->

      <!-- Slider item2 start-->
      <div class="single-slide-item slide-bg-2"></div>
      <!-- Slider item2 end-->
    </div>

  </div>
  <!-- Slider End -->

  <!-- About BeeKeeping start -->
  <div class="bee-content-block bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 wow fadeInUp">
          <div class="section-title">
            <h2 class="title-bg">About BeeKeeping for beginners</h2>
          </div>
          <div class="welcome-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
            <a href="about.html" class="bee-button">Read More</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About BeeKeeping End -->

  <!-- Feature Products start -->
  <div class="bee-content-block home-product-sec">
    <div class="home-product-title">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2 class="title-bg">Izdelki iz medu</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="home-product-block arrow-bg">
      <div class="container">
        <div class="row">
          <div class="feature-product-4">
            @foreach ($products as $product)
            <div class="feature-product-item">
              <div class="single-product"> <img src="{{ productImage($product->image) }}" alt="Beekeeping Hive"/>
                <div class="p-top-price">{{ $product->presentPrice() }}</div>
                <div class="product-hover">
                  <h4>{{ $product->name }}</h4>
                  <div class="prod-hover-price"><b>Cena:</b>{{ $product->presentPrice() }}</div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
                </div>
              </div>
            </div>

            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature Products end -->
{{--
  <!-- Beekeeping Training start -->
  <div class="bee-content-block feature-product-dark-bg">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title wow fadeInUp">
            <h2 class="title-bg">Beekeeping Training For Beginner</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="training-box"> <a href="" title="">
              <div class="training-icon"><img src="assets/images/bee-training-1.png" alt=""/></div>
              <h4>Handling of beehives</h4>
              <p> It has survived not only five centuries, but also the leap into electronic typesetting.</p>
            </a> </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="training-box"> <a href="" title="">
              <div class="training-icon"><img src="assets/images/bee-training-2.png" alt=""/></div>
              <h4>Beehive Nutrition</h4>
              <p> It has survived not only five centuries, but also the leap into electronic typesetting.</p>
            </a> </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="training-box"> <a href="" title="">
              <div class="training-icon"><img src="assets/images/bee-training-3.png" alt=""/></div>
              <h4>Movement of bees</h4>
              <p> It has survived not only five centuries, but also the leap into electronic typesetting.</p>
            </a> </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="training-box"> <a href="" title="">
              <div class="training-icon"><img src="assets/images/bee-training-4.png" alt=""/></div>
              <h4>Honey Extraction</h4>
              <p> It has survived not only five centuries, but also the leap into electronic typesetting.</p>
            </a> </div>
        </div>
      </div>
      <div class="row">
        <div class="container text-center"> <a href="training.html" class="bee-button-white mt80">Check Our All Training</a> </div>
      </div>
    </div>
  </div>
  <!-- Beekeeping Training End -->

  <!-- Feature Honey Products start -->
  <div class="bee-content-block home-product-sec">
    <div class="home-product-title">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2 class="title-bg">Honey Products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="home-product-block arrow-bg">
      <div class="container">
        <div class="row">
          <div class="feature-product-4">
            <div class="feature-product-item">
              <div class="single-product"> <img src="assets/images/product-5.jpg" alt="Beekeeping Hive"/>
                <div class="p-top-price">$40 - $49</div>
                <div class="product-hover">
                  <h4>Pure Flower Honey</h4>
                  <div class="prod-hover-price"><b>Price:</b>$40 - $49</div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="feature-product-item">
              <div class="single-product"> <img src="assets/images/product-6.jpg" alt="Beekeeping Hive"/>
                <div class="p-top-price">$32 - $39</div>
                <div class="product-hover">
                  <h4>Mustard Flower Honey</h4>
                  <div class="prod-hover-price"><b>Price:</b>$32 - $39</div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="feature-product-item">
              <div class="single-product"> <img src="assets/images/product-7.jpg" alt="Beekeeping Hive"/>
                <div class="p-top-price">$29 - $32</div>
                <div class="product-hover">
                  <h4>Honey Pancake</h4>
                  <div class="prod-hover-price"><b>Price:</b>$29 - $32</div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="feature-product-item">
              <div class="single-product"> <img src="assets/images/product-8.jpg" alt="Beekeeping Hive"/>
                <div class="p-top-price">$36 - $43</div>
                <div class="product-hover">
                  <h4>Black Seed Honey</h4>
                  <div class="prod-hover-price"><b>Price:</b>$36 - $43</div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="feature-product-item">
              <div class="single-product"> <img src="assets/images/product-9.jpg" alt="Honey Toast"/>
                <div class="p-top-price">$32 - $39</div>
                <div class="product-hover">
                  <h4>Honey Toast Consists</h4>
                  <div class="prod-hover-price"><b>Price:</b>$32 - $39</div>
                  <p>Honey Toast Consists of bread topped with honey and ice cream, full testy.</p>
                  <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>--}}
  <!-- Feature Honey Products end -->

  <!-- About Bee start -->
  <div class="bee-content-block pt0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title wow fadeInUp">
            <h2 class="title-bg">About Bees</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
          <div class="about-bee wow fadeInLeft">
            <div class="bee-icon"><img src="assets/images/queen-bee.png" alt="Queen Bee"/></div>
            <h4>Queen Bee</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            <a href="#" title="" class="readmore">Read More <i class="fa fa-angle-right"></i></a> </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
          <div class="about-bee wow fadeInUp">
            <div class="bee-icon"><img src="assets/images/drone-bee.png" alt="Drone Bee"/></div>
            <h4>Drone Bee</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            <a href="#" title="" class="readmore">Read More <i class="fa fa-angle-right"></i></a> </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
          <div class="about-bee wow fadeInRight">
            <div class="bee-icon"><img src="assets/images/worker-bee.png" alt="Worker Bee"/></div>
            <h4>Worker Bee</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            <a href="#" title="" class="readmore">Read More <i class="fa fa-angle-right"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Bee End -->

  <!-- Contact Button start -->
  <div class="bee-content-block order-request-btn-sec">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-9 wow fadeInLeft">
          <h4>The Best quality product, for <span>Beekeeping</span> with <span>Bee!</span></h4>
        </div>
        <div class="col-12 col-lg-3 text-right wow fadeInRight"><a href="" title="" class="bee-button">Request For Order</a></div>
      </div>
    </div>
  </div>
  <!-- Contact Button End -->

  <!-- testimonial start -->
  <div class="bee-content-block testimonial-sec text-center wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="title-bg">Testimonial</h2>
        </div>
      </div>
      <div class="testimonial">
        <div class="testimonial-item"> <img src="assets/images/testimonial.jpg" alt="Client 1"/>
          <h4>Client Name</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<i class="fa fa-quote-right"></i></p>
        </div>
        <div class="testimonial-item"> <img src="assets/images/testimonial.jpg" alt="Client 2"/>
          <h4>Client Name</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<i class="fa fa-quote-right"></i></p>
        </div>
        <div class="testimonial-item"> <img src="assets/images/testimonial.jpg" alt="Client 3"/>
          <h4>Client Name</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<i class="fa fa-quote-right"></i></p>
        </div>
      </div>
    </div>
  </div>
  <!-- testimonial end -->

  <!-- Footer start -->
@include('partials.footer')
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