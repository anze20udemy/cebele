@extends('layout')
@section('title', 'Napaka na strani')
@section('content')
  
  <!-- 404 Error start -->
  <div class="bee-content-block" id="maincontent">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
          <div class="error-section"> <img src="assets/images/404.png" alt=""/>
            <h1>Ups, ta stran ne obstaja.</h1>
            <p>Prišlo je do napake. Stran, ki si jo želite ogledati, ne obstaja ali pa trenutno ni dosegljiva.</p>
            <a href="{{ url('/') }}" class="bee-button cta-btn">Na prvo stran</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 404 Error End -->
@endsection