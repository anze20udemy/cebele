@extends('layout')
@section('content')
    <!-- Main menu end -->
{{--    <?php
    // READ FILES FROM THE GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "storage/galerija" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png}", GLOB_BRACE);
    ?>--}}

    <!-- Video Gallery start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row image-gallery-lightbox">
          <div class="col-12 col-md-6 col-lg-3 l-gallery-holder">

     <a class="latest-gallery" href="storage/bee-4092986_1920.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="storage/bee-4092986_1920.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-2.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-2.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-3.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-3.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-4.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-4.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-1.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-1.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-2.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-2.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-3.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-3.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-4.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-4.jpg" alt=""/></a>
          </div>
        </div>
        <div class="row image-gallery-lightbox">
          <div class="col-12 col-md-6 col-lg-4 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-1.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-1.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-2.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-2.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-3.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-3.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-4.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-4.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-1.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-1.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-2.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-2.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-3.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-3.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-4.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-4.jpg" alt=""/></a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 l-gallery-holder">
     <a class="latest-gallery" href="assets/images/product-1.jpg" title="ThemeForest Project"><i class="fa fa-search-plus"></i><img src="assets/images/product-1.jpg" alt=""/></a>
          </div>
        </div>    
    </div>
  </div>
  <!-- Video Gallery End --> 

@endsection