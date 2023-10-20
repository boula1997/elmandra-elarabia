  <!-- Contact Start -->
  <div class="container-fluid p-5">
    <div class="mb-5 text-center">
        <h5 class="text-primary text-uppercase">{{ __('general.contact_us') }}</h5>
        <h1 class="display-5 text-uppercase mb-0">{{ __('general.get_in_touch') }}</h1>
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
    <div class="row g-2">
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
            <div class="g-map-inner w-50 mx-2">
                {!! settings()->map !!}
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


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
