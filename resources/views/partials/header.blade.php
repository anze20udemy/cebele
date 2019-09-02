<header>
    <div class="container">
        <div class="header-content">
            <!-- Site logo Start -->
            <div class="logo"> <a href="/" title={{setting('site.title')}}><img src="../assets/images/logo.png" alt="w-Beekeeping"/></a> </div>
            <div class="top-menu-holder"></div>
            <!-- Site logo end -->
            <div class="header-right">
                <div class="top-menu">
                    <ul>
                        @if (auth()->user())
                        <li><a href="/my-account">Moj račun</a>
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
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </div>
</header>