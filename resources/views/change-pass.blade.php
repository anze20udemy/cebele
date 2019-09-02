@extends('layout')
@section('content')
  <!-- Main menu end -->



  <!-- Change Password start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-9">
          <div class="my-account-page-title">
            <h3>Spremeni geslo</h3>
          </div>
          <div class="order-form change-pass-form">
            <form action="#">
              <div class="form-group">
                <div class="row">
                  <label class="col-12 col-sm-6 col-md-4 col-lg-4 text-right">Staro geslo:</label>
                  <div class="col-12 col-sm-6 col-md-8 col-lg-6">
                    <input type="password" class="form-control" name="oldPass" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-12 col-sm-6 col-md-4 col-lg-4 text-right">Novo geslo:</label>
                  <div class="col-12 col-sm-6 col-md-8 col-lg-6">
                    <input type="password" class="form-control" name="newPass" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-12 col-sm-6 col-md-4 col-lg-4 text-right">Potrdi novo geslo:</label>
                  <div class="col-12 col-sm-6 col-md-8 col-lg-6">
                    <input type="password" class="form-control" name="cNewPass" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6 offset-sm-6 col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-submit">Zamenjaj geslo</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        @include ('partials.account_nav')
      </div>
    </div>
  </div>
  <!-- Change Password End --> 
  

@endsection