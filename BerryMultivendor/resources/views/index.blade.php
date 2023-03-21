<!doctype html>
<html lang="en">

<head>
  <title>BerryMart | @yield('title')</title>
  <link rel="icon" type="image/x-icon" href="{{asset('/images/favicon.png')}}">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('css/homestyle.css')}}">
  <link rel="stylesheet" href="{{asset('css/form.css')}}">
  <link rel="stylesheet" href="{{asset('css/mart.css')}}">

</head>

<body>
  <header>
    @section('navbar')
    {{-- header-top --}}
    <div class="nav header-top" id="header-top">
        <ul>
            <li><a class="nav-link" href="#">About Us 2.0</a></li>
            <li><a class="nav-link" href="#">Wishlist</a></li>
            <li><a class="nav-link" href="#">Order Tracking</a></li>
        </ul>
        <ul>
            <li><a class="nav-link" href="/login">Login</a></li>
            <li><a class="nav-link" href="/register">Register</a></li>
        </ul>
    </div>
    
    {{-- header-mid --}}
    <div class="nav header-middle">
        <div class="header-item header__left">
            <div class="logo">
                <a href="/">
                <img src="{{asset('images/logo.png')}}" alt="Logo"></a>
            </div>
        </div>
        <div class="header-item header__center">
        <div class="wrapper">
            <div class="searchbox">
                <div class="dropDown">
                    <div class="defaultOption">
                        <span class="choice">ALL CATEGORIES</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg></span>
                    </div>
                    <ul class="ul">
                        <li onclick="selectOption(this)">ALL CATEGORIES</li>
                        <li onclick="selectOption(this)">Fruits & Vegetables</li>
                        <li onclick="selectOption(this)">&nbsp&nbsp&nbsp&nbspFruits</li>
                        <li onclick="selectOption(this)">&nbsp&nbsp&nbsp&nbspVegetables</li>
                        <li onclick="selectOption(this)">&nbsp&nbsp&nbsp&nbspSalads & Herbs</li>
                        <li onclick="selectOption(this)">Breads & Sweets</li>
                        <li onclick="selectOption(this)">&nbsp&nbsp&nbsp&nbspBreads</li>
                        <li onclick="selectOption(this)">&nbsp&nbsp&nbsp&nbspOther Pastries</li>
                        <li onclick="selectOption(this)">&nbsp&nbsp&nbsp&nbspTins & Cans</li>
                        <li onclick="selectOption(this)">Frozen Seafood</li>
                        <li onclick="selectOption(this)">Raw Meats</li>
                        <li onclick="selectOption(this)">Drinks & Beverages</li>
                        <li onclick="selectOption(this)">&nbsp&nbsp&nbsp&nbspWines and Alchohol</li>
                        <li onclick="selectOption(this)">&nbsp&nbsp&nbsp&nbspTea & Coffee</li>
                        <li onclick="selectOption(this)">&nbsp&nbsp&nbsp&nbspSoft Drinks</li>
                        <li onclick="selectOption(this)">Dairy Products</li>
                        <li onclick="selectOption(this)">Ready Meals</li>
                    </ul>
                </div>
                
                    <div class="searchField">
                    <form method="" action="" class="searchtab">
                        <input type="text" class="input" placeholder="I'm looking for...">
                    </div>
                    <button type="submit" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                    </form>                
            </div>
        </div>
        </div>

        <div class="header-item header__right">
            <div class="right">
                <h2>8 800 123 45-67</h2>
                <p>Online Support 24/7</p>
            </div>
        </div>

        <div class="header-item header__last">
            <div class="headerlast__wrap">
                <div class="header-extra compare">
                    <a href="/" class="btn-compare">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"/>
                        </svg>
                        <span class="badge badge-warning">0</span>
                    </a>
                    
                </div>
                <div class="header-extra wishlist">
                    <a href="/" class="btn-wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                        <span class="badge badge-warning">0</span>
                    </a>
                </div>
                <div class="header-extra basket">
                    <a href="/" class="btn-basket">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        <span class="badge badge-warning">0</span>
                    </a>
                    <div class="basketstat">No products in the basket.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="nav" id="header-bottom">
        <div class="bottomnav">
            <ul>
                <li class="maindrop">
                    <a href="/">
                    SHOP BY CATEGORY &nbsp
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    </a>
                    <ul>
                        <li><a href="/">Fruits & Vegetables
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                              </svg>
                            </span>
                        </a>
                            <ul class="submenu__2">
                                <li><a href="/">Fruits</a></li>
                                <li><a href="/">Vegetables</a></li>
                                <li><a href="/">Salads & Herbs</a></li>
                            </ul>
                        </li>
                        <li><a href="/">Breads & Sweets
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                              </svg>
                            </span>
                        </a>
                            <ul class="submenu__2">
                                <li><a href="/">Breads</a></li>
                                <li><a href="/">Other Pastries</a></li>
                                <li><a href="/">Tins & Cans</a></li>
                            </ul>
                        </li>
                        <li><a href="/">Frozen Seafood</a></li>
                        <li><a href="/">Raw Meats</a></li>
                        <li><a href="/">Drinks & Beverages
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                        </span>
                        </a>
                            <ul class="submenu__2">
                                <li><a href="/">Wines & Alchohol</a></li>
                                <li><a href="/">Tea & Coffee</a></li>
                                <li><a href="/">Soft Drinks</a></li>
                            </ul>
                        </li>
                        <li><a href="/">Dairy Products</a>
                        </li>
                        <li><a href="/">Ready Meals</a></li>
                    </ul>
                </li>
                <li class="subdrops">
                    <a href="/home">Pages&nbsp
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                          </svg></span>
                    </a>
                    <ul class="page_sub">
                        <li><a href="/home">About Us</a></li>
                        <li><a href="/home">Terms & Conditions</a></li>
                        <li><a href="/home">Refund Policy</a></li>
                    </ul>
                </li>
                <li class="subdrops">
                    <a href="/home">
                    Shop&nbsp
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                      </svg></span>
                    </a>
                    <ul class="page_sub">
                        <li><a href="/home">All Products</a></li>
                        <li><a href="/home">Products by Category</a></li>
                    </ul>
                </li>
                <li><a href="/home">Stores</a></li>
                <li><a href="/home#sectionFAQ">FAQs</a></li>
                <li><a href="/home">Contact</a></li>
            </ul>
        </div>
    </div>
    @show
  </header>
  <main>
    <div class="content_container">
        @yield('home-content')
        @yield('login-content')
        @yield('register-content')
    </div>
  </main>
  <footer>
    <div class="nav">
        <div class="foot-top">
            <div class="foot-top-content">
                <div class="foot-img">
                    <img src="{{asset('/images/icon-rocket.png')}}" alt="">
                </div>
                <div class="foot-txt">
                    <h3>Free Shipping</h3>
                    <p>For all orders over P1000</p>
                </div>
            </div>
            <div class="foot-top-content">
                <div class="foot-img">
                    <img src="{{asset('/images/icon-reload.png')}}" alt="">
                </div>
                <div class="foot-txt">
                    <h3>1 & 1 Returns</h3>
                    <p>Cancellation after 1 Day</p>
                </div>
            </div>
            <div class="foot-top-content">
                <div class="foot-img">
                    <img src="{{asset('/images/icon-protect.png')}}" alt="">
                </div>
                <div class="foot-txt">
                    <h3>100% Secure Payment</h3>
                    <p>Guarantee secure payments</p>
                </div>
            </div>
            <div class="foot-top-content">
                <div class="foot-img">
                    <img src="{{asset('/images/icon-support.png')}}" alt="">
                </div>
                <div class="foot-txt">
                    <h3>24/7 Dedicated Support</h3>
                    <p>Anywhere & Anytime</p>
                </div>
            </div>
            <div class="foot-top-content">
                <div class="foot-img">
                    <img src="{{asset('/images/icon-tag.png')}}" alt="">
                </div>
                <div class="foot-txt">
                    <h3>Daily Offers</h3>
                    <p>Discount up to 70% OFF</p>
                </div>
            </div>
        </div>

        <div class="container-fluid footer-widgets">
            <div class="row border-top py-5">
                <div class="col-xl-3 widg">
                    <strong>Berrymart - Your Online Foods & Grocery</strong>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus 
                        odit maiores nobis ipsum ex atque minus.</p>
                    <div class="contact-widg">
                        <div>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg></span>
                            <span>Hotline 24/7</span>
                            <h4>&nbsp&nbsp&nbsp&nbsp&nbsp8 800 123 45-67</h4>                            
                        </div>
                        <div>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                              </svg></span>
                            <span>123 Baguio City, Benguet, 2600</span>
                        </div>
                        <div>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                              </svg></span>
                            <span>support@berrymart.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 widg">
                    <strong>Useful Links</strong>
                    <ul>
                        <li><a href="/home">Terms of Use</a></li>
                        <li><a href="/home">Terms and Conditions</a></li>
                        <li><a href="/home">Refund Policy</a></li>
                        <li><a href="/home">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 widg">
                    <strong>Help Center</strong>
                    <ul>
                        <li><a href="/home">About Us</a></li>
                        <li><a href="/home">Affiliate</a></li>
                        <li><a href="/home">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 widg">
                    <strong>Business</strong>
                    <ul>
                        <li><a href="/home">My Account</a></li>
                        <li><a href="/home">Vendor Registration</a></li>
                        <li><a href="/home">Shop</a></li>
                        <li><a href="/home">Cart</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 widg">
                    <strong>Newsletter</strong>
                    <p>Register now to get updated on promotions and coupons. Don't worry! We don't spam.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter your email here" aria-label="email" aria-describedby="sub">
                        <button class="btn btn-outline-0 subscribeBtn" type="submit">Subscribe</button>
                      </div>
                </div>
                <div class="crft">
                    <p>© 2023 BerryMart. All Rights Reserved. Lecourt, Aaron Zayke P. IAB WEBSYS2</p>
                </div>
            </div>
            
        </div>
    </div>
  </footer>

  <script>
    var choice = document.querySelector('.choice');
    var ul = document.querySelector('.ul');

    choice.onclick = function(){
        ul.classList.toggle("active");
    }

    function selectOption(listItem){
        var value = listItem.innerHTML;
        choice.innerHTML = value;
        ul.classList.toggle("active");
    }
  </script>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>