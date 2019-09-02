@extends('layout')
@section('content')
  <!-- Main menu end -->



  <!-- Tracking Order start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-9">
          <div class="my-account-page-title">
            <h3>Tracking Order</h3>
          </div>
          <div class="track-result-step">
            <ul class="track-progress for-process-icon step-number4">
              <li class="icon-confirm-order progress-done">Ready for shipment</li>
              <li class="icon-dispatched-order progress-active">On the way</li>
              <li class="icon-arrive-order">Arrived your address</li>
              <li class="icon-product-deliver">Delivery successful</li>
            </ul>
          </div>
          <div class="tracking-information">
            <h4>Order information</h4>
            <ul>
              <li><span>Order number:</span> <span>88523836532315</span></li>
              <li><span>Shipment time:</span> <span>2017-12-10 17:50:02</span></li>
              <li><span>Receiver address:</span> <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</span></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="left-block left-menu mt-md-30">
            <ul>
              <li><a href="my-account.htm" title="My Account">My Account Overview</a></li>
              <li><a href="edit-account.htm" title="Edit Account">Edit Account</a></li>
              <li><a href="my-order.html" title="My Order">My Order</a></li>
              <li><a href="my-wishlist.html" title="My Wishlist">My Wishlist</a></li>
              <li><a href="cart.html" title="My Cart">My Cart</a></li>
              <li class="active"><a href="order-tracking.html" title="Order Tracking">Order Tracking</a></li>
              <li><a href="order-form.html" title="Order Form">Order Form</a></li>
              <li><a href="change-pass.html" title="Change Password">Change Password</a></li>
              <li><a href="#" title="Sign out">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Tracking Order End --> 
  
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