@extends('layouts.apps')

@section('content')


<div class="brown--color box-search-content search_active block-bg close__top">
    <form id="search_mini_form" class="minisearch" action="#">
        <div class="field__search">
            <input type="text" placeholder="Search entire store here...">
            <div class="action">
                <a href="#"><i class="zmdi zmdi-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
<!-- End Search Popup -->
<!-- Start Slider area -->
<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
    <!-- Start Single Slide -->
    <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider__content">
                        <div class="contentbox">
                            <h2>Get <span>your </span></h2>
                            <h2>favourite <span>Book </span></h2>
                            <h2>from <span>Here </span></h2>
                            <a class="shopbtn" href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Slide -->
    <!-- Start Single Slide -->
    <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider__content">
                        <div class="contentbox">
                            <h2>Buy <span>your </span></h2>
                            <h2>favourite <span>Book </span></h2>
                            <h2>from <span>Here </span></h2>
                            <a class="shopbtn" href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Slide -->
</div>
<!-- End Slider area -->
<!-- Start BEst Seller Area -->

<!-- Start BEst Seller Area -->
<!-- Start NEwsletter Area -->

<!-- End NEwsletter Area -->
<!-- Start Best Seller Area -->
<section class="wn__bestseller__area bg--white pt--80  pb--30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered lebmid alteration in some ledmid form</p>
                </div>
            </div>
        </div>
       
            
        
        <div class="row mt--50">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="product__nav nav justify-content-center" role="tablist">
                    
                    <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-all" role="tab">ALL</a>
                    @foreach ($catehories as $catehory )
                    <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-biographic"
                       role="tab">{{ $catehory['name'] }}</a>
                       @endforeach
                    
                </div>
            </div>
        </div>
        
        <div class="tab__container tab-content mt--60">
            <!-- Start Single Tab Content -->
            <div class=" single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    @foreach ($bookitem as $bookitem)
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="single__product__inner">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    
                                        
                                   
                                    <a class="first__img" href=""><img
                                            src="{{  asset('images/' . $bookitem['image_path'])}}" alt="product image"></a>
                                    
                                    
                                    <a class="second__img animation1" href="/{{ $bookitem->id }}/single_book"><img
                                            src="" alt="product image"></a>
                                   
                                    <div class="hot__box">
                                        <span class="hot-label"></span>
                                    </div>
                                </div>
                                <div class="product__content content--center content--center">
                                    <h4><a href="single-product.html">{{ $bookitem->name }}</a></h4>
                                    <ul class="price d-flex">
                                        <li>By: {{ $bookitem['owner']['name'] }}</li>
                                        {{-- <li class="old_price">$35.00</li> --}}
                                    </ul>
                                   
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="single__product__inner">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img
                                            src="images/books/5.jpg" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img
                                            src="images/books/6.jpg" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">HOT</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Doctor Wldo</a></h4>
                                    <ul class="price d-flex">
                                        <li>$35.00</li>
                                        <li class="old_price">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i
                                                        class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i
                                                        class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i
                                                        class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-bs-toggle="modal" title="Quick View"
                                                       class="quickview modal-view detail-link"
                                                       href="#productmodal"><i class="bi bi-search"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__hover--content">
                                        <ul class="rating d-flex">
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                      
            <!-- End Single Tab Content -->
        </div>
    </div>
</section>
<!-- Start BEst Seller Area -->
<!-- Start Recent Post Area -->

@endsection 
