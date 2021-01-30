<?php 
use App\Section;
$sections = Section::sections();
?>
<body>
  <header class="header header--1" data-sticky="true">
      <div class="header__top">
          <div class="ps-container">
              <div class="header__left">
                  <div class="menu--product-categories">
                      <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                      <div class="menu__content">
                          <ul class="menu--dropdown">
                              <li class="current-menu-item "><a href="#"><i class="icon-star"></i> Hot Promotions</a>
                              </li>
                              <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                                  <div class="mega-menu">
                                      <div class="mega-menu__column">
                                          <h4>Electronic<span class="sub-toggle"></span></h4>
                                          <ul class="mega-menu__list">
                                              <li class="current-menu-item "><a href="#">Home Audio &amp; Theathers</a>
                                              </li>
                                              <li class="current-menu-item "><a href="#">TV &amp; Videos</a>
                                              </li>
                                              <li class="current-menu-item "><a href="#">Camera, Photos &amp; Videos</a>
                                              </li>
                                              <li class="current-menu-item "><a href="#">Cellphones &amp; Accessories</a>
                                              </li>
                                              <li class="current-menu-item "><a href="#">Headphones</a>
                                              </li>
                                              <li class="current-menu-item "><a href="#">Videosgames</a>
                                              </li>
                                              <li class="current-menu-item "><a href="#">Wireless Speakers</a>
                                              </li>
                                              <li class="current-menu-item "><a href="#">Office Electronic</a>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="mega-menu__column">
                                          <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                          <ul class="mega-menu__list">
                                              <li class="current-menu-item "><a href="#">Digital Cables</a>
                                              </li>
                                              <li class="current-menu-item "><a href="#">Audio &amp; Video Cables</a>
                                              </li>
                                              <li class="current-menu-item "><a href="#">Batteries</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </li>
                           
                              <li class="current-menu-item "><a href="#"><i class="icon-tag"></i> Vouchers &amp; Services</a>
                              </li>
                          </ul>
                      </div>
                  </div><a class="ps-logo" href="index-2.html"><img src="{{asset('frontend/img/logo_light.png')}}" alt=""></a>
              </div>
              <div class="header__center">
                  <form class="ps-form--quick-search" action="" method="get">
                      <div class="form-group--icon"><i class="icon-chevron-down"></i>
                          <select class="form-control">
                              <option value="0" selected="selected">All</option>
                              <option class="level-0" value="babies-moms">Babies & Moms</option>
                              <option class="level-0" value="books-office">Books & Office</option>
                              <option class="level-0" value="cars-motocycles">Cars & Motocycles</option>
                              <option class="level-0" value="clothing-apparel">Clothing & Apparel</option>
                              <option class="level-1" value="accessories-clothing-apparel">   Accessories</option>
                              <option class="level-1" value="bags">   Bags</option>
                              <option class="level-1" value="kids-fashion">   Kid’s Fashion</option>
                          </select>
                      </div>
                      <input class="form-control" type="text" placeholder="I'm shopping for..." id="input-search">
                      <button>Search</button>
                      <div class="ps-panel--search-result">
                          <div class="ps-panel__content">
                              <div class="ps-product ps-product--wide ps-product--search-result">
                                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/img/products/arrivals/1.jpg')}}" alt=""></a></div>
                                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 32GB</a>
                                      <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                              <option value="1">1</option>
                                              <option value="1">2</option>
                                              <option value="1">3</option>
                                              <option value="1">4</option>
                                              <option value="2">5</option>
                                          </select><span></span>
                                      </div>
                                      <p class="ps-product__price">$990.50</p>
                                  </div>
                              </div>
                              <div class="ps-product ps-product--wide ps-product--search-result">
                                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/img/products/arrivals/1.jpg')}}" alt=""></a></div>
                                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                      <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                              <option value="1">1</option>
                                              <option value="1">2</option>
                                              <option value="1">3</option>
                                              <option value="1">4</option>
                                              <option value="2">5</option>
                                          </select><span></span>
                                      </div>
                                      <p class="ps-product__price">$1120.50</p>
                                  </div>
                              </div>
                              <div class="ps-product ps-product--wide ps-product--search-result">
                                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/img/products/arrivals/1.jpg')}}" alt=""></a></div>
                                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 128GB</a>
                                      <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                              <option value="1">1</option>
                                              <option value="1">2</option>
                                              <option value="1">3</option>
                                              <option value="1">4</option>
                                              <option value="2">5</option>
                                          </select><span></span>
                                      </div>
                                      <p class="ps-product__price">$1220.50</p>
                                  </div>
                              </div>
                              <div class="ps-product ps-product--wide ps-product--search-result">
                                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/img/products/arrivals/2.jpg')}}" alt=""></a></div>
                                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                      <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                              <option value="1">1</option>
                                              <option value="1">2</option>
                                              <option value="1">3</option>
                                              <option value="1">4</option>
                                              <option value="2">5</option>
                                          </select><span>01</span>
                                      </div>
                                      <p class="ps-product__price">$36.78 – $56.99</p>
                                  </div>
                              </div>
                              <div class="ps-product ps-product--wide ps-product--search-result">
                                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/img/products/arrivals/3.jpg')}}" alt=""></a></div>
                                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                      <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                              <option value="1">1</option>
                                              <option value="1">2</option>
                                              <option value="1">3</option>
                                              <option value="1">4</option>
                                              <option value="2">5</option>
                                          </select><span>02</span>
                                      </div>
                                      <p class="ps-product__price">$125.30</p>
                                  </div>
                              </div>
                              <div class="ps-product ps-product--wide ps-product--search-result">
                                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/img/products/arrivals/4.jpg')}}" alt=""></a></div>
                                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                      <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                              <option value="1">1</option>
                                              <option value="1">2</option>
                                              <option value="1">3</option>
                                              <option value="1">4</option>
                                              <option value="2">5</option>
                                          </select><span>02</span>
                                      </div>
                                      <p class="ps-product__price">$55.30</p>
                                  </div>
                              </div>
                              <div class="ps-product ps-product--wide ps-product--search-result">
                                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/img/products/arrivals/5.jpg')}}" alt=""></a></div>
                                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                      <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                              <option value="1">1</option>
                                              <option value="1">2</option>
                                              <option value="1">3</option>
                                              <option value="1">4</option>
                                              <option value="2">5</option>
                                          </select><span>02</span>
                                      </div>
                                      <p class="ps-product__price sale">$41.27 <del>$52.99 </del></p>
                                  </div>
                              </div>
                              <div class="ps-product ps-product--wide ps-product--search-result">
                                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/img/products/arrivals/6.jpg')}}" alt=""></a></div>
                                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                      <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                              <option value="1">1</option>
                                              <option value="1">2</option>
                                              <option value="1">3</option>
                                              <option value="1">4</option>
                                              <option value="2">5</option>
                                          </select><span>01</span>
                                      </div>
                                      <p class="ps-product__price sale">$41.27 <del>$62.39 </del></p>
                                  </div>
                              </div>
                          </div>
                          <div class="ps-panel__footer text-center"><a href="shop-default.html">See all results</a></div>
                      </div>
                  </form>
              </div>
              <div class="header__right">
                  <div class="header__actions"><a class="header__extra" href="#"><i class="icon-chart-bars"></i><span><i>0</i></span></a><a class="header__extra" href="#"><i class="icon-heart"></i><span><i>0</i></span></a>
                      <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                          <div class="ps-cart__content">
                              <div class="ps-cart__items">
                                  <div class="ps-product--cart-mobile">
                                      <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('frontend/img/products/clothing/7.jpg')}}" alt=""></a></div>
                                      <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                          <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                      </div>
                                  </div>
                                  <div class="ps-product--cart-mobile">
                                      <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('frontend/img/products/clothing/5.jpg')}}" alt=""></a></div>
                                      <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                          <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                      </div>
                                  </div>
                              </div>
                              <div class="ps-cart__footer">
                                  <h3>Sub Total:<strong>$59.99</strong></h3>
                                  <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                              </div>
                          </div>
                      </div>
                      <div class="ps-block--user-header">
                          <div class="ps-block__left"><i class="icon-user"></i></div>
                          <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <nav class="navigation">
          <div class="ps-container">
              <div class="navigation__left">
                  <div class="menu--product-categories">
                      <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                      <div class="menu__content">
                          <ul class="menu--dropdown">
                            @foreach($sections as $section)
                              <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i>{{$section->name}}</a>
                                @if(count($section->categories ) > 0)
                                  <div class="mega-menu">
                                      <div class="mega-menu__column">
                                          <ul class="mega-menu__list">
                                            @foreach($section->categories as $category)
                                              <li class="current-menu-item "><a href="{{ $category->url }}">{{$category->name}}</a>
                                              </li>
                                              @endforeach
                                          </ul>
                                      </div>
                                      @if(count($category->subcategories) > 0)
                                      <div class="mega-menu__column">
                                        <ul class="mega-menu__list">
                                          @foreach($category->subcategories as $subcategory)
                                            <li class="current-menu-item "><a href="{{ $subcategory->url }}">{{$subcategory->name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif  
                                  </div>
                                  @endif
                            
                              </li>
@endforeach
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="navigation__right">
                  <ul class="menu">
                      <li class="menu-item-has-children"><a href="index-2.html">Home</a><span class="sub-toggle"></span>
                          <ul class="sub-menu">
                              <li class="current-menu-item "><a href="index-2.html">Marketplace Full Width</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-2.html">Home Auto Parts</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-10.html">Home Technology</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-9.html">Home Organic</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-3.html">Home Marketplace V1</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-4.html">Home Marketplace V2</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-5.html">Home Marketplace V3</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-6.html">Home Marketplace V4</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-7.html">Home Electronic</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-8.html">Home Furniture</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-kids.html">Home Kids</a>
                              </li>
                              <li class="current-menu-item "><a href="homepage-photo-and-video.html">Home photo and picture</a>
                              </li>
                          </ul>
                      </li>
                      <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                          <div class="mega-menu">
                              <div class="mega-menu__column">
                                  <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                                  <ul class="mega-menu__list">
                                      <li class="current-menu-item "><a href="shop-default.html">Shop Default</a>
                                      </li>
                                      <li class="current-menu-item "><a href="shop-default.html">Shop Fullwidth</a>
                                      </li>
                                      <li class="current-menu-item "><a href="shop-categories.html">Shop Categories</a>
                                      </li>
                                      <li class="current-menu-item "><a href="shop-sidebar.html">Shop Sidebar</a>
                                      </li>
                                      <li class="current-menu-item "><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                      </li>
                                      <li class="current-menu-item "><a href="shop-carousel.html">Shop Carousel</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="mega-menu__column">
                                  <h4>Product Layout<span class="sub-toggle"></span></h4>
                                  <ul class="mega-menu__list">
                                      <li class="current-menu-item "><a href="product-default.html">Default</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-extend.html">Extended</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-full-content.html">Full Content</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-box.html">Boxed</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-sidebar.html">Sidebar</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-default.html">Fullwidth</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="mega-menu__column">
                                  <h4>Product Types<span class="sub-toggle"></span></h4>
                                  <ul class="mega-menu__list">
                                      <li class="current-menu-item "><a href="product-default.html">Simple</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-image-swatches.html">Images Swatches</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-countdown.html">Countdown</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-multi-vendor.html">Multi-Vendor</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-instagram.html">Instagram</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-affiliate.html">Affiliate</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-on-sale.html">On sale</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-video.html">Video Featured</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-groupped.html">Grouped</a>
                                      </li>
                                      <li class="current-menu-item "><a href="product-out-stock.html">Out Of Stock</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="mega-menu__column">
                                  <h4>Woo Pages<span class="sub-toggle"></span></h4>
                                  <ul class="mega-menu__list">
                                      <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                                      </li>
                                      <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                                      </li>
                                      <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                                      </li>
                                      <li class="current-menu-item "><a href="compare.html">Compare</a>
                                      </li>
                                      <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                                      </li>
                                      <li class="current-menu-item "><a href="my-account.html">My Account</a>
                                      </li>
                                      <li class="current-menu-item "><a href="checkout-2.html">Checkout 2</a>
                                      </li>
                                      <li class="current-menu-item "><a href="shipping.html">Shipping</a>
                                      </li>
                                      <li class="current-menu-item "><a href="payment.html">Payment</a>
                                      </li>
                                      <li class="current-menu-item "><a href="payment-success.html">Payment Success</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </li>
                      <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                          <div class="mega-menu">
                              <div class="mega-menu__column">
                                  <h4>Basic Page<span class="sub-toggle"></span></h4>
                                  <ul class="mega-menu__list">
                                      <li class="current-menu-item "><a href="about-us.html">About Us</a>
                                      </li>
                                      <li class="current-menu-item "><a href="contact-us.html">Contact</a>
                                      </li>
                                      <li class="current-menu-item "><a href="faqs.html">Faqs</a>
                                      </li>
                                      <li class="current-menu-item "><a href="comming-soon.html">Comming Soon</a>
                                      </li>
                                      <li class="current-menu-item "><a href="404-page.html">404 Page</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="mega-menu__column">
                                  <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                                  <ul class="mega-menu__list">
                                      <li class="current-menu-item "><a href="become-a-vendor.html">Become a Vendor</a>
                                      </li>
                                      <li class="current-menu-item "><a href="vendor-store.html">Vendor Store</a>
                                      </li>
                                      <li class="current-menu-item "><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                      </li>
                                      <li class="current-menu-item "><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                      </li>
                                      <li class="current-menu-item "><a href="store-list.html">Store List</a>
                                      </li>
                                      <li class="current-menu-item "><a href="store-list.html">Store List 2</a>
                                      </li>
                                      <li class="current-menu-item "><a href="store-detail.html">Store Detail</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="mega-menu__column">
                                  <h4>Account Pages<span class="sub-toggle"></span></h4>
                                  <ul class="mega-menu__list">
                                      <li class="current-menu-item "><a href="user-information.html">User Information</a>
                                      </li>
                                      <li class="current-menu-item "><a href="addresses.html">Addresses</a>
                                      </li>
                                      <li class="current-menu-item "><a href="invoices.html">Invoices</a>
                                      </li>
                                      <li class="current-menu-item "><a href="invoice-detail.html">Invoice Detail</a>
                                      </li>
                                      <li class="current-menu-item "><a href="notifications.html">Notifications</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </li>
                      <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                          <div class="mega-menu">
                              <div class="mega-menu__column">
                                  <h4>Blog Layout<span class="sub-toggle"></span></h4>
                                  <ul class="mega-menu__list">
                                      <li class="current-menu-item "><a href="blog-grid.html">Grid</a>
                                      </li>
                                      <li class="current-menu-item "><a href="blog-list.html">Listing</a>
                                      </li>
                                      <li class="current-menu-item "><a href="blog-small-thumb.html">Small Thumb</a>
                                      </li>
                                      <li class="current-menu-item "><a href="blog-left-sidebar.html">Left Sidebar</a>
                                      </li>
                                      <li class="current-menu-item "><a href="blog-right-sidebar.html">Right Sidebar</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="mega-menu__column">
                                  <h4>Single Blog<span class="sub-toggle"></span></h4>
                                  <ul class="mega-menu__list">
                                      <li class="current-menu-item "><a href="blog-detail.html">Single 1</a>
                                      </li>
                                      <li class="current-menu-item "><a href="blog-detail-2.html">Single 2</a>
                                      </li>
                                      <li class="current-menu-item "><a href="blog-detail-3.html">Single 3</a>
                                      </li>
                                      <li class="current-menu-item "><a href="blog-detail-4.html">Single 4</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </li>
                  </ul>
                  <ul class="navigation__extra">
                      <li><a href="#">Sell on Martfury</a></li>
                      <li><a href="#">Tract your order</a></li>
                      <li>
                          <div class="ps-dropdown"><a href="#">US Dollar</a>
                              <ul class="ps-dropdown-menu">
                                  <li><a href="#">Us Dollar</a></li>
                                  <li><a href="#">Euro</a></li>
                              </ul>
                          </div>
                      </li>
                      <li>
                          <div class="ps-dropdown language"><a href="#"><img src="{{asset('frontend/img/flag/en.png')}}" alt="">English</a>
                              <ul class="ps-dropdown-menu">
                                  <li><a href="#"><img src="{{asset('frontend/img/flag/germany.png')}}" alt=""> Germany</a></li>
                                  <li><a href="#"><img src="{{asset('frontend/img/flag/fr.png')}}" alt=""> France</a></li>
                              </ul>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>
  <header class="header header--mobile" data-sticky="true">
      <div class="header__top">
          <div class="header__left">
              <p>Welcome to Martfury Online Shopping Store !</p>
          </div>
          <div class="header__right">
              <ul class="navigation__extra">
                  <li><a href="#">Sell on Martfury</a></li>
                  <li><a href="#">Tract your order</a></li>
                  <li>
                      <div class="ps-dropdown"><a href="#">US Dollar</a>
                          <ul class="ps-dropdown-menu">
                              <li><a href="#">Us Dollar</a></li>
                              <li><a href="#">Euro</a></li>
                          </ul>
                      </div>
                  </li>
                  <li>
                      <div class="ps-dropdown language"><a href="#"><img src="{{asset('frontend/img/flag/en.png')}}" alt="">English</a>
                          <ul class="ps-dropdown-menu">
                              <li><a href="#"><img src="{{asset('frontend/img/flag/germany.png')}}" alt=""> Germany</a></li>
                              <li><a href="#"><img src="{{asset('frontend/img/flag/fr.png')}}" alt=""> France</a></li>
                          </ul>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
      <div class="navigation--mobile">
          <div class="navigation__left"><a class="ps-logo" href="index-2.html"><img src="{{asset('frontend/img/logo_light.png')}}" alt=""></a></div>
          <div class="navigation__right">
              <div class="header__actions">
                  <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                      <div class="ps-cart__content">
                          <div class="ps-cart__items">
                              <div class="ps-product--cart-mobile">
                                  <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('frontend/img/products/clothing/7.jpg')}}" alt=""></a></div>
                                  <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                      <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                  </div>
                              </div>
                              <div class="ps-product--cart-mobile">
                                  <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('frontend/img/products/clothing/5.jpg')}}" alt=""></a></div>
                                  <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                      <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                  </div>
                              </div>
                          </div>
                          <div class="ps-cart__footer">
                              <h3>Sub Total:<strong>$59.99</strong></h3>
                              <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                          </div>
                      </div>
                  </div>
                  <div class="ps-block--user-header">
                      <div class="ps-block__left"><i class="icon-user"></i></div>
                      <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="ps-search--mobile">
          <form class="ps-form--search-mobile" action="http://nouthemes.net/html/martfury/index.html" method="get">
              <div class="form-group--nest">
                  <input class="form-control" type="text" placeholder="Search something...">
                  <button><i class="icon-magnifier"></i></button>
              </div>
          </form>
      </div>
  </header>
  <div class="ps-panel--sidebar" id="cart-mobile">
      <div class="ps-panel__header">
          <h3>Shopping Cart</h3>
      </div>
      <div class="navigation__content">
          <div class="ps-cart--mobile">
              <div class="ps-cart__content">
                  <div class="ps-product--cart-mobile">
                      <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('frontend/img/products/clothing/7.jpg')}}" alt=""></a></div>
                      <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                          <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                      </div>
                  </div>
              </div>
              <div class="ps-cart__footer">
                  <h3>Sub Total:<strong>$59.99</strong></h3>
                  <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
              </div>
          </div>
      </div>
  </div>
  <div class="ps-panel--sidebar" id="navigation-mobile">
      <div class="ps-panel__header">
          <h3>Categories</h3>
      </div>
      <div class="ps-panel__content">
          <ul class="menu--mobile">
              <li class="current-menu-item "><a href="#">Hot Promotions</a>
              </li>
              <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                      <div class="mega-menu__column">
                          <h4>Electronic<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="#">Home Audio &amp; Theathers</a>
                              </li>
                              <li class="current-menu-item "><a href="#">TV &amp; Videos</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Camera, Photos &amp; Videos</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Cellphones &amp; Accessories</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Headphones</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Videosgames</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Wireless Speakers</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Office Electronic</a>
                              </li>
                          </ul>
                      </div>
                      <div class="mega-menu__column">
                          <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="#">Digital Cables</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Audio &amp; Video Cables</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Batteries</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </li>
              <li class="current-menu-item "><a href="#">Clothing &amp; Apparel</a>
              </li>
              <li class="current-menu-item "><a href="#">Home, Garden &amp; Kitchen</a>
              </li>
              <li class="current-menu-item "><a href="#">Health &amp; Beauty</a>
              </li>
              <li class="current-menu-item "><a href="#">Yewelry &amp; Watches</a>
              </li>
              <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                      <div class="mega-menu__column">
                          <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="#">Computer &amp; Tablets</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Laptop</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Monitors</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Networking</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Drive &amp; Storages</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Computer Components</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Security &amp; Protection</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Gaming Laptop</a>
                              </li>
                              <li class="current-menu-item "><a href="#">Accessories</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </li>
              <li class="current-menu-item "><a href="#">Babies &amp; Moms</a>
              </li>
              <li class="current-menu-item "><a href="#">Sport &amp; Outdoor</a>
              </li>
              <li class="current-menu-item "><a href="#">Phones &amp; Accessories</a>
              </li>
              <li class="current-menu-item "><a href="#">Books &amp; Office</a>
              </li>
              <li class="current-menu-item "><a href="#">Cars &amp; Motocycles</a>
              </li>
              <li class="current-menu-item "><a href="#">Home Improments</a>
              </li>
              <li class="current-menu-item "><a href="#">Vouchers &amp; Services</a>
              </li>
          </ul>
      </div>
  </div>
  <div class="navigation--list">
      <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
  </div>
  <div class="ps-panel--sidebar" id="search-sidebar">
      <div class="ps-panel__header">
          <form class="ps-form--search-mobile" action="http://nouthemes.net/html/martfury/index.html" method="get">
              <div class="form-group--nest">
                  <input class="form-control" type="text" placeholder="Search something...">
                  <button><i class="icon-magnifier"></i></button>
              </div>
          </form>
      </div>
      <div class="navigation__content"></div>
  </div>
  <div class="ps-panel--sidebar" id="menu-mobile">
      <div class="ps-panel__header">
          <h3>Menu</h3>
      </div>
      <div class="ps-panel__content">
          <ul class="menu--mobile">
              <li class="menu-item-has-children"><a href="index-2.html">Home</a><span class="sub-toggle"></span>
                  <ul class="sub-menu">
                      <li class="current-menu-item "><a href="index-2.html">Marketplace Full Width</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-2.html">Home Auto Parts</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-10.html">Home Technology</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-9.html">Home Organic</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-3.html">Home Marketplace V1</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-4.html">Home Marketplace V2</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-5.html">Home Marketplace V3</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-6.html">Home Marketplace V4</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-7.html">Home Electronic</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-8.html">Home Furniture</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-kids.html">Home Kids</a>
                      </li>
                      <li class="current-menu-item "><a href="homepage-photo-and-video.html">Home photo and picture</a>
                      </li>
                  </ul>
              </li>
              <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                      <div class="mega-menu__column">
                          <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="shop-default.html">Shop Default</a>
                              </li>
                              <li class="current-menu-item "><a href="shop-default.html">Shop Fullwidth</a>
                              </li>
                              <li class="current-menu-item "><a href="shop-categories.html">Shop Categories</a>
                              </li>
                              <li class="current-menu-item "><a href="shop-sidebar.html">Shop Sidebar</a>
                              </li>
                              <li class="current-menu-item "><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                              </li>
                              <li class="current-menu-item "><a href="shop-carousel.html">Shop Carousel</a>
                              </li>
                          </ul>
                      </div>
                      <div class="mega-menu__column">
                          <h4>Product Layout<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="product-default.html">Default</a>
                              </li>
                              <li class="current-menu-item "><a href="product-extend.html">Extended</a>
                              </li>
                              <li class="current-menu-item "><a href="product-full-content.html">Full Content</a>
                              </li>
                              <li class="current-menu-item "><a href="product-box.html">Boxed</a>
                              </li>
                              <li class="current-menu-item "><a href="product-sidebar.html">Sidebar</a>
                              </li>
                              <li class="current-menu-item "><a href="product-default.html">Fullwidth</a>
                              </li>
                          </ul>
                      </div>
                      <div class="mega-menu__column">
                          <h4>Product Types<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="product-default.html">Simple</a>
                              </li>
                              <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                              </li>
                              <li class="current-menu-item "><a href="product-image-swatches.html">Images Swatches</a>
                              </li>
                              <li class="current-menu-item "><a href="product-countdown.html">Countdown</a>
                              </li>
                              <li class="current-menu-item "><a href="product-multi-vendor.html">Multi-Vendor</a>
                              </li>
                              <li class="current-menu-item "><a href="product-instagram.html">Instagram</a>
                              </li>
                              <li class="current-menu-item "><a href="product-affiliate.html">Affiliate</a>
                              </li>
                              <li class="current-menu-item "><a href="product-on-sale.html">On sale</a>
                              </li>
                              <li class="current-menu-item "><a href="product-video.html">Video Featured</a>
                              </li>
                              <li class="current-menu-item "><a href="product-groupped.html">Grouped</a>
                              </li>
                              <li class="current-menu-item "><a href="product-out-stock.html">Out Of Stock</a>
                              </li>
                          </ul>
                      </div>
                      <div class="mega-menu__column">
                          <h4>Woo Pages<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                              </li>
                              <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                              </li>
                              <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                              </li>
                              <li class="current-menu-item "><a href="compare.html">Compare</a>
                              </li>
                              <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                              </li>
                              <li class="current-menu-item "><a href="my-account.html">My Account</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </li>
              <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                      <div class="mega-menu__column">
                          <h4>Basic Page<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="about-us.html">About Us</a>
                              </li>
                              <li class="current-menu-item "><a href="contact-us.html">Contact</a>
                              </li>
                              <li class="current-menu-item "><a href="faqs.html">Faqs</a>
                              </li>
                              <li class="current-menu-item "><a href="comming-soon.html">Comming Soon</a>
                              </li>
                              <li class="current-menu-item "><a href="404-page.html">404 Page</a>
                              </li>
                          </ul>
                      </div>
                      <div class="mega-menu__column">
                          <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="become-a-vendor.html">Become a Vendor</a>
                              </li>
                              <li class="current-menu-item "><a href="vendor-store.html">Vendor Store</a>
                              </li>
                              <li class="current-menu-item "><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                              </li>
                              <li class="current-menu-item "><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </li>
              <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                      <div class="mega-menu__column">
                          <h4>Blog Layout<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="blog-grid.html">Grid</a>
                              </li>
                              <li class="current-menu-item "><a href="blog-list.html">Listing</a>
                              </li>
                              <li class="current-menu-item "><a href="blog-small-thumb.html">Small Thumb</a>
                              </li>
                              <li class="current-menu-item "><a href="blog-left-sidebar.html">Left Sidebar</a>
                              </li>
                              <li class="current-menu-item "><a href="blog-right-sidebar.html">Right Sidebar</a>
                              </li>
                          </ul>
                      </div>
                      <div class="mega-menu__column">
                          <h4>Single Blog<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                              <li class="current-menu-item "><a href="blog-detail.html">Single 1</a>
                              </li>
                              <li class="current-menu-item "><a href="blog-detail-2.html">Single 2</a>
                              </li>
                              <li class="current-menu-item "><a href="blog-detail-3.html">Single 3</a>
                              </li>
                              <li class="current-menu-item "><a href="blog-detail-4.html">Single 4</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </li>
          </ul>
      </div>
  </div>