<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-12 col-lg-3 mb-3 mb-lg-3">
                    <div class="card">
                        <div class="img-product-container">
                            <img src="{{ asset($product->image) }}" class="card-img-top img-product" alt="Laptop" />
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <h5 class="text-limit" style="--lines:1;" title="{{ $product->title }}">
                                    {{ $product->title }}</h5>
                            </div>
                            <div class="d-flex justify-content-between">

                                <p class="small text-danger"><s>$1099</s></p>
                                <h5 class="text-dark mb-0">$999</h5>
                            </div>

                            <button class="btn btn-primary btn-sm w-100 mt-1 addCart"
                                product_id="{{ $product->id }}"><i class="fas fa-shopping-cart"></i>
                                {{ __('general.add_to_cart') }}</button>

                            <button class="btn btn-primary btn-sm w-100 mt-1 removeCart d-none" hash=""><i
                                    class="fas fa-trash"></i>
                                {{ __('general.removeFromCart') }}</button>

                            {{-- <button class="btn btn-primary btn-sm w-100 mt-1"><i class="fa fa-star"></i>
                                    {{ __('general.add_to_favourite') }}</button> --}}
                            <div class="">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center">

                {!! $products->links('front.components.paginate') !!}
            </div>
        </div>
    </div>
</section>

@push('js')
    <script>
        $('.addCart').on('click', function(e) {
            e.preventDefault();
            var product_id = $(this).attr('product_id');
            let url = "{{ route('addTo.cart', ':id') }}";
            url = url.replace(':id', product_id);
            $.ajax({
                type: 'get',
                url: url,
                success: (response) => {
                    console.log(response);
                    $('#cart-count').text(response.count);
                    $(this).addClass('d-none').next().removeClass('d-none btn btn-primary').addClass('btn btn-danger').attr('hash',response.hash);
                },
                error: function(response) {
                    alert(response.error);
                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });

        $('.removeCart').on('click', function(e) {
            e.preventDefault();
            var hash = $(this).attr('hash');
            let url = "{{ route('removeFrom.cart', ':hash') }}";
            url = url.replace(':hash', hash);
            $.ajax({
                type: 'get',
                url: url,
                success: (response) => {
                    $(this).addClass('d-none').prev().removeClass('d-none btn btn-danger').addClass('btn btn-primary').attr('hash','');
                    $('#cart-count').text(response.count);
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
