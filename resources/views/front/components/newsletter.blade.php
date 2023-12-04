    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2>{{ page('newsletter')->title }}</h2>
                                    <form method="post" id="newsletter-form">
                                        <h5>{{ page('newsletter')->subtitle }}</h5>
                                        <div class="input-box">
                                            <input type="newsletterEmail" name="newsletterEmail" class="form-control"
                                                placeholder="{{ __('general.email_address') }}">
                                            <i class="fa-solid fa-envelope arrow"></i>
                                            <button class="sub-btn btn">
                                                <span class="d-sm-block d-none" type="submit"> <i
                                                        class="fa fa-spinner fa-spin d-none"
                                                        id="spinner-newsletter"></i>
                                                    {{ __('general.subscribe') }}</span>
                                                <i class="fa-solid fa-arrow-right icon"></i>
                                            </button>
                                        </div>
                                        <div id="newsletterEmail" class="err"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->


    @push('js')
        <script>
            $('#newsletter-form').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $(".err").empty();
                $(".err").addClass("d-none");
                $('#btn-newsletter').attr('disabled', 'disabled').addClass('bg-secondary');
                $('#spinner-newsletter').removeClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('front.newsletter.post') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'newsletterEmail': $("input[name=newsletterEmail]").val(),
                    },
                    success: (response) => {
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

                        toastr.success(response.success);

                        this.reset();
                        $('#spinner-newsletter').addClass('d-none');
                        $('#btn-newsletter').removeAttr('disabled').removeClass(
                            'bg-secondary');
                        $('.alert-success').removeClass('d-none').text(response.success);
                        setTimeout(() => {
                            $('.alert-success').addClass('d-none').text(response.success);
                        }, 5000);
                    },
                    error: function(response) {
                        $('#spinner-newsletter').addClass('d-none');
                        $('#btn-newsletter').removeAttr('disabled').removeClass('bg-secondary');

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
    @endpush
