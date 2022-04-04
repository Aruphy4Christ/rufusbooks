 @extends('layouts.apps')

 @section('content')
 
 <!-- End breadcrumb area -->
    <!-- Start main Content -->
    <div class="maincontent bg--white pt--80 pb--55">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="wn__single__product">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="wn__fotorama__wrapper">
                                    <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                        
                                        <a href="1.html"><img src="{{  asset('images/' . $bookitem['image_path'])}}" alt=""></a>
                                        {{-- <a href="2.html"><img src="images/product/2.jpg" alt=""></a>
                                        <a href="3.html"><img src="images/product/3.jpg" alt=""></a>
                                        <a href="4.html"><img src="images/product/4.jpg" alt=""></a>
                                        <a href="5.html"><img src="images/product/5.jpg" alt=""></a>
                                        <a href="6.html"><img src="images/product/6.jpg" alt=""></a>
                                        <a href="7.html"><img src="images/product/7.jpg" alt=""></a>
                                        <a href="8.html"><img src="images/product/8.jpg" alt=""></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product__info__main">
                                    <h1>{{ $bookitem->name }}</h1>
                                    <div class="product-reviews-summary d-flex">
                                        <ul class="rating-summary d-flex">
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                        </ul>
                                    </div>
                                    By:
                                    {{ $bookitem['owner']['name'] }}
                                    <div class="price-box">
                                        
                                       <h2> <i><span></span></i></h2>
                                    </div>
                                    <div class="product__overview">
                                        <b>ABOUT THE AUTHOR</b>
                                        <p>{{ $bookitem['owner']['description'] }}
                                            Ideal for cold-weather training or work outdoors, the Chaz Hoodie
                                            promises superior warmth with every wear. Thick material blocks out the
                                            wind as ribbed cuffs and bottom band seal in body heat.</p>
                                        <p>Ideal for cold-weather training or work outdoors, the Chaz Hoodie
                                            promises superior warmth with every wear. </p>
                                    </div>
                               

                                    <div class="product_meta">
											
                                                 <div class="widget__categories products--tag">
                                                    <h3 class="widget__title">Category Tags:</h3>
                                                    <ul>
                                                        
                                                        @foreach ($bookitem['categories'] as $category)
                                                     <li> <a href="#"> {{ $category['name'] }}</a></li>
                                            
                                                     @endforeach
                                                        
                                                    </ul>
                                                </div>


                                                
											
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info__detailed">
                        <div class="pro_details_nav nav justify-content-start" role="tablist">
                            <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-details"
                               role="tab">Details</a>
                            
                        </div>
                        <div class="tab__container tab-content">
                            <!-- Start Single Tab Content -->
                            <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                                <div class="description__attribute">
                                    <p>
                                        Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises
                                        superior warmth with every wear. Thick material blocks out the wind as
                                        ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather
                                        training or work outdoors, the Chaz Hoodie promises superior warmth with
                                        every wear. Thick material blocks out the wind as ribbed cuffs and bottom
                                        band seal in body heat.Ideal for cold-weather training or work outdoors, the
                                        Chaz Hoodie promises superior warmth with every wear. Thick material blocks
                                        out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for
                                        cold-weather training or work outdoors, the Chaz Hoodie promises superior
                                        warmth with every wear. Thick material blocks out the wind as ribbed cuffs
                                        and bottom band seal in body heat.</p>
                                    <ul>
                                        <li>• Two-tone gray heather hoodie.</li>
                                        <li>• Drawstring-adjustable hood.</li>
                                        <li>• Machine wash/dry.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Tab Content -->
                            <!-- Start Single Tab Content -->
                                
                               
                            </div><div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
                            
                            <!-- End Single Tab Content -->
                        </div>
                    </div>
                   
                    
                </div>
            
                <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                    <div class="shop__sidebar">
                        <aside class="widget__categories products--cat">
                            <h3 class="widget__title">Book Categories</h3>
                            {{-- @if (is_array($catehories) || is_object($catehories)) --}}
                                
                            
                            @foreach ($categories_with_book_count as $catehory) 
                            <ul>
                                <li><a href="#">{{ $catehory->name }} <span>({{ count($catehory->book_counts) }})</span></a></li>
                            
                            @endforeach
                                {{-- @endif --}}
                                
                            </ul>
                        </aside>
            
                     
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End main Content -->
    <!-- Start Search Popup -->
   
    <!-- End Search Popup -->
    <!-- Footer Area -->
  
        @endsection 