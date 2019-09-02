<nav class="full-width-menu">
    <div class="container">
        <div class="nav-block text-uppercase">
            <ul id="navigation" >
                <li class="nav-active"><a href="/">Domov</a></li>
                {{--<li><a href="/about">Kdo smo</a></li>--}}
                <li><a href="/shop">Trgovina</a>

                </li>
                <li><a href="/didyouknow">Ste vedeli</a></li>
                <li><a href="/blog">Nasveti</a>
{{--                    <ul>
                        <li><a href="/blog">Blog Page</a></li>
                        <li><a href="single-blog.html">Single Blog</a></li>
                    </ul>
                </li>--}}
                <li><a href="#">pages</a>
                    <ul>
                        <li><a href="/video-gallery">Video Gallery</a></li>

                        <li><a href="/photo-gallery">Photo Gallery</a></li>
                        <li><a href="#">Moj račun</a>
                            <ul>
                                <li><a href="/my-account">Account Overview</a></li>
                                <li><a href="/edit-account">Edit Account</a></li>
                                <li><a href="/my-order">My Order</a></li>
                                <li><a href="/my-wishlist">My Wishlist</a></li>
                                <li><a href="/cart">My Cart</a></li>
                                <li><a href="/order-tracking">Order Tracking</a></li>
                                <li><a href="/order-form">Create Order</a></li>
                                <li><a href="/change-pass">Change Password</a></li>
                            </ul>
                        </li>
                        <li><a href="/checkout">Checkout</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/registration">Registration</a></li>
                        <li><a href="/typography">Typography</a></li>
                        <li><a href="/404-error">404 Error</a></li>
                        <li><a href="/sitemap">Site map</a></li>
                        <li><a href="/coming-soon">Coming Soon</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Kontakt</a></li>
                <li><a href="/login"><i class="fa fa-sign-in"></i></a></li>

            </ul>
        </div>
        <div class="cart" id="cart"><i class="fa fa-shopping-cart"></i><span class="badge">{{ Cart::instance('default')->count() }}</span></div>
        <div class="shopping-cart">
            <div class="shopping-cart-header">
                <div class="cart-status"><i class="fa fa-shopping-cart"></i><span class="badge">{{ Cart::instance('default')->count() }}</span></div>

                <div class="shopping-cart-total"> <span class="lighter-text">Skupaj:</span> <span class="main-color-text">{{ presentPrice(Cart::subtotal())}}</span> </div>
            </div>
            <!--end shopping-cart-header -->

            <ul class="shopping-cart-items">
                @foreach (Cart::content() as $item)
                <li class="clearfix">
                    <img src="{{ productImage($item->model->image) }}" alt=">
                    {{ $item->model->name }}" /> <span class="item-name">{{ $item->model->name }}</span>
                    <span class="item-price">{{ presentPrice($item->model->price) }}</span>
                    <span class="item-quantity">Količina: {{ $item->qty }}</span> </li>
                @endforeach

            </ul>
            <a href="/cart" class="button">Checkout</a> </div>
        <div class="mobile-menu-wrapper"></div>

    </div>
</nav>