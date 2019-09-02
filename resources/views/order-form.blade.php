@extends('layout')
@section('content')
  <!-- Main menu end -->



  <!-- Order Form start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-9">
          <div class="my-account-page-title">
            <h3>Create Order</h3>
          </div>
          <div class="order-form">
            <form action="#">
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Your Name:</label>
                    <input type="text" class="form-control" name="fname" />
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Phone:</label>
                    <input type="text" class="form-control" name="phone" />
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Product Key:</label>
                    <input type="text" class="form-control" name="productKey" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12">
                    <label>Comments:</label>
                    <textarea name="comments" class="form-control form-text"></textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-submit">Order Now</button>
            </form>
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
              <li><a href="order-tracking.html" title="Order Tracking">Order Tracking</a></li>
              <li class="active"><a href="order-form.html" title="Order Form">Order Form</a></li>
              <li><a href="change-pass.html" title="Change Password">Change Password</a></li>
              <li><a href="#" title="Sign out">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Order Form End --> 
