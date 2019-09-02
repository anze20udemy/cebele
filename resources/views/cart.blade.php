@extends('layout')
@section('content')

  <!-- Shopping Cart start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <div class="my-account-page-title">
            <h3>{{ Cart::count() }}
              @if (Cart::count() == 1 or (Cart::count() == 101 ))
                artikel
              @elseif (Cart::count() == 2 or (Cart::count() == 102))
                artikla
              @elseif ((Cart::count() == 3)or (Cart::count() == 4)or (Cart::count() == 103)or (Cart::count() == 104))
                artikli
              @else
                artiklov

              @endif

              v košarici.</h3>
          </div>
          @foreach (Cart::content() as $item)
          <div class="order-section">
            <div class="order-top justify-content-end">
              <div class="order-id mr-auto"> Dodano v košarico: <b>11 November 2017 </b> </div>

              <div class="delete-order">
                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </form>
              </div>

            </div>
            <div class="order-details">
              <div class="order-product">
                <div class="order-product-img"><a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ productImage($item->model->image) }}" alt=""/></a></div>
                <div class="order-product-title"> <a href="">
                  <h5>{{ $item->model->name }}</h5>
                  <p>{{ $item->model->uporaba }}</p>
                  </a> </div>
              </div>
              <div class="order-status"> Cena: <b>{{ presentPrice($item->model->price) }}</b>
                <div class="quantity"><span>Količina:</span> <span>
                  <select class="quentity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                @for ($i = 1; $i < 25 + 1 ; $i++)
                      <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                            </select>
                  </span></div>
              </div>
              <div class="order-action"> Skupna vsota: <b>{{ presentPrice($item->subtotal) }}</b>
                  <a href="{{ route('shop.index') }}" class="btn-action btn-buy">v trgovino</a> </div>
            </div>
          </div>
          @endforeach

          <div class="cart-total-section">
            <h3>Vsebina košarice</h3>
            <div class="cart-total-block">
              <ul>
                <li><span>Vmesna vsota:</span><span>{{ presentPrice(Cart::subtotal()) }} </span></li>
                <li><span>9% DDV</span><span>{{ presentPrice($newTax) }}</span></li>
                <li><span>Skupaj z DDV:</span><span>{{ presentPrice($newTotal) }}</span></li>
              </ul>
            </div>
            <a href="{{ route('checkout.index') }}"><button type="submit" class="btn btn-submit">Nadaljuj na blagajno</button></a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Shopping Cart End --> 
  

@endsection
@section('extra-js')
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
      (function(){
          const classname = document.querySelectorAll('.quentity')

          Array.from(classname).forEach(function(element) {
              element.addEventListener('change', function() {
                  const id = element.getAttribute('data-id')
                  const productQuantity = element.getAttribute('data-productQuantity')

                  axios.patch(`/cart/${id}`, {
                      quantity: this.value,
                      productQuantity: productQuantity
                  })
                      .then(function (response) {
                          // console.log(response);
                          window.location.href = '{{ route('cart.index') }}'
                      })
                      .catch(function (error) {
                          // console.log(error);
                          window.location.href = '{{ route('cart.index') }}'
                      });
              })
          })
      })();
  </script>

@endsection