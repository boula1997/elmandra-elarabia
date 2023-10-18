  <!-- Contact Start -->
  <div class="container-fluid p-5">
    <div class="mb-5 text-center">
        <h5 class="text-primary text-uppercase">{{ __('general.contact_us') }}</h5>
        <h1 class="display-3 text-uppercase mb-0">{{ __('general.get_in_touch') }}</h1>
    </div>
    <div class="row g-5 mb-5">
        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fa fa-map-marker-alt fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">{{ __('general.address') }}</h5>
                <p class="text-secondary mb-0">{{ settings()->translate(app()->getLocale())->address }}</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fa fa-envelope fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">{{ __('general.email') }}</h5>
                <p class="text-secondary mb-0">{{ contacts('email')[0]->contact }}</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fa fa-phone fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">{{ __('general.call_us') }}</h5>
                <p class="text-secondary mb-0">{{ contacts('phone')[0]->contact }}</p>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-6">
            <div class="bg-dark p-5">
                <form>
                    <div class="row g-3">
                        <div class="col-6">
                            <input type="text" class="form-control bg-light border-0 px-4" placeholder="{{ __('general.your_name') }}" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control bg-light border-0 px-4" placeholder="{{ __('general.your_email') }}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control bg-light border-0 px-4" placeholder="{{ __('general.subject') }}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control bg-light border-0 px-4 py-3" rows="4" placeholder="{{ __('general.message') }}"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">{{ __('general.send_message') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="g-map-inner">
                {!! settings()->map !!}
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
{{-- <div class="team-area info-box-two pd-top-115 pd-bottom-90">
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
                        <button type="submit" class="btn btn-base" id="btn-contact"><i
                                class="fa fa-spinner fa-spin d-none" id="spinner-contact"></i>
                            {{ __('general.submit') }}</button>
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
</div> --}}

{{-- @include('front.components.solution') --}}

@push('js')
    <script>
        $('#message-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $(".err").empty();
            $(".err").addClass("d-none");
            $('#btn-contact').attr('disabled', 'disabled').addClass('bg-secondary');
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
                    this.reset();
                    $('#spinner-contact').addClass('d-none');
                    $('#btn-contact').removeAttr('disabled').removeClass(
                        'bg-secondary');
                    $('.alert-success').removeClass('d-none').text(response.success);
                    setTimeout(() => {
                        $('.alert-success').addClass('d-none').text(response.success);
                    }, 5000);
                },
                error: function(response) {
                    $('#spinner-contact').addClass('d-none');
                    $('#btn-contact').removeAttr('disabled').removeClass('bg-secondary');

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
