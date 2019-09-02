@extends('layout')
@section('content')
  <!-- Main menu end -->



  <!-- Registration start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="customer-login">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="customer-login-left">
              <div class="login-icon"><i class="fa fa-unlock-alt"></i></div>
              <h4>Welcome To new account</h4>
              <p>Create your account and buy what you need.<br>
                If you have account already, please <a href="#">Sign in</a>.</p>
              <div class=""> <a href="" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i> Sign in with Facebook</a> <a href="" class="btn btn-social btn-google-plus"><i class="fa fa-google-plus"></i> Sign in with Google</a> </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="customer-login-block">
              <h3>Registration</h3>
              <form action="#">
                <div class="form-group">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <label>First Name:</label>
                      <input type="text" class="form-control" name="fname" required />
                    </div>
                    <div class="col-12 col-sm-6">
                      <label>Last Name:</label>
                      <input type="text" class="form-control" name="fname" required />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <label>Email:</label>
                      <input type="email" class="form-control" name="email" required />
                    </div>
                    <div class="col-12 col-sm-6">
                      <label>Phone:</label>
                      <input type="text" class="form-control" name="phone" required />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <label>Password:</label>
                      <input type="password" class="form-control" name="pass" required />
                    </div>
                    <div class="col-12 col-sm-6">
                      <label>Confirm Password:</label>
                      <input type="password" class="form-control" name="cpass" required />
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-submit">Registration</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Registration End --> 

@endsection