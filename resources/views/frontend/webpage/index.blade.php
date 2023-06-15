@extends('frontend.layout.main')
@push('title')
    <title>Welcome</title>
@endpush
@section('main-content')
    <div class="hiraola-slider_area-2 hiraola-slider_area-3 color-white">
        <div class="main-slider">
            <!-- Begin Single Slide Area -->
            <div class="single-slide animation-style-01 bg-6">
                <div class="container">
                    <div class="slider-content slider-content-2">
                        <h5><span>Black Friday</span> This Week</h5>
                        <h2>Work Desk</h2>
                        <h3>Surface Studio 2022</h3>
                        <h4>Starting at <span>£1599.00</span></h4>
                        <div class="hiraola-btn-ps_center slide-btn">
                            <a class="hiraola-btn" href="shop-left-sidebar.html">Shopping Now</a>
                        </div>
                    </div>
                    <div class="slider-progress"></div>
                </div>
            </div>
            <!-- Single Slide Area End Here -->
            <!-- Begin Single Slide Area -->
            <div class="single-slide animation-style-02 bg-7">
                <div class="container">
                    <div class="slider-content">
                        <h5><span>-10% Off</span> This Week</h5>
                        <h2>Phantom4</h2>
                        <h3>Pro+ Obsidian</h3>
                        <h4>Starting at <span>£809.00</span></h4>
                        <div class="hiraola-btn-ps_center slide-btn">
                            <a class="hiraola-btn" href="shop-left-sidebar.html">Shopping Now</a>
                        </div>
                    </div>
                    <div class="slider-progress"></div>
                </div>
            </div>
            <!-- Single Slide Area End Here -->
        </div>
    </div>

    <div class="hiraola-banner_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{url('webpage/assets/images/banner/3_1.jpg')}}" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{url('webpage/assets/images/banner/3_2.jpg')}}" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{url('webpage/assets/images/banner/3_3.jpg')}}" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Hiraola's Product Area -->
    <div class="hiraola-product_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hiraola-section_title">
                        <h4>New Arrival</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="hiraola-product_slider">
                        {{-- {{ $product }} --}}
                        @foreach ($product as $key=>$item )
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            @php $class = "primary-img"; @endphp
                                            @foreach ($item->productImages as $image)
                                             <img class="{{ $class }}" src="{{url('product_images/'. $image->images.'')}}" alt="{{$item->product->product_name}}}" style="height: 200px;">
                                             @php $class = "secondary-img"; @endphp
                                            @endforeach
                                            {{-- <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image"> --}}
                                        </a>
                                        <span class="sticker">₹&nbsp;<del>{{ $item->discount }}</del></span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart add-to-cart-btn" href="javascript:void(0)" data-product_id="{{ $item->id }}" data-product_qty="1" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                    class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="single-product.html">{{ substr($item->product->product_name,0,25) }}...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">₹&nbsp;{{ number_format($item->price,2) }}</span>
                                            </div>
                                            <div class="additional-add_action">
                                                <ul>
                                                    <li>
                                                        <a class="hiraola-add_compare" href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                        class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Product Area End Here -->

    <div class="static-banner_area static-banner_area-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="static-banner-image static-banner-image-2">
                        <div class="static-banner-content">
                            <p><span>-25% Off</span>This Week</p>
                            <h2>Featured Product</h2>
                            <h3>Meito Accessories 2022</h3>
                            <p class="schedule">
                                Starting at
                                <span> £1209.00</span>
                            </p>
                            <div class="hiraola-btn-ps_left">
                                <a href="shop-left-sidebar.html" class="hiraola-btn">Shopping Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Hiraola's Product Tab Area -->
    <div class="hiraola-product-tab_area-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab">
                        <div class="hiraola-tab_title">
                            <h4>New Products</h4>
                        </div>
                        <ul class="nav product-menu">
                            <li><a class="active" data-bs-toggle="tab" href="#necklaces"><span>Necklaces</span></a></li>
                            <li><a data-bs-toggle="tab" href="#earrings"><span>Earrings</span></a></li>
                            <li><a data-bs-toggle="tab" href="#bracelet"><span>Bracelet</span></a></li>
                            <li><a data-bs-toggle="tab" href="#anklet"><span>Anklet</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content hiraola-tab_content">
                        <div id="necklaces" class="tab-pane active show" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£76.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£23.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                        Block...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£50.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="earrings" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£23.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                        Block...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£50.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£76.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="bracelet" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                        Camp...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£30.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="anklet" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£99.60</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                        Camp...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£30.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Product Tab Area End Here -->

    <div class="hiraola-banner_area-2 hiraola-banner_area-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{url('webpage/assets/images/banner/3_4.jpg')}}" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{url('webpage/assets/images/banner/3_5.jpg')}}" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Hiraola's Product Tab Area Three -->
    <div class="hiraola-product-tab_area-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab">
                        <div class="hiraola-tab_title">
                            <h4>Trending Products</h4>
                        </div>
                        <ul class="nav product-menu">
                            <li><a class="active" data-bs-toggle="tab" href="#necklaces-2"><span>Necklaces</span></a></li>
                            <li><a data-bs-toggle="tab" href="#earrings-2"><span>Earrings</span></a></li>
                            <li><a data-bs-toggle="tab" href="#bracelet-2"><span>Bracelet</span></a></li>
                            <li><a data-bs-toggle="tab" href="#anklet-2"><span>Anklet</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content hiraola-tab_content">
                        <div id="necklaces-2" class="tab-pane active show" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£99.60</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                        Camp...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£30.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="earrings-2" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                        Camp...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£30.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="bracelet-2" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£23.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                        Block...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£50.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£76.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="anklet-2" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£76.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£23.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{url('webpage/assets/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{url('webpage/assets/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                        Block...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£50.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Product Tab Area Three End Here -->

    <!-- Begin Hiraola's Latest Blog Area -->
    <div class="latest-blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hiraola-section_title">
                        <h4>Latest Blog</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="latest-blog_slider">
                        <div class="blog-slide_item">
                            <div class="blog-item">
                                <div class="blog-img img-hover_effect">
                                    <a href="blog-details-left-sidebar.html">
                                        <img src="{{url('webpage/assets/images/blog/medium-size/2.jpg')}}" alt="Hiraola's Blog Image">
                                    </a>
                                    <div class="blog-meta-2">
                                        <div class="blog-time_schedule">
                                            <span class="day">10</span>
                                            <span class="month">Oct</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-heading">
                                        <h5>
                                            <a href="blog-details-left-sidebar.html">Gt wisi enim ad minim veniam.</a>
                                        </h5>
                                    </div>
                                    <div class="blog-short_desc">
                                        <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                            lacus
                                        </p>
                                    </div>
                                    <div class="hiraola-read-more_area">
                                        <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slide_item">
                            <div class="blog-item">
                                <div class="blog-img img-hover_effect">
                                    <a href="blog-details-left-sidebar.html">
                                        <img src="{{url('webpage/assets/images/blog/medium-size/3.jpg')}}" alt="Hiraola's Blog Image">
                                    </a>
                                    <div class="blog-meta-2">
                                        <div class="blog-time_schedule">
                                            <span class="day">05</span>
                                            <span class="month">Oct</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-heading">
                                        <h5>
                                            <a href="blog-details-left-sidebar.html">Ht wisi enim ad minim veniam..</a>
                                        </h5>
                                    </div>
                                    <div class="blog-short_desc">
                                        <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                            lacus
                                        </p>
                                    </div>
                                    <div class="hiraola-read-more_area">
                                        <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slide_item">
                            <div class="blog-item">
                                <div class="blog-img img-hover_effect">
                                    <a href="blog-details-left-sidebar.html">
                                        <img src="{{url('webpage/assets/images/blog/medium-size/4.jpg')}}" alt="Hiraola's Blog Image">
                                    </a>
                                    <div class="blog-meta-2">
                                        <div class="blog-time_schedule">
                                            <span class="day">20</span>
                                            <span class="month">Oct</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-heading">
                                        <h5>
                                            <a href="blog-details-left-sidebar.html">Neque suscipit veniam</a>
                                        </h5>
                                    </div>
                                    <div class="blog-short_desc">
                                        <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                            lacus
                                        </p>
                                    </div>
                                    <div class="hiraola-read-more_area">
                                        <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slide_item">
                            <div class="blog-item">
                                <div class="blog-img img-hover_effect">
                                    <a href="blog-details-left-sidebar.html">
                                        <img src="{{url('webpage/assets/images/blog/medium-size/2.jpg')}}" alt="Hiraola's Blog Image">
                                    </a>
                                    <div class="blog-meta-2">
                                        <div class="blog-time_schedule">
                                            <span class="day">25</span>
                                            <span class="month">Oct</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-heading">
                                        <h5>
                                            <a href="blog-details-left-sidebar.html">Excepturi deleniti molestias</a>
                                        </h5>
                                    </div>
                                    <div class="blog-short_desc">
                                        <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                            lacus
                                        </p>
                                    </div>
                                    <div class="hiraola-read-more_area">
                                        <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slide_item">
                            <div class="blog-item">
                                <div class="blog-img img-hover_effect">
                                    <a href="blog-details-left-sidebar.html">
                                        <img src="{{url('webpage/assets/images/blog/medium-size/3.jpg')}}" alt="Hiraola's Blog Image">
                                    </a>
                                    <div class="blog-meta-2">
                                        <div class="blog-time_schedule">
                                            <span class="day">15</span>
                                            <span class="month">Oct</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-heading">
                                        <h5>
                                            <a href="blog-details-left-sidebar.html">Cum deserunt aperiam</a>
                                        </h5>
                                    </div>
                                    <div class="blog-short_desc">
                                        <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                            lacus
                                        </p>
                                    </div>
                                    <div class="hiraola-read-more_area">
                                        <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Latest Blog Area End Here -->

    <!-- Begin Hiraola's Brand Area -->
    <div class="brand-area">
        <div class="container">
            <div class="brand-slider_nav">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-slider">
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="{{url('webpage/assets/images/brand/1.jpg')}}" alt="Uren's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="{{url('webpage/assets/images/brand/2.jpg')}}" alt="Uren's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="{{url('webpage/assets/images/brand/3.jpg')}}" alt="Uren's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="{{url('webpage/assets/images/brand/4.jpg')}}" alt="Uren's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="{{url('webpage/assets/images/brand/5.jpg')}}" alt="Uren's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="{{url('webpage/assets/images/brand/6.jpg')}}" alt="Uren's Brand Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Brand Area End Here -->
@endsection
@section('script')
<script src="{{url('webpage/custom/add-to-card.js')}}"></script>
@endsection

