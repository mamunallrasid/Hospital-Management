@extends('frontend.layout.main')
@push('title')
    <title>About</title>
@endpush
@section('main-content')
<!-- Begin Hiraola's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Cart</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!-- Begin Hiraola's Cart Area -->
        <div class="hiraola-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="javascript:void(0)">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>

                                            <th class="hiraola-product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="hiraola-product-price">Unit Price</th>
                                            <th class="hiraola-product-quantity">Quantity</th>
                                            <th class="hiraola-product-subtotal">Total</th>
                                            <th class="hiraola-product-remove">remove</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cart_data">



                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        {{-- <div class="coupon2" style="float: left;">
                                            <input class="button" name="update_cart" value="Update cart" type="submit">
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ml-auto" >
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Subtotal <span id="subtotal">₹&nbsp;0.00</span></li>
                                            <li>Total <span id="total">₹&nbsp;0.00</span></li>
                                        </ul>
                                        <a href="{{ url('/checkout') }}" style="float:right;">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Cart Area End Here -->
@endsection
@section('script')
<script src="{{url('webpage/custom/add-to-card.js')}}"></script>
@endsection
