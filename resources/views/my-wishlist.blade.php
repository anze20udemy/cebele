@extends('layout')
@section('content')
  <!-- Main menu end -->



  <!-- My Wishlist start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-9">
          <div class="my-account-page-title">
            <h3>My Wishlist</h3>
          </div>
          <div class="order-section">
            <div class="order-details">
              <div class="order-product">
                <div class="order-product-img"><img src="assets/images/product-1.jpg" alt=""/></div>
                <div class="order-product-title"> <a href="">
                  <h5>Beekeeping Hive</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                  </a> </div>
              </div>
              <div class="order-status">
                <h6><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> Order(30)</h6>
                <p>Added 11 November 2017 </p>
              </div>
              <div class="order-action"> <a href="" class="btn-action btn-track">Add to card</a> <a href="" class="btn-action btn-cancel">Remove</a> </div>
            </div>
          </div>
          <div class="order-section">
            <div class="order-details">
              <div class="order-product">
                <div class="order-product-img"><img src="assets/images/product-2.jpg" alt=""/></div>
                <div class="order-product-title"> <a href="">
                  <h5>Beekeeping Smoker</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                  </a> </div>
              </div>
              <div class="order-status">
                <h6><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> Order(30)</h6>
                <p>Added 11 November 2017 </p>
              </div>
              <div class="order-action"> <a href="" class="btn-action btn-track">Add to card</a> <a href="" class="btn-action btn-cancel">Remove</a> </div>
            </div>
          </div>
          <div class="order-section">
            <div class="order-details">
              <div class="order-product">
                <div class="order-product-img"><img src="assets/images/product-3.jpg" alt=""/></div>
                <div class="order-product-title"> <a href="">
                  <h5>Beekeeping Brash</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                  </a> </div>
              </div>
              <div class="order-status">
                <h6><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> Order(30)</h6>
                <p>Added 11 November 2017 </p>
              </div>
              <div class="order-action"> <a href="" class="btn-action btn-track">Add to card</a> <a href="" class="btn-action btn-cancel">Remove</a> </div>
            </div>
          </div>
          <div class="order-section">
            <div class="order-details">
              <div class="order-product">
                <div class="order-product-img"><img src="assets/images/product-4.jpg" alt=""/></div>
                <div class="order-product-title"> <a href="">
                  <h5>Beekeeping Jacket</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                  </a> </div>
              </div>
              <div class="order-status">
                <h6><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> Order(30)</h6>
                <p>Added 11 November 2017 </p>
              </div>
              <div class="order-action"> <a href="" class="btn-action btn-track">Add to card</a> <a href="" class="btn-action btn-cancel">Remove</a> </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="left-block left-menu mt-md-30">
            <ul>
              <li><a href="my-account.htm" title="My Account">My Account Overview</a></li>
              <li><a href="edit-account.htm" title="Edit Account">Edit Account</a></li>
              <li><a href="my-order.html" title="My Order">My Order</a></li>
              <li class="active"><a href="my-wishlist.html" title="My Wishlist">My Wishlist</a></li>
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
  <!-- My Wishlist End --> 
  
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
@endsection