@extends('layout')
@section('content')
  <!-- Main menu end -->



  <!-- My Order start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-9">
          <div class="my-account-page-title">
            <h3>Moje naročilo</h3>
          </div>
          @foreach ($products as $product)
          <div class="order-section">
            <div class="order-top justify-content-end">
              <div class="order-id mr-auto"> Št.naročila: <b>88523836532315</b><br>
                Order time & date: <small>22:23 Dec. 06 2017</small> </div>
              <div class="order-ammount"> Znesek: <strong>{{ presentPrice(productSum($product->price, $product->pivot->quantity)) }}</strong> </div>

            </div>
            <div class="order-details">
              <div class="order-product">
                <div class="order-product-img"><img src="{{ productImage($product->image) }}" alt=""/></div>
                <div class="order-product-title"> <a href="">
                  <h5>{{$product->name}}</h5>
                  <p>{{$product->castocenja}}</p>
                  </a> </div>
              </div>
              <div class="order-status">
                <h6>Naročena količina:</h6>
                <h5><strong> {{ $product->pivot->quantity }} </strong></h5>
              </div>
              <div class="order-action">
                <h6>Cena:</h6>
                <h5><strong> {{ presentPrice($product->price) }} </strong></h5>
              </div>

            </div>
          </div>
          @endforeach

        </div>
        @include ('partials.account_nav')

      </div>
    </div>
  </div>
  <!-- My Order End --> 

@endsection