<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    :lang(en).cascading-right {
      margin-right: -30px;
    }
    :lang(ar).cascading-right {
      margin-left: -30px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body registration-padding shadow-5 text-center">
            <h2 class="fw-bold mb-5">{{ __('general.login') }}</h2>
            <form>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              {{-- <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label d-flex float-{{ app()->getLocale()=='ar'?'left':'right' }} " for="form3Example1">{{ __('general.first_name') }}</label>
                    <input type="text" id="form3Example1" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label d-flex float-{{ app()->getLocale()=='ar'?'left':'right' }} " for="form3Example2">{{ __('general.last_name') }}</label>
                    <input type="text" id="form3Example2" class="form-control" />
                  </div>
                </div>
              </div> --}}

              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label d-flex float-{{ app()->getLocale()=='ar'?'left':'right' }} " for="form3Example3">{{ __('general.email') }}</label>
                <input type="email" id="form3Example3" class="form-control" />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label d-flex float-{{ app()->getLocale()=='ar'?'left':'right' }} " for="form3Example4">{{ __('general.password') }}</label>
                <input type="password" id="form3Example4" class="form-control" />
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                {{-- <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked /> --}}
                {{-- <label class="form-check-label" for="form2Example33">
                  {{__('general.subscribe_to_our_newsletter')}}
                </label> --}}
                <a href="{{ route('user-login') }}" class="form-check-label">{{ __('general.forget_password') }}</a>
              </div>

              <!-- Submit button -->

              <div class="col-md-12 mb-4 d-flex justify-content-center">
              {{-- </div>
                 <a href="" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block"></a>
              </div> --}}
                <button type="submit" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">
                 {{ __('general.login') }}
                </button>
              </div>

              <!-- Register buttons -->
              <div class="text-center">
                <p>{{ __('general.or_sign_up_with') }}</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="{{ asset('images/back1.jpg') }}" class="w-100 registration-imageback rounded-4 shadow-4"
          alt="img" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->