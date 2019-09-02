@extends('layout')
@section('content')
    <!-- Login start -->
    <div class="bee-content-block">
        <div class="container">
            <div class="customer-login">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="customer-login-left">
                            <div class="login-icon"><i class="fa fa-lock"></i></div>
                            <h4>Dobrodošlil v svojem računu</h4>
                            <p>Vpišite se v svoj račun in kupite kar želite.<br>
                                Če računa še nimate, ga lahko odprete tukaj  <a href="/register">Ustvari račun</a>.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="customer-login-block">
                            <h3>Obstoječi kupec</h3>
                            <form action="#">
                                <div class="form-group">
                                    <label>Email naslov:</label>
                                    <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail naslov" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Geslo:</label>
                                    <input class="form-control" type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Geslo" required>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="remember" id="remember" class="css-checkbox" />
                                    <label for="remember" class="css-label" {{ old('remember') ? 'checked' : '' }}>Zapomni si me</label>
                                    <a href="{{ route('password.request') }}" title="" class="forgot-pass">Ste pozabili geslo?</a> </div>
                                <button type="submit" class="btn btn-submit">Vpiši se</button>
                            </form>

                            <a href="{{ route('guestCheckout.index') }}" class="forgot-pass">Nadaljujte kot gost</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

@endsection
