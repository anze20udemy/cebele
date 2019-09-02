@extends('layout')
@section('content')
  <!-- Main menu end -->



  <!-- Account Overview start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-9">
          <div class="my-account-page-title">
            <h3>My Account Overview</h3>
          </div>
          <div class="my-account-section">
            <h5>Personal Information <span><i class="fa fa-edit" aria-hidden="true"></i></span></h5>
            <ul>
              <li><span>Name:</span><span>Razu Ahmed</span></li>
              <li><span>Company:</span><span>Web24service</span></li>
              <li><span>Mobile:</span><span>+88 01911837404</span></li>
              <li><span>Email:</span><span>web24service@gmail.com</span></li>
              <li><span>Country:</span><span>Bangladesh</span></li>
              <li><span>Address:</span><span>It was popularised in the 1960s with the release of Letraset sheets containing.</span></li>
            </ul>
          </div>
          <div class="my-account-section">
            <h5>Shipping Address <span><i class="fa fa-edit" aria-hidden="true"></i></span></h5>
            <ul>
              <li><span>Name:</span><span>Razu Ahmed</span></li>
              <li><span>Address:</span><span>It was popularised in the 1960s with the release of Letraset sheets containing.</span></li>
              <li><span>Mobile:</span><span>+88 01911837404</span></li>
            </ul>
          </div>
        </div>
        @include ('partials.account_nav')
      </div>
    </div>
  </div>
  <!-- Account Overview End --> 
  

@endsection