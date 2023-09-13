 <!--PreLoader-->
 <div class="loader">
     <div class="loader-inner">
         <div class="circle"></div>
     </div>
 </div>
 <!--PreLoader Ends-->

 <!-- header -->
 <div class="top-header-area" id="sticker">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-sm-12 text-center">
                 <div class="main-menu-wrap">
                     <!-- logo -->
                     <div class="site-logo">
                         <a href="{{ route('E-Commerce') }}">
                             <img src="{{ asset('market/assets/img/logo.png') }}" alt="">
                         </a>
                     </div>
                     <!-- logo -->

                     <!-- menu start -->
                     <nav class="main-menu">
                         <ul>
                             <li class="current-list-item"><a href="#">Home</a>
                                 <ul class="sub-menu">
                                     <li><a href="{{ route('static-home') }}">Static Home</a></li>
                                     <li><a href="{{ route('E-Commerce') }}">Slider Home</a></li>
                                 </ul>
                             </li>
                             <li><a href="{{ route('about') }}">About</a></li>
                             <li><a href="#">Pages</a>
                                 <ul class="sub-menu">
                                     <li><a href="{{ route('404-page') }}">404 page</a></li>

                                 </ul>
                             </li>
                             <li><a href="{{ route('news') }}">News</a>
                                 <ul class="sub-menu">
                                     <li><a href="{{ route('news') }}">News</a></li>
                                     <li><a href="{{ route('single-news') }}">Single News</a></li>
                                 </ul>
                             </li>
                             <li><a href="{{ route('contact') }}">Contact</a></li>
                             <li><a href="#">product</a>
                                 <ul class="sub-menu">
                                     <li><a href="{{ route('shop') }}">Shop</a></li>
                                     <li><a href="{{ route('single-product') }}">Single Product</a></li>
                                     <li><a href="{{ route('cart') }}">Cart</a></li>
                                     <li><a href="{{ route('check-out') }}">Check Out</a></li>
                                 </ul>
                             </li>
                             <li>
                                 <div class="header-icons">
                                     <a class="shopping-cart" href="{{ route('cart') }}"><i
                                             class="fas fa-shopping-cart"></i></a>
                                     <a class="mobile-hide search-bar-icon" href="#"><i
                                             class="fas fa-search"></i></a>
                                 </div>
                             </li>
                         </ul>
                     </nav>
                     <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                     <div class="mobile-menu"></div>
                     <!-- menu end -->
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end header -->

 <!-- search area -->
 <div class="search-area">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <span class="close-btn"><i class="fas fa-window-close"></i></span>
                 <div class="search-bar">
                     <div class="search-bar-tablecell">
                         <h3>Search For:</h3>
                         <input type="text" placeholder="Keywords">
                         <button type="submit">Search <i class="fas fa-search"></i></button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end search area -->
