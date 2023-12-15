    <!-- Banner Section Start -->
    <section class="bank-section overflow-hidden">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>{{__('general.offers')}}</h2>
            </div>
            <div class="slider-bank-3 arrow-slider slick-height">
                @foreach($offers as $offer)
                    <div>
                        <div class="bank-offer">
                            <div class="bank-header">
                                <div class="bank-left w-100">
                                    <div class="bank-name">
                                        <h2>{{$offer->title}}</h2>
                                        <h5 class="discount text-content">{{$offer->subtitle}}</h5>
                                        <h5 class="valid text-content">{!!$offer->description!!}</h5>
                                    </div>
                                </div>

                                <div class="bank-right w-100">
                                    <img src="{{ asset($offer->image) }}" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="bank-footer bank-footer-1">
                                <h4>{{__('general.code')}} :
                                    <input id="clipboardexample" value="{{$offer->code}}" /> 
                                    {{-- // TODO(Boula): apply offer for product only --}}
                                </h4>
                                <button type="button" class="bank-coupon btn" id="copyText" data-clipboard-action="copy"
                                    data-clipboard-target="#clipboardexample">{{__('general.copy_code')}}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Banner Section End -->



