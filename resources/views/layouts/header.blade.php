<header id="wn__header" class="header__area header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{  asset('/assets/images/logo/logo.png')}}" alt="logo images">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item"><a href="/books">Home</a>
                           
                        </li>
                       
                        <li class="drop"><a href="shop-grid.html">Books</a>
                            <div class="megamenu dropdown">
                                <ul class="item item03">
                                    @foreach ($categories_with_book_count as $catehory) 
                                    <li><a href="shop-grid.html">{{ $catehory->name }}</a></li>
                                    @endforeach
                                    {{-- <li><a href="shop-grid.html">Business </a></li>
                                    <li><a href="shop-grid.html">Cookbooks </a></li>
                                    <li><a href="shop-grid.html">Health & Fitness </a></li>
                                    <li><a href="shop-grid.html">History </a></li> --}}
                                </ul>
                             
                        <li class="drop"><a href="blog.html">Blog</a>
                            <div class="megamenu dropdown">
                                <ul class="item item01">
                                    <li><a href="blog.html">Blog Page</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                    <li class="shop_search"><a class="search__active" href="#"></a></li>
                    <li class="wishlist"><a href="#"></a></li>
                    <li class="shopcart"><a class="cartbox_active" href="#"><span
                            class="product_qun">3</span></a>
                       
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none">
        </div>
        <!-- Mobile Menu -->
    </div>
</header>