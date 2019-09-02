@extends('layout')
@section('content')
@section('title', 'Blagajna')
 @if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif



  <!-- Checkout start -->
  <div class="bee-content-block checkbox-block">
    <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
      {{ csrf_field() }}
    <div class="container">
      <div class="row">
        <div class="col-12">

            <h4 class="mb20">1. Pregled in potrditev naročila ({{ Cart::count() }}

            @if (Cart::count() == 1 or (Cart::count() == 101 ))
              kos)
            @elseif (Cart::count() == 2 or (Cart::count() == 102))
              kosa)
            @elseif ((Cart::count() == 3)or (Cart::count() == 4)or (Cart::count() == 103)or (Cart::count() == 104))
              kosi)
            @else
              kosov)

            @endif

          </h4>
          @foreach (Cart::content() as $item)
          <div class="order-section">

            <div class="order-top justify-content-end">
              <div class="order-id mr-auto"> Added to cart: <b>11 November 2017 </b> </div>
              <div class="delete-order"> <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a> </div>
            </div>
            <div class="order-details">
              <div class="order-product">
                <div class="order-product-img"><img src="{{ productImage($item->model->image) }}" alt="Product 1"/></div>
                <div class="order-product-title">
                  <h5>{{ $item->model->name }}</h5>
                  <p>{{ $item->model->uporaba }}</p>
                  </div>
              </div>
              <div class="order-status"> Cena: <b>{{ presentPrice($item->model->price) }}</b>
                <div class="quantity"><span>Količina:</span>
                  <span>{{ $item->qty }}
                  </span></div>
              </div>
              <div class="order-action"> Vsota: <b>{{ presentPrice($item->subtotal) }}</b> </div>
            </div>
          </div>
          @endforeach


          <h4 class="mb20">2. Način plačila</h4>
          <div class="payment-method css-radio-option">
            <ul>
              <li>
                <input type="radio" name="radiog_dark" id="payment-option" class="css-radio" checked="checked" />
                <label for="payment-option" class="css-label">Plačilo po predračunu <span><i class="fa fa-address-book"></i></span></label>
              </li>
              <li>
                <input type="radio" name="radiog_dark" id="payment-option2" class="css-radio" />
                <label for="payment-option2" class="css-label">Plačilo ob dostavi <span><i class="fa fa-cc-truck"></i><i class="fa fa-cc-mastercard"></i><i class="fa fa-cc-amex"></i><i class="fa fa-cc-discover"></i></span></label>
              </li>
            </ul>
          </div>

          <h4 class="mb20">3. Vnesite kontaktne podatke:</h4>
          <div class="row">
          <div class="defalt-address">
            <h6>Naslov za dostavo: <span><a href=""><i class="fa fa-edit" aria-hidden="true"></i></a></span></h6>
            <div class="my-account-section">
              <ul>
                <li><span>Ime in Priimek:</span><span><input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required></span></li>
                <li><span>Naslov:</span><span><input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required></span></li>
                <li><span>Mesto:</span><span><input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required></span></li>
                <li><span>Poštna številka:</span><span><input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required></span></li>
                {{--<li><span>Občina:</span><span><input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required></span></li>--}}
                <li><span>Telefonska številka:</span><span><input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required></span></li>
                <li><span>Email:</span><span><input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required></span></li>
              </ul>
            </div>


            <div class="spacer"></div>

          </div>
          <div class="cart-total-section">
            <h3>Skupni znesek artiklov v košarici</h3>
            <div class="cart-total-block">
              <ul>
                <li><span>Znesek skupaj:</span><span>{{ presentPrice(Cart::subtotal()) }} </span></li>
                <li><span>Dostava(osebni prevzem):</span><span>$1.00</span></li>
                <li><span>Skupaj(brez DDV):</span><span>{{ presentPrice($newTotal - $newTax) }}</span></li>
                <li><span>({{config('cart.tax')}}%) DDV:</span><span>{{ presentPrice($newTax) }}</span></li>
                <li><span>Skupaj</span><span>{{ presentPrice($newTotal) }}</span></li>
              </ul>
            </div>

            <button type="submit" id="complete-order" class="btn btn-submit">Zaključi naročilo</button>
          </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
  <!-- Checkout End --> 
  


 @endsection