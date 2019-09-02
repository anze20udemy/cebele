@extends('layout')

@section('content')
  <!-- Main menu end -->

  <!-- Product start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row breadcrumb-style2">
        <div class="col-12"> <a href="index.html" title="Home">Home</a> / our products </div>
      </div>
      <div class="product-details-top">
        <div class="row">
          <!-- Product Zoom start -->
          <div class="col-12 col-lg-6">
            <div class="p-details-zoom ">
              <div class="p-zoom-big-images">
                <div class="easyzoom easyzoom--with-thumbnails"> <a href="{{Voyager::image($product->thumbnail('cropped'))}}" class="gallery_link" title="#popup_gallery"> <img src="{{Voyager::image($product->thumbnail('medium'))}}" /> </a> </div>
              </div>

              <div id="popup_gallery" style="display:none;">
                @foreach (json_decode($product->images, true) as $image)
                <a href="../storage/{{$image}}"> <img src="../storage/{{$image}}" alt="Zoom Product 1" /></a>
                @endforeach
              </div>

              <div class="zoom-thambnail">
                <ul class="thumbnails" id="p-details-thumb-slide">
                  <li class="highlight"> <a href="{{Voyager::image($product->thumbnail('cropped'))}}" data-standard="{{Voyager::image($product->thumbnail('cropped'))}}"> <img src="{{Voyager::image($product->thumbnail('cropped'))}}" alt="Zoom Product 1" /> </a> </li>
                  @if ($product->images)
                    @foreach (json_decode($product->images, true) as $image)
                  <li> <a href="{{ $product->multipleImage($image, '') }}" data-standard="{{ $product->multipleImage($image, '-cropped') }}"> <img src="{{ $product->multipleImage($image, '-cropped') }}" alt="{{$image}}"/> </a> </li>
                    @endforeach
                  @endif
                </ul>
                </ul>
              </div>
            </div>
          </div>
          <!-- Product Zoom End -->

          <!-- Product Overdiew start -->
          <div class="col-12 col-lg-6">
            <div class="p-details-title">
              <h4>{{ $product->name }}</h4>
              <div class="review-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i><span>(99 vote)</span> 120 order</div>
            </div>
            <div class="p-item p-item-price">
              <div class="p-item-title">Cena:</div>
              <div class="p-item-main "><strong>{{ $product->presentPrice() }}</strong>/kos</div>
            </div>
            {{--<div class="p-item p-item-price">
              <div class="p-item-title">Popust:</div>
              <div class="p-item-main"><strong>$35.00</strong>/kos</div>
            </div>
            <div class="p-item p-item-price">
              <div class="p-item-title">Cena s popustom:</div>
              <div class="p-item-main"><strong>$35.00</strong>/kos</div>
            </div>--}}

            {{--<div class="p-item p-item-shipping">
              <div class="p-item-title">Shipping:</div>
              <div class="p-item-main"><b>Not shipping for this product</b></div>
            </div>--}}
            {{--<div class="p-item p-item-quentity">
              <div class="p-item-title">Quantity:</div>
              <div class="p-item-main">
                <div class="quentity"><i class="fa fa-minus"></i>
                  <input type="text" class="form-control" value="1" name="quentity"/>
                  <i class="fa fa-plus"></i></div>
                kos ({{$product->quantity}} kosov na zalogi)</div>
            </div>--}}
{{--            <div class="p-item p-item-total-price">
              <div class="p-item-title">Skupna vsota:</div>
              <div class="p-item-main"><strong>$35.00</strong></div>
            </div>--}}
            <div class="p-item p-item-buttonGroup">



              <form action="{{ route('cart.store', $product) }}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="bee-button btn-gray">V košarico</button>
              </form>
              </div>

            <div class="p-item p-item-wishlist"> <a href="" title=""><i class="fa fa-heart-o"></i> Add to Wish List</a> <span>(17141 Adds)</span> </div>
            <div class="p-item p-item-returnPolicy">
              <div class="p-item-title">Return Policy:</div>
              <div class="p-item-main">Returns accepted if product not as described, buyer pays return shipping fee; or keep the product & agree refund with seller. <a href="">Read more</a></div>
            </div>
            <div class="p-item p-item-payment">
              <div class="p-item-title">Payment:</div>
              <div class="p-item-main"><i class="fa fa-cc-paypal"></i><i class="fa fa-cc-visa"></i><i class="fa fa-cc-mastercard"></i><i class="fa fa-cc-amex"></i><i class="fa fa-cc-discover"></i></div>
            </div>
          </div>
          <!-- Product Overview End -->
        </div>
      </div>
      <!-- Product Details start -->
      <div class="p-tab-section">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active" href="#product_details" role="tab" data-toggle="tab">Podrobnosti</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#feedback" role="tab" data-toggle="tab">Oceni izdelek</a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="product_details">

            <h5>INFORMACIJE O MEDU:</h5>
            <ul>
              <li><strong>Barva: </strong>{{ $product->barva }}</li>
              <li><strong>Aroma: </strong>{{ $product->aroma }}</li>
              <li><strong>Okus: </strong>{{ $product->okus }}</li>
              <li><strong>Kristalizacija: </strong>{{ $product->kristalizacija }}</li>
              <li><strong>Čas točenja: </strong>{{ $product->castocenja }}</li>
              <li><strong>Uporaba: </strong>{{ $product->uporaba }}</li>
              <li><strong>Posebnosti: </strong>{{ $product->posebnosti }}</li>

            </ul>

          </div>
          <div role="tabpanel" class="tab-pane fade" id="feedback">
            <h5>Feedback</h5>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="review-star">
              <h6>Your Rating</h6>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> </div>
            <div class="comment-form pt0">
              <form action="#">
                <div class="form-group">
                  <div class="row">
                    <div class="col-12 col-lg-6">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-12 col-lg-6">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Details End -->
    </div>
  </div>
  <!-- Product End -->

  <!-- Related Products start -->
  <div class="bee-content-block feature-product-block pt0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="title-bg title-bg-left">Mogoče vas zanima tudi...</h3>
        </div>
        <div class="feature-product-4">


          @foreach ($mightAlsoLike as $product)
          <div class="feature-product-item">
            <div class="single-product"> <img src="{{ productImage($product->image) }}" alt="{{ $product->name }}"/>
              <div class="p-top-price">{{ $product->presentPrice() }}</div>
              <div class="product-hover">
                <h4>{{ $product->name }}</h4>
                <div class="prod-hover-price"><b>Cena: </b>{{ $product->presentPrice() }}</div>
                <p>{{ $product->okus }}</p>
                <div class="product-action"> <a href="" title="" class="icon-view"><i class="fa fa-eye"></i></a><a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a><a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a> </div>
              </div>
            </div>
          </div>
          @endforeach


        </div>
      </div>
    </div>
  </div>
  <!-- Related Products end -->

@endsection

