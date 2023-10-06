<div class="team-area info-box-two pd-top-115 pd-bottom-90">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-6 col-md-9">
                <div class="section-title text-center">
                    <h5 class="sub-title double-line">{{ page('contact-section')->title }}</h5>
                    <h2 class="title">{{ page('contact-section')->subtitle }}</h2>
                    <p class="content">{!! page('contact-section')->description !!} </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="flip-left">
                <div class="boxShadow-contact">
                    <div class="single-contact-inner text-center">
                        <div class="icon-box">
                            <i class="icomoon-pin"></i>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h3>{{ __('general.address') }}</h3>
                                <p>{{ settings()->translate(app()->getLocale())->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="boxShadow-contact">
                    <div class="single-contact-inner text-center" data-aos="flip-left">
                        <div class="icon-box">
                            <i class=" icomoon-email"></i>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h3>{{ __('general.email') }}</h3>
                                <p>{{ contacts('email')[0]->contact }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="boxShadow-contact">
                    <div class="single-contact-inner text-center" data-aos="flip-left">
                        <div class="icon-box">
                            <i class=" icomoon-telephone"></i>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h3>{{ __('general.phone') }}</h3>
                                <p>{{ contacts('phone')[0]->contact }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="g-map-message">
    <div class="row justify-content-end">
        <div class="col-lg-5 col-md-7" data-aos="fade-right">
            <div class="alert alert-success d-none mx-3">
                <p style="text-align: start"></p>
            </div>
            <form class="message-form-wrap" method="post" id="message-form">
                @csrf
                <div class="consulting-message-form mx-4">
                    <h3 class="mb-3">{{ __('general.free_consulting') }}</h3>
                    <div class="single-input-inner style-bg">
                        <input type="text" name="name" placeholder="{{ __('general.fullname') }}">
                        <div id="name" class="err"></div>
                    </div>
                    <div class="single-input-inner style-bg">
                        <input type="text" name="email" placeholder="{{ __('general.email_address') }}">
                        <div id="email" class="err"></div>
                    </div>
                    <div class="single-input-inner style-bg">
                        <input type="text" name="phone" placeholder="{{ __('general.phone') }}">
                        <div id="phone" class="err"></div>
                    </div>
                    <div class="single-input-inner style-bg">
                        <textarea name="message" id="message" placeholder="{{ __('general.message') }}"></textarea>
                        <div id="message_err" class="err"></div>
                    </div>
                    <div class="btn-wrap pb-3">
                        <button type="submit" class="btn btn-base">{{ __('general.submit') }}</button> <img class="p-5 d-none" id="spinner-contact" src="{{ asset('images/5.gif') }}" alt="GIF">
                    </div>
                    <p class="form-messege mb-0 mt-20 text-center"></p>
                </div>
            </form>
        </div>
        <div class="col-lg-7 col-md-5" data-aos="fade-left">
            <div class="g-map-inner">
                {!! settings()->map !!}
            </div>
        </div>
    </div>
</div>

{{-- @include('front.components.solution') --}}

@push('js')
    <script>
        $('#message-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $(".err").empty();
            $(".err").addClass("d-none");
            $('#btn-contact').attr('disabled', 'disabled');
            $('#spinner-contact').removeClass('d-none');
            $.ajax({
                type: 'POST',
                url: "{{ route('front.message.post') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'name': $("input[name=name]").val(),
                    'email': $("input[name=email]").val(),
                    'phone': $("input[name=phone]").val(),
                    'message': $("#message").val(),
                },
                success: (response) => {
                    $('#spinner-contact').addClass('d-none');
                    $('#btn-contact').removeAttr('disabled');
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
                    $('#spinner-contact').addClass('d-none');
                    $('#btn-contact').removeAttr('disabled');

                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                    if (response.responseJSON.errors.name) {
                        $("#name").append(
                            `<div class="alert alert-danger my-1"  style="text-align:initial !important">${response.responseJSON.errors.name}</div>`
                        );
                    }
                    if (response.responseJSON.errors.email) {
                        $("#email").append(
                            `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.email}</div>`
                        );
                    }
                    if (response.responseJSON.errors.phone) {
                        $("#phone").append(
                            `<div class="alert alert-danger my-1" style="text-align:initial !important">${response.responseJSON.errors.phone}</div>`
                        );
                    }

                    if (response.responseJSON.errors.message) {
                        $("#message_err").append(
                            `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.message}</div>`
                        );
                    }

                }
            });
        });
    </script>
@endpush
