    <!-- log in section start -->
    <section class="log-in-section section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{ asset('template/assets/images/inner-page/sign-up.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>{{ __('general.welcome_to') }} {{ settings()->title }}</h3>
                            <h4>{{ __('general.create_new_account') }}</h4>
                        </div>

                        <div class="input-box">
                            <form class="row g-4">
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="text" class="form-control" id="fullname" placeholder="{{ __('general.fullname') }}">
                                        <label for="fullname">{{ __('general.fullname') }}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="{{ __('general.email_address') }}">
                                        <label for="email">{{ __('general.email_address') }}</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="{{ __('general.password') }}">
                                        <label for="password">{{ __('general.password') }}</label>
                                    </div>
                                </div>

                                {{-- <div class="col-12">
                                    <div class="forgot-box">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="checkbox_animated check-box" type="checkbox"
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">I agree with
                                                <span>Terms</span> and <span>Privacy</span></label>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-12">
                                    <button class="btn btn-animation w-100" type="submit">{{ __('general.sign_up') }}</button>
                                </div>
                            </form>
                        </div>

                        {{-- <div class="other-log-in">
                            <h6>or</h6>
                        </div>

                        <div class="log-in-button">
                            <ul>
                                <li>
                                    <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                        class="btn google-button w-100">
                                        <img src="{{ asset('template/assets/images/inner-page/google.png')}}" class="blur-up lazyload"
                                            alt="">
                                        Sign up with Google
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" class="btn google-button w-100">
                                        <img src="{{ asset('template/assets/images/inner-page/facebook.png')}}" class="blur-up lazyload"
                                            alt=""> Sign up with Facebook
                                    </a>
                                </li>
                            </ul>
                        </div> --}}

                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>{{ __('general.already_have_account!') }}</h4>
                            <a href="{{ route('user.login') }}">{{ __('general.login') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
            </div>
        </div>
    </section>
    <!-- log in section end -->
<!-- Section: Design Block -->
{{-- <section class="text-center text-lg-start">
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
                <div class="card cascading-right"
                    style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                    <div class="card-body registration-padding shadow-5 text-center">
                        <h2 class="fw-bold mb-5">{{ __('general.sign_up_now') }}</h2>
                        <form method="post" action="{{ route('user.register') }}">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                        <label
                                            class="form-label d-flex float-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} "
                                            for="form3Example1">{{ __('general.name') }}</label>
                                        <input type="text" name="name" id="form3Example1"
                                            class="form-control @error('name') invalid @enderror" />
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label
                                    class="form-label d-flex float-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} "
                                    for="form3Example3">{{ __('general.email') }}</label>
                                <input type="email" name="email" id="form3Example3"
                                    class="form-control @error('email') invalid @enderror" />
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label
                                    class="form-label d-flex float-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} "
                                    for="form3Example4">{{ __('general.password') }}</label>
                                <input type="password" name="password" id="form3Example4"
                                    class="form-control @error('password') invalid @enderror" />
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label
                                    class="form-label d-flex float-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} "
                                    for="form3Example4">{{ __('general.confirm_password') }}</label>
                                <input type="password" name="password_confirmation" id="form3Example4"
                                    class="form-control @error('password_confirmation') invalid @enderror" />
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <a href="{{ route('user.login') }}"
                                    class="form-check-label">{{ __('general.already_have_account!') }}</a>
                            </div>

                            <!-- Submit button -->

                            <div class="col-md-12 mb-4 d-flex justify-content-center">
                               
                                <button type="submit" class="btn btn-primary py-md-3 px-md-5 d-lg-block">
                                    {{ __('general.sign_up') }}
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
</section> --}}
<!-- Section: Design Block -->
