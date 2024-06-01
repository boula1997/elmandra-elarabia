<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary px-5 mt-5">
    <div class="row gx-5">
        <div class="col-lg-8 col-md-6">
            <div class="row gx-5">
                <div class="col-lg-6 col-md-12 pt-5 mb-5">
                    <h4 class="text-uppercase text-light mb-4">{{ __('general.get_in_touch') }}</h4>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0 letter-hover"><a class="text-secondary" href="#">{{ settings()->translate(app()->getLocale())->address }}</a></p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-envelope-open text-primary me-2 rotate"></i>
                        <p class="mb-0 letter-hover"><a class="text-secondary" href="mailto:{{contacts('email')[0]->contact }}">{{ contacts('email')[0]->contact }}</a></p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-telephone text-primary me-2 rotate"></i>
                        <p class="mb-0 letter-hover"><a class="text-secondary"  href="tel:{{contacts('phone')[0]->contact }}">{{ contacts('phone')[0]->contact }}</a></p>
                    </div>
                    <div class="d-flex mt-4">
                        @foreach (contacts('social') as $contact)

                        <a href="{{ $contact->contact }}" target="__blank" class="btn btn-primary btn-square rounded-circle me-2"><i class="{{ $contact->icon }}"
                            aria-hidden="true"></i></a>  
                        
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 pt-0 pt-lg-5 mb-5">
                    <h4 class="text-uppercase text-light mb-4">{{ __('general.quick_links') }}</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2 letter-hover" href="{{ route('front.home') }}"><i class="bi bi-arrow-{{ app()->getLocale()=='ar'?'left':'right' }} text-primary me-2 "></i>{{ __('general.home') }}</a>
                        <a class="text-secondary mb-2 letter-hover" href="{{ route('front.about') }}"><i class="bi bi-arrow-{{ app()->getLocale()=='ar'?'left':'right' }}  text-primary me-2"></i>{{ __('general.about') }}</a>
                        {{-- <a class="text-secondary mb-2 letter-hover" href="{{ route('front.products') }}"><i class="bi bi-arrow-{{ app()->getLocale()=='ar'?'left':'right' }}  text-primary me-2"></i>{{ __('general.products') }}</a> --}}
                        {{-- <a class="text-secondary mb-2 letter-hover" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                        <a class="text-secondary mb-2 letter-hover" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> --}}
                        <a class="text-secondary mb-2 letter-hover" href="{{ route('front.message') }}"><i class="bi bi-arrow-{{ app()->getLocale()=='ar'?'left':'right' }}  text-primary me-2 "></i>{{ __('general.contact') }}</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-6">
          @include('front.components.newsletter')
        </div>
    </div>
</div>
<div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
    <div class="row gx-5">
        <div class="col-lg-12">
            <div class="py-lg-4 text-center justify-content-center">
                <p>{{ settings()->copyright }}  <strong>  {{ _('general.developed_by') }} <a class="font-weight-bold text-primary" href="https://yousab-tech.com/yousab-tech/public/en"> {{ _('general.yousab_tech') }}</a></strong></p>
                {{-- <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Your Site Name</a>. All Rights Reserved.</p> --}}
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

@include('front.components.whatsapp')

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <script src="https://cdn.jsdelivr.xyz/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('front/lib/easing/easing.min.js') }}"></script>
 <script src="{{ asset('front/lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{ asset('front/lib/counterup/counterup.min.js') }}"></script>
 <script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- all plugins here -->
{{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> --}}
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
<script src="{{ asset('bootstrap-5.3.1-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap-5.3.1-dist/js/bootstrap.bundle.js') }}"></script>
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
{{-- <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script> --}}
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

<script>
    $(document).ready(function() {
        // alert(500);
        // Simulate a click on the checkbox once the page is loaded
        console.log('you are right');
        if (!$('.targetCheckbox').is(':checked'))
            $('.targetCheckbox').click();
    });
</script>
</body>

</html>
