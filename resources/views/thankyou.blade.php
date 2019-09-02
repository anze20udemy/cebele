@extends('layout')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

   <div class="thank-you-section">
       <h1>Hvala vam za <br> vaše naročilo!</h1>
       <p>Potrditev naročila smo vam poslali po pošti.</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ url('/') }}" class="bee-button btn-gray">Na prvo stran</a>
       </div>
   </div>




@endsection
