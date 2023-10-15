<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary px-5 mt-5">
    <div class="row gx-5">
        <div class="col-lg-8 col-md-6">
            <div class="row gx-5">
                <div class="col-lg-6 col-md-12 pt-5 mb-5">
                    <h4 class="text-uppercase text-light mb-4">{{ __('general.get_in_touch') }}</h4>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0">{{ settings()->translate(app()->getLocale())->address }}</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-envelope-open text-primary me-2"></i>
                        <p class="mb-0">{{ contacts('email')[0]->contact }}</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-telephone text-primary me-2 rotate"></i>
                        <p class="mb-0 " >{{ contacts('phone')[0]->contact }}</p>
                    </div>
                    <div class="d-flex mt-4">
                        @foreach (contacts('social') as $contact)

                        <a href="{{ $contact->contact }}" class="btn btn-primary btn-square rounded-circle me-2"><i class="{{ $contact->icon }}"
                            aria-hidden="true"></i></a>  
                        
                        @endforeach
                        {{-- <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 pt-0 pt-lg-5 mb-5">
                    <h4 class="text-uppercase text-light mb-4">{{ __('general.quick_links') }}</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="{{ route('front.home') }}"><i class="bi bi-arrow-right text-primary me-2 "></i>{{ __('general.home') }}</a>
                        <a class="text-secondary mb-2" href="{{ route('front.about') }}"><i class="bi bi-arrow-right text-primary me-2"></i>{{ __('general.about') }}</a>
                        <a class="text-secondary mb-2" href="{{ route('front.process') }}"><i class="bi bi-arrow-right text-primary me-2"></i>{{ __('general.product') }}</a>
                        {{-- <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                        <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> --}}
                        <a class="text-secondary" href="{{ route('front.message') }}"><i class="bi bi-arrow-right text-primary me-2"></i>{{ __('general.contact') }}</a>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                    <h4 class="text-uppercase text-light mb-4">Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                        <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                        <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                <h4 class="text-uppercase text-white mb-4">{{ __('general.newsletters') }}</h4>
                <h6 class="text-uppercase text-white">{{ __('general.subscribe_now') }}</h6>
                {{-- <p class="text-light">Amet justo diam dolor rebum lorem sit stet sea justo kasd</p> --}}
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="{{ __('general.your_email') }}">
                        <button class="btn btn-dark">{{ __('general.sign_up') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
    <div class="row gx-5">
        <div class="col-lg-12">
            <div class="py-lg-4 text-center justify-content-center">
                <p>{{ settings()->copyright }}</p>
                {{-- <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Your Site Name</a>. All Rights Reserved.</p> --}}
            </div>
        </div>
        <div class="col-lg-4">
            {{-- <div class="py-lg-4 text-center credit">
                <p class="text-light mb-0">{{ settings()->copyright }}</p>
            </div> --}}
        </div>
    </div>
</div>
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

{{-- <!-- footer area start -->
<footer class="footer-area bg-black bg-cover mt-5" style="background-image: url({{ asset('assets/img/bg/2.webp') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_about d-flex justify-content-start align-items-center flex-column">
                    <a href="{{ route('front.home') }}"> <img class="footer-image" src="{{ settings()->white_logo }}" alt=""></a>
                    <div class="description text-limit tetx-white" style="--lines:4;">{!! page('about-us')->description !!}</div>
                    <ul class="social-media mt-3">
                        @foreach (contacts('social') as $contact)
                            <li>
                                <a class="facebook" href="{{ $contact->contact }}">
                                    <i class="{{ $contact->icon }}"></i>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">{{ __('general.services') }}</h4>
                    <ul>
                        @foreach (services() as $service)
                            <li><a href="{{ route('front.show.service', $service->id) }}">{{ $service->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">{{ __('general.useful_link') }}</h4>
                    <ul>
                        <li><a href="{{ route('front.home') }}">{{ __('general.home') }}</a></li>
                        <li><a href="{{ route('front.about') }}">{{ __('general.about') }}</a></li>
                        <li><a href="{{ route('front.service') }}">{{ __('general.services') }}</a></li>
                        <li><a href="{{ route('front.message') }}">{{ __('general.contact_us') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="alert alert-success d-none">
                    <p style="text-align: start"></p>
                </div>
                <div class="widget widget_subscribe d-block">
                    <h4 class="widget-title">{{ __('general.subscribe_now') }} </h4>
                    <div class="single-input-inner style-border style-bg-none">
                        <form action="{{ route('front.newsletter.post') }}" id="newsletter-form">
                            <input type="text" name="newsletterEmail" placeholder="{{ __('general.your_email') }}">
                            <div id="newsletterEmail" class="err"></div>
                            <button type="submit" id="btn-newsletter">
                                <i
                                class="fa fa-spinner fa-spin d-none" id="spinner-newsletter"></i> <i class="fa fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <p>{{ settings()->copyright }}</p>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

@include('front.components.whatsapp')

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.xyz/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('front/lib/easing/easing.min.js') }}"></script>
 <script src="{{ asset('front/lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{ asset('front/lib/counterup/counterup.min.js') }}"></script>
 <script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

 <!-- Template Javascript -->
 <script src="{{ asset('front/js/main.js') }}"></script>

<!-- all plugins here -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
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
<!-- Swiper JS - V10.2.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"
    integrity="sha512-k2o1KZdvUi59PUXirfThShW9Gdwtk+jVYum6t7RmyCNAVyF9ozijFpvLEWmpgqkHuqSWpflsLf5+PEW6Lxy/wA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        }
    });
</script>

<!-- aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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

<!-- main js  -->
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('js')

<script>
    $('#newsletter-form').on('click', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $(".err").empty();
        $(".err").addClass("d-none");
        $('#btn-newsletter').attr('disabled', 'disabled');
        $('#spinner-newsletter').removeClass('d-none');

        $.ajax({
            type: 'POST',
            url: "{{ route('front.newsletter.post') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'newsletterEmail': $("input[name=newsletterEmail]").val(),
            },
            success: (response) => {
                $('#spinner-newsletter').addClass('d-none');
                $('#btn-newsletter').removeAttr('disabled');
                if (response) {
                    this.reset();
                    if (response.success) {
                        $('.alert-success').removeClass('d-none').text(response.success);
                        setTimeout(() => {
                            $('.alert-success').addClass('d-none').text(response.success);
                        }, 5000);
                    } else
                        $('.error').removeClass('d-none').text(response.error);
                }
            },
            error: function(response) {
                $('#spinner-newsletter').addClass('d-none');
                $('#btn-newsletter').removeAttr('disabled');

                $(".err").addClass("d-block");
                $(".err").removeClass("d-none");
                if (response.responseJSON.errors.newsletterEmail) {
                    $("#newsletterEmail").append(
                        `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.newsletterEmail}</div>`
                    );
                }
            }
        });
    });
</script>

</body>

</html>
