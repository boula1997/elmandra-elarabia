<div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
    <h4 class="text-uppercase text-white mb-4">{{ __('general.newsletters') }}</h4>
    <h6 class="text-uppercase text-white">{{ __('general.subscribe_now') }}</h6>
    {{-- <p class="text-light">Amet justo diam dolor rebum lorem sit stet sea justo kasd</p> --}}
    <form method="post" id="newsletter-form">
        <div class="input-group">
            <input type="text input-sm" name="newsletterEmail" class="form-control border-white p-3 w-25" placeholder="{{ __('general.your_email') }}">
            <button type="submit" class="btn btn-dark" id="btn-newsletter">
                <i class="fa fa-spinner fa-spin d-none" id="spinner-newsletter"></i>
                {{ __('general.sign_up') }}
            </button>
            <div id="newsletterEmail" class="err"></div>
        </div>
    </form>
</div>


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
                
                // this.reset();
                $('#spinner-newsletter').addClass('d-none');
                $('#btn-newsletter').removeAttr('disabled').removeClass(
                    'bg-secondary');
                $('.alert-success').removeClass('d-none').text(response.success);
                setTimeout(() => {
                    $('.alert-success').addClass('d-none').text(response.success);
                }, 5000);
            },
            error: function(response) {
                alert(response.success);
                $('#spinner-newsletter').addClass('d-none');
                $('#btn-newsletter').removeAttr('disabled').removeClass('bg-secondary');

                $(".err").addClass("d-block");
                $(".err").removeClass("d-none");

                if (response.responseJSON.errors.newsletterEmail) {
                    $("#email").append(
                        `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.newsletterEmail}</div>`
                    );
                }

            }
        });
    });
</script>
@endpush