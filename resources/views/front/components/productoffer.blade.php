   <!-- Offer Section Start -->
<section>
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="offer-box hover-effect">
                    <img src="{{asset('template/assets/images/veg-2/banner/3.jpg')}}" class="bg-img blur-up lazyload" alt="">
                    <div class="offer-contain p-4">
                        <div class="offer-detail">
                            <h2 class="text-dark">Special Offers <span class="text-danger fw-bold">of the
                                    week!</span></h2>
                            <p class="text-content">Special offer on this discount, Hurry Up!</p>
                        </div>
                        <div class="offer-timing">
                            <div class="time" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                <ul>
                                    <li>
                                        <div class="counter">
                                            <div class="days">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="hours">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="minutes">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="seconds">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Offer Section End -->



@push('js')
    <script>
        $('.addCart').on('click', function(e) {
            $(this).addClass('disabled');
            e.preventDefault();
            var product_id = $(this).attr('product_id');
            let url = "{{ route('addTo.cart', ':id') }}";
            url = url.replace(':id', product_id);
            $.ajax({
                type: 'get',
                url: url,
                success: (response) => {
                    $(this).removeClass('disabled');
                    console.log(response);
                    $('.cart-count').text(response.count);
                    $(this).addClass('d-none').next().removeClass('d-none btn btn-primary').addClass(
                        'btn btn-danger').attr('hash', response.hash);
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "{{ app()->getLocale() == 'ar' ? 'toast-top-left' : 'toast-top-right' }}",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                    toastr.success("{{ __('general.added_successfully') }}");

                },
                error: function(response) {
                    alert(response.error);
                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });

        $('.removeCart').on('click', function(e) {
            $(this).addClass('disabled');
            e.preventDefault();
            var hash = $(this).attr('hash');
            let url = "{{ route('removeFrom.cart', ':hash') }}";
            url = url.replace(':hash', hash);
            $.ajax({
                type: 'get',
                url: url,
                success: (response) => {
                    $(this).removeClass('disabled');
                    $(this).addClass('d-none').prev().removeClass('d-none btn btn-danger').addClass(
                        'btn btn-primary').attr('hash', '');
                    $('.cart-count').text(response.count);
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "{{ app()->getLocale() == 'ar' ? 'toast-top-left' : 'toast-top-right' }}",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": " linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                    toastr.success("{{ __('general.removed_successfully') }}");
                },
                error: function(response) {
                    alert(response.error);
                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });
    </script>
@endpush
