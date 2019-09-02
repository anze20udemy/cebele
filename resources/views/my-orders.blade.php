@extends('layout')
@section('content')
    <!-- Main menu end -->



    <!-- My Order start -->
    <div class="bee-content-block">
        <div class="container">
            <div class="row flex-lg-row-reverse">
                <div class="col-12 col-lg-9">
                    <div class="my-account-page-title">
                        <h3>My Orders</h3>
                    </div>
                    @foreach ($orders as $order)
                        <div class="order-section">
                            <div class="order-top justify-content-end">
                                <div class="order-id mr-auto"> Št.naročila: <b>{{ $order->id }}</b><br>
                                    Datum naročila: <small>{{ presentDate($order->created_at) }}</small> </div>
                                <div class="order-ammount"> Znesek naročila: <strong>{{ presentPrice($order->billing_total) }}</strong> </div>
                                <div><a href="{{ route('orders.show', $order->id) }}" class="btn-action btn-track">Podrobnosti</a></div>

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