@extends('layout')
@section('title', 'E-trgovina')
@section('content')
  <!-- Main menu end -->
  
  <!-- Product start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-9">
          <div class="category-top justify-content-end"> 
            <!--<div class="view-style">
                 <span><i class="fa fa-list" aria-hidden="true"></i></span>
                 <span><i class="fa fa-th" aria-hidden="true"></i></span>
               </div>-->
            <div class="product-search mr-auto">
              <input type="search" name="product-search" class="form-control" placeholder="Search"/>
            </div>
            <div class="sort-by"> <span>Sort By:</span> <span>
              <select name="show-item" class="form-control">
                <option value="Default" selected>Default</option>
                <option value="Newest">Newest</option>
                <option value="Popular">Popular</option>
              </select>
              </span> </div>
            <div class="show-item"> <span>Show items:</span> <span>
              <select name="show-item" class="form-control">
                <option value="9 items" selected>9 items</option>
                <option value="20 items">20 items</option>
                <option value="40 items">40 items</option>
                <option value="60 items">60 items</option>
              </select>
              </span> </div>
          </div>
          <div class="product-content">
            <div class="row"> 
              <!-- Product Item start -->
              @foreach ($products as $product)
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-product"> <img src="{{Voyager::image($product->thumbnail('cropped'))}}" />
                  <div class="p-top-price">{{ $product->presentPrice() }}</div>
                  <div class="product-hover">
                    <h4>{{ $product->name }}</h4>
                    <div class="prod-hover-price"><b>Cena: </b>{{ $product->presentPrice() }}</div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    <div class="product-action">
                      <a href="{{ route('shop.show', $product->slug) }}" title="" class="icon-view"><i class="fa fa-eye"></i></a>
                      <a href="" title="" class="icon-view"><i class="fa fa-heart-o"></i></a>
                      {{--<form action="{{ route('cart.store', $product) }}" method="POST">
                        {{ csrf_field() }}
                        <i type="submit" class="icon-view">V košarico</i>
                      </form>--}}
                      <a href="" title="" class="icon-view"><i class="fa fa-cart-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
              <!-- Product Item end -->

            </div>
            <div class="page-navigation">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-left" aria-hidden="true"></i></a> </li>
                  <li class="page-item pagin-active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"> <a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="left-block left-menu">
            <h3>Vrste medu</h3>
            <ul>
              @foreach ($categories as $category)
              {{--<li class="active"><a href="" title="Beehive wood">Beehive wood</a></li>--}}
                <li class="{{ setActiveCategory($category->slug) }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}" title="{{ $category->name }}">{{ $category->name }}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="left-block Special-offer"> <img src="assets/images/special-offer.jpg" alt="" />
            <div class="sell-off">10%<br>
              Off Now</div>
          </div>
          <div class="left-block wow fadeInUp"> <a href="#" class="bee-button">Order Your Product</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Product End --> 

@endsection