    <!-- Footer Section Start -->
    <footer class="section-t-space">
        <div class="container-fluid-lg">
            <div class="service-section">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="service-contain">
                            @foreach (advantages() as $advantage)
                                <div class="service-box">
                                    <div class="service-image">
                                        <img src="{{ asset($advantage->image) }}" class="blur-up lazyload" alt="">
                                    </div>

                                    <div class="service-detail">
                                        <h5>{{$advantage->title }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-footer section-b-space section-t-space">
                <div class="row g-md-4 g-3">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-logo">
                            <div class="theme-logo">
                                <a href="{{ route('front.home') }}">
                                    <img src="{{ settings()->logo }}" class="blur-up lazyload p-0 m-0 w-100" alt="">
                                </a>
                            </div>

                            <div class="footer-logo-contain">
                                <p>{{ settings()->description }}</p>

                                <ul class="address">
                                    <li>
                                        <i data-feather="home"></i>
                                        <a href="#">{{ settings()->translate(app()->getLocale())->address }}</a>
                                    </li>
                                    <li>
                                        <i data-feather="mail"></i>
                                        <a href="mailto:{{contacts('email')[0]->contact }}">{{ contacts('email')[0]->contact }}</a>
                                    </li>
                                    <li>
                                        <i data-feather="phone"></i>
                                        <a href="tel:{{contacts('phone')[0]->contact }}">{{ contacts('phone')[0]->contact }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-title">
                            <h4>{{ __('general.categories') }}</h4>
                        </div>

                        <div class="footer-contain">
                            <ul>
                                @foreach (categories() as $category)
                                <li>
                                    <a href="{{ route('front.products',1) }}" class="text-content">{{ $category->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl col-lg-2 col-sm-3">
                        <div class="footer-title">
                            <h4>{{ __('general.useful_link') }}</h4>
                        </div>

                        <div class="footer-contain">
                            <ul>
                                <li>
                                    <a href="{{ route('front.home') }}" class="text-content">{{ __('general.home') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('front.shopping_now') }}" class="text-content">{{ __('general.shop_now') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('front.about') }}" class="text-content">{{ __('general.about') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('front.message') }}" class="text-content">{{ __('general.contact') }}</a>
                                </li>
                              
                              
                            </ul>
                            
                        </div>
                        <img class="mt-3 qr-code w-100" src="{{ asset('images/asleltawfeer.png') }}"  alt="">
                    </div>

                    <div class="col-xl-2 col-sm-3">
                        <div class="footer-title">
                            <h4>{{ __('general.help_center') }}</h4>
                        </div>

                        <div class="footer-contain">
                            <ul>
                                <li>
                                    <a href="{{ route('show.orders') }}" class="text-content">{{ __('general.orders') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('show_profile') }}" class="text-content">{{ __('general.account') }}</a>
                                </li>
                                {{-- <li>
                                    <a href="order-tracking.html" class="text-content">{{ __('general.Track Order') }}</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('front.wishlist') }}" class="text-content">{{ __('general.mywish') }}</a>
                                </li>
                                {{-- <li>
                                    <a href="search.html" class="text-content">Search</a>
                                </li>
                                <li>
                                    <a href="faq.html" class="text-content">FAQ</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-title">
                            <h4>{{ __('general.contact_us') }}</h4>
                        </div>

                        <div class="footer-contact">
                            <ul>
                                <li>
                                    <div class="footer-number">
                                        <i data-feather="phone"></i>
                                        <div class="contact-number">
                                            <h6 href="tel:{{contacts('phone')[0]->contact }}" class="text-content">{{ __('general.hotline') }}</h6>
                                            <h5>{{contacts('phone')[0]->contact }}</h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="footer-number">
                                        <i data-feather="mail"></i>
                                        <div class="contact-number">
                                            <h6 class="text-content">{{ __('general.email_address') }}</h6>
                                            <h5 href="mailto:{{contacts('email')[0]->contact }}">{{contacts('email')[0]->contact }}</h5>
                                        </div>
                                    </div>
                                </li>

                                <li class="social-app">
                                    <h5 class="mb-2 text-content fw-bold">{{ __('general.download_app') }}</h5>
                                    <ul>
                                        <li class="mb-0">
                                            <a href="#" target="_blank">
                                                <img src="{{ asset('template/assets/images/playstore.svg') }}" class="blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="mb-0">
                                            <a href="#" target="_blank">
                                                <img src="{{ asset('template/assets/images/appstore.svg') }}" class="blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sub-footer section-small-space">
                <div class="reserve">
                    <h6 class="text-content">{{ settings()->copyright }}</h6>
                </div>

                <div class="payment">
                    <img src="{{ asset('template/assets/images/payment/1.png') }}" class="blur-up lazyload" alt="">
                </div>

                <div class="social-link">
                    <h6 class="text-content">{{ __('general.stay_connected') }}</h6>
                    <ul>
                        @foreach (contacts('social') as $contact)
                            <li>
                                <a href="{{ $contact->contact }}" target="_blank">
                                    <i class="{{ $contact->icon }}"></i>
                                </a>
                            </li>
                        @endforeach
                        {{-- <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://in.pinterest.com/" target="_blank">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
       <!-- Quick View Modal Box Start -->
       <div class="modal fade th,eme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="../assets/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g ya prooooooo</h4>
                                <h4 class="price">$36.99</h4>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                        Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                        Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                        muffin I love carrot cake sugar plum dessert bonbon.</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected>Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md add-cart-button icon">Add
                                        To Cart</button>
                                    <button onclick="location.href = 'product-left.html';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <!-- Quick View Modal Box End -->

   <!-- Location Modal Start -->
   <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
       aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                   <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                       <i class="fa-solid fa-xmark"></i>
                   </button>
               </div>
               <div class="modal-body">
                   <div class="location-list">
                       <div class="search-input">
                           <input type="search" class="form-control" placeholder="Search Your Area">
                           <i class="fa-solid fa-magnifying-glass"></i>
                       </div>

                       <div class="disabled-box">
                           <h6>Select a Location</h6>
                       </div>

                       <ul class="location-select custom-height">
                           <li>
                               <a href="javascript:void(0)">
                                   <h6>Alabama</h6>
                                   <span>Min: $130</span>
                               </a>
                           </li>

                           <li>
                               <a href="javascript:void(0)">
                                   <h6>Arizona</h6>
                                   <span>Min: $150</span>
                               </a>
                           </li>

                           <li>
                               <a href="javascript:void(0)">
                                   <h6>California</h6>
                                   <span>Min: $110</span>
                               </a>
                           </li>

                           <li>
                               <a href="javascript:void(0)">
                                   <h6>Colorado</h6>
                                   <span>Min: $140</span>
                               </a>
                           </li>

                           <li>
                               <a href="javascript:void(0)">
                                   <h6>Florida</h6>
                                   <span>Min: $160</span>
                               </a>
                           </li>

                           <li>
                               <a href="javascript:void(0)">
                                   <h6>Georgia</h6>
                                   <span>Min: $120</span>
                               </a>
                           </li>

                           <li>
                               <a href="javascript:void(0)">
                                   <h6>Kansas</h6>
                                   <span>Min: $170</span>
                               </a>
                           </li>

                           <li>
                               <a href="javascript:void(0)">
                                   <h6>Minnesota</h6>
                                   <span>Min: $120</span>
                               </a>
                           </li>

                           <li>
                               <a href="javascript:void(0)">
                                   <h6>New York</h6>
                                   <span>Min: $110</span>
                               </a>
                           </li>

                           <li>
                               <a href="javascript:void(0)">
                                   <h6>Washington</h6>
                                   <span>Min: $130</span>
                               </a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Location Modal End -->


   <!-- Cookie Bar Box Start -->
   {{-- <div class="cookie-bar-box">
       <div class="cookie-box">
           <div class="cookie-image">
               <img src="../assets/images/cookie-bar.png" class="blur-up lazyload" alt="">
               <h2>Cookies!</h2>
           </div>

           <div class="cookie-contain">
               <h5 class="text-content">We use cookies to make your experience better</h5>
           </div>
       </div>

       <div class="button-group">
           <button class="btn privacy-button">Privacy Policy</button>
           <button class="btn ok-button">OK</button>
       </div>
   </div> --}}
   <!-- Cookie Bar Box End -->

   <!-- Deal Box Modal Start -->
   <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
           <div class="modal-content">
               <div class="modal-header">
                   <div>
                       <h5 class="modal-title w-100" id="deal_today">عروض اليوم</h5>
                       <p class="mt-1 text-content">العروض المقترحة لك</p>
                   </div>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                       <i class="fa-solid fa-xmark"></i>
                   </button>
               </div>
               @if (auth('web')->user())
                    <div class="modal-body">
                        <div class="deal-offer-box">
                            <ul class="deal-offer-list">
                                @foreach ($offers as $offer)

                                <li class="list-1">
                                    <div class="deal-offer-contain">
                                        <a href="#" class="deal-image">
                                            <img src="{{asset($offer->image)}}" class="blur-up lazyload"
                                                alt="">
                                        </a>

                                        <a href="shop-left-sidebar.html" class="deal-contain">
                                            <h5>{{$offer->title}}</h5>
                                            <h6><span>{{$offer->translate(app()->getLocale())->description}}</span></h6>
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
               @endif
           </div>
       </div>
   </div>
   <!-- Deal Box Modal End -->

   <!-- Tap to top start -->
   <div class="theme-option">
       <div class="back-to-top">
           <a id="back-to-top" href="#">
               <i class="fas fa-chevron-up"></i>
           </a>
       </div>
   </div>
   <!-- Tap to top end -->

   <!-- Bg overlay Start -->
   <div class="bg-overlay"></div>
   <!-- Bg overlay End -->

   <!-- Bg overlay Start -->
   <div class="bg-overlay"></div>
   <!-- Bg overlay End -->

    <!-- Back to Top -->
    {{-- <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a> --}}

@include('front.components.whatsapp')

{{-- start template --}}

   <!-- latest jquery-->
   <script src="{{ asset('template/assets/js/jquery-3.6.0.min.js') }}"></script>

   <!-- jquery ui-->
   <script src="{{ asset('template/assets/js/jquery-ui.min.js') }}"></script>

   <!-- Bootstrap js-->
   <script src="{{ asset('template/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('template/assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
   <script src="{{ asset('template/assets/js/bootstrap/popper.min.js') }}"></script>

   <!-- feather icon js-->
   <script src="{{ asset('template/assets/js/feather/feather.min.js') }}"></script>
   <script src="{{ asset('template/assets/js/feather/feather-icon.js') }}"></script>

   <!-- Lazyload Js -->
   <script src="{{ asset('template/assets/js/lazysizes.min.js') }}"></script>

   <!-- Slick js-->
   <script src="{{ asset('template/assets/js/slick/slick.js') }}"></script>
   <script src="{{ asset('template/assets/js/slick/custom_slick.js') }}"></script>

   <!-- Auto Height Js -->
   <script src="{{ asset('template/assets/js/auto-height.js') }}"></script>

   <!-- Timer Js -->
   <script src="{{ asset('template/assets/js/timer1.js') }}"></script>

   <!-- Fly Cart Js -->
   <script src="{{ asset('template/assets/js/fly-cart.js') }}"></script>

   <!-- Quantity js -->
   <script src="{{ asset('template/assets/js/quantity-2.js') }}"></script>

   <!-- WOW js -->
   <script src="{{ asset('template/assets/js/wow.min.js') }}"></script>
   <script src="{{ asset('template/assets/js/custom-wow.js') }}"></script>

   <!-- script js -->
   <script src="{{ asset('template/assets/js/script.js') }}"></script>
   {{-- end template --}}
 <!-- JavaScript Libraries -->
 {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <script src="https://cdn.jsdelivr.xyz/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('front/lib/easing/easing.min.js') }}"></script>
 <script src="{{ asset('front/lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{ asset('front/lib/counterup/counterup.min.js') }}"></script>
 <script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- all plugins here -->
{{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/imageload.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/tweenmax.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoint.js') }}"></script>
<script src="{{ asset('assets/js/counterup.js') }}"></script>
<script src="{{ asset('lightbox-dist/js/lightbox.min.js') }}"></script>
{{-- <script src="{{ asset('bootstrap-5.3.1-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap-5.3.1-dist/js/bootstrap.bundle.js') }}"></script> --}}
<!-- main js  -->
<script src="{{ asset('assets/js/magnific.min.js') }}"></script>
{{-- <script src="{{ asset('front/js/main.js') }}"></script> --}}

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('bootstrap-5.3.1-dist/js/bootstrap.min.js.map') }}"></script>
<!-- Swiper JS - V10.2.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"
    integrity="sha512-k2o1KZdvUi59PUXirfThShW9Gdwtk+jVYum6t7RmyCNAVyF9ozijFpvLEWmpgqkHuqSWpflsLf5+PEW6Lxy/wA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('js/scripts.bundle.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function inVisible(element) {
        //Checking if the element is
        //visible in the viewport
        var WindowTop = $(window).scrollTop();
        var WindowBottom = WindowTop + $(window).height();
        var ElementTop = element.offset().top;
        var ElementBottom = ElementTop + element.height();
        //animating the element if it is
        //visible in the viewport
        if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
            animate(element);
    }

    function animate(element) {
        //Animating the element if not animated before
        if (!element.hasClass('ms-animated')) {
            var maxval = element.data('max');
            var html = element.html();
            element.addClass("ms-animated");
            $({
                countNum: element.html()
            }).animate({
                countNum: maxval
            }, {
                //duration 5 seconds
                duration: 5000,
                easing: 'linear',
                step: function () {
                    element.html(Math.floor(this.countNum) + html);
                },
                complete: function () {
                    element.html(this.countNum + html);
                }
            });
        }

    }

    //When the document is ready
    $(function () {
        //This is triggered when the
        //user scrolls the page
        $(window).scroll(function () {
            //Checking if each items to animate are
            //visible in the viewport
            $("h2[data-max]").each(function () {
                inVisible($(this));
            });
        })
    });

</script>




<script>
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 80, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 130, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 50, // values from 0 to 3000, with step 50ms
        duration: 800, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
</script>

@stack('js')
</body>

</html>
