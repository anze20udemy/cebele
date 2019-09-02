@extends('layout')
@section('content')
  <!-- Main menu end -->
  
  <!-- Product start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row breadcrumb-style2">
        <div class="col-12"> <a href="index.html" title="Home">Home</a> / gour products </div>
      </div>
      <div class="product-details-top">
        <div class="row"> 
          <!-- Product Zoom start -->
          <div class="col-12 col-lg-6">
            <div class="p-details-zoom ">
              <div class="p-zoom-big-images">
                <div class="easyzoom easyzoom--with-thumbnails"> <a href="assets/images/p-details-big.jpg" class="gallery_link" title="#popup_gallery"> <img src="assets/images/p-details-big.jpg" alt="Zoom Product 1" class="zoom-big-img" /> </a> </div>
              </div>
              <div id="popup_gallery" style="display:none;"> <a href="assets/images/p-details-big.jpg"> <img src="assets/images/p-details-small.jpg" alt="Zoom Product 1" /></a> <a href="assets/images/p-details-big2.jpg"><img src="assets/images/p-details-small2.jpg" alt="Zoom Product 1-1"/></a> </div>
              <div class="zoom-thambnail">
                <ul class="thumbnails" id="p-details-thumb-slide">
                  <li class="highlight"> <a href="assets/images/p-details-big.jpg" data-standard="assets/images/p-details-big.jpg"> <img src="assets/images/p-details-small.jpg" alt="Zoom Product 1" /> </a> </li>
                  <li> <a href="assets/images/p-details-big2.jpg" data-standard="assets/images/p-details-big2.jpg"> <img src="assets/images/p-details-small2.jpg" alt="Zoom Product 1-1"/> </a> </li>
                  <li> <a href="assets/images/p-details-big.jpg" data-standard="assets/images/p-details-big.jpg"> <img src="assets/images/p-details-small.jpg" alt="Zoom Product 1-2" /> </a> </li>
                  <li> <a href="assets/images/p-details-big2.jpg" data-standard="assets/images/p-details-big2.jpg"> <img src="assets/images/p-details-small2.jpg" alt="Zoom Product 1-3"/> </a> </li>
                  <li> <a href="assets/images/p-details-big.jpg" data-standard="assets/images/p-details-big.jpg"> <img src="assets/images/p-details-small.jpg" alt="Zoom Product 1-4" /> </a> </li>
                  <li> <a href="assets/images/p-details-big2.jpg" data-standard="assets/images/p-details-big2.jpg"> <img src="assets/images/p-details-small2.jpg" alt="Zoom Product 1-5"/> </a> </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Product Zoom End --> 
          
          <!-- Product Overdiew start -->
          <div class="col-12 col-lg-6">
            <div class="p-details-title">
              <h4>Beekeeping hive for beginer</h4>
              <div class="review-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i><span>(99 vote)</span> 120 order</div>
            </div>
            <div class="p-item p-item-price">
              <div class="p-item-title">Price:</div>
              <div class="p-item-main text-linethrough">$40.00/piece</div>
            </div>
            <div class="p-item p-item-price">
              <div class="p-item-title">Discount Price:</div>
              <div class="p-item-main"><strong>$35.00</strong>/piece</div>
            </div>
            <div class="p-item p-item-color">
              <div class="p-item-title">Item Color:</div>
              <div class="p-item-main"><span class="color-defalt"></span><span class="color-dark"></span><span class="color-sky"></span></div>
            </div>
            <div class="p-item p-item-shipping">
              <div class="p-item-title">Shipping:</div>
              <div class="p-item-main"><b>Not shipping for this product</b></div>
            </div>
            <div class="p-item p-item-quentity">
              <div class="p-item-title">Quantity:</div>
              <div class="p-item-main">
                <div class="quentity"><i class="fa fa-minus"></i>
                  <input type="text" class="form-control" value="1" name="quentity"/>
                  <i class="fa fa-plus"></i></div>
                piece (600 pieces available)</div>
            </div>
            <div class="p-item p-item-total-price">
              <div class="p-item-title">Total Price:</div>
              <div class="p-item-main"><strong>$35.00</strong></div>
            </div>
            <div class="p-item p-item-buttonGroup"> <a href="" title="" class="bee-button">Buy Now</a><a href="" title="" class="bee-button btn-gray">Add to cart</a> </div>
            <div class="p-item p-item-wishlist"> <a href="" title=""><i class="fa fa-heart-o"></i> Add to Wish List</a> <span>(17141 Adds)</span> </div>
            <div class="p-item p-item-returnPolicy">
              <div class="p-item-title">Return Policy:</div>
              <div class="p-item-main">Returns accepted if product not as described, buyer pays return shipping fee; or keep the product & agree refund with seller. <a href="">Read more</a></div>
            </div>
            <div class="p-item p-item-payment">
              <div class="p-item-title">Payment:</div>
              <div class="p-item-main"><i class="fa fa-cc-paypal"></i><i class="fa fa-cc-visa"></i><i class="fa fa-cc-mastercard"></i><i class="fa fa-cc-amex"></i><i class="fa fa-cc-discover"></i></div>
            </div>
          </div>
          <!-- Product Overview End --> 
        </div>
      </div>
      <!-- Product Details start -->
      <div class="p-tab-section">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active" href="#product_details" role="tab" data-toggle="tab">Product Details</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#feedback" role="tab" data-toggle="tab">Feedback(20)</a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="product_details">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <h5>INCLUDES (ALL COMPONENTS PRE-DRILLED):</h5>
            <ul>
              <li>Roof featuring shingled design and high pitch for optimal rain runoff</li>
              <li>Quilt box with canvas quilt</li>
              <li>1 bag of shredded cedar to fill quilt box</li>
              <li>Extra canvas to go between quilt box and top bars</li>
              <li>2 Warre boxes with windows and black walnut closures</li>
              <li>16 one piece top bars with wedge comb guides</li>
              <li>Standard screened bottom with closable insert</li>
              <li>Solid feet to elevate the hive off the ground and improve stability</li>
              <li>Stainless steel screws</li>
              <li>Assembly diagram and instructions</li>
            </ul>
            <h5>TOOLS REQUIRED:</h5>
            <ul>
              <li>Drill or screwdriver</li>
              <li>Stapler (for attaching canvas to quilt box)</li>
              <li>Approximate assembly time: 60 minutes</li>
            </ul>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="feedback">
            <h5>Feedback</h5>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="review-star">
              <h6>Your Rating</h6>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> </div>
            <div class="comment-form pt0">
              <form action="#">
                <div class="form-group">
                  <div class="row">
                    <div class="col-12 col-lg-6">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-12 col-lg-6">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Details End --> 
    </div>
  </div>
  <!-- Product End --> 
  
  <!-- Related Products start -->
  <div class="bee-content-block feature-product-block pt0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="title-bg title-bg-left">Related Products</h3>
        </div>
        <div class="feature-product-4">
          <div class="feature-product-item">
            <div class="single-product"> <img src="assets/images/product-1.jpg" alt="Beekeeping Hive"/>
              <div class="p-top-price">$40 - $49</div>
              <div class="product-hover">
                <h4>Beekeeping Hive</h4>
                <div class="prod-hover-price"><b>Price:</b>$40 - $49</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="feature-product-item">
            <div class="single-product"> <img src="assets/images/product-2.jpg" alt="Beekeeping Hive"/>
              <div class="p-top-price">$32 - $39</div>
              <div class="product-hover">
                <h4>Beekeeping Smoker</h4>
                <div class="prod-hover-price"><b>Price:</b>$32 - $39</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="feature-product-item">
            <div class="single-product"> <img src="assets/images/product-3.jpg" alt="Beekeeping Hive"/>
              <div class="p-top-price">$29 - $32</div>
              <div class="product-hover">
                <h4>Bee Brush</h4>
                <div class="prod-hover-price"><b>Price:</b>$29 - $32</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="feature-product-item">
            <div class="single-product"> <img src="assets/images/product-4.jpg" alt="Beekeeping Hive"/>
              <div class="p-top-price">$36 - $43</div>
              <div class="product-hover">
                <h4>Bee jackate</h4>
                <div class="prod-hover-price"><b>Price:</b>$36 - $43</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="feature-product-item">
            <div class="single-product"> <img src="assets/images/product-2.jpg" alt="Beekeeping Hive"/>
              <div class="p-top-price">$32 - $39</div>
              <div class="product-hover">
                <h4>Beekeeping Smoker</h4>
                <div class="prod-hover-price"><b>Price:</b>$32 - $39</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Related Products end --> 

@endsection