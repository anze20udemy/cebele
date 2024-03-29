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
                            <h3>Registracija</h3>
                            <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <label>Ime in priimek:</label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Uporabniško ime" required autofocus>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <label>Email naslov:</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <label>Geslo:</label>
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Geslo" placeholder="Geslo" required>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <label>Potrdite geslo:</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Ponovi geslo"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-submit">Registracija</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

@endsection