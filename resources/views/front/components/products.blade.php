
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-12 col-lg-3 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="d-flex justify-content-between p-3">
                            <p class="lead mb-0">Today's Combo Offer</p>
                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                style="width: 35px; height: 35px;">
                                <p class="text-white mb-0 small">x4</p>
                            </div>
                        </div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                            class="card-img-top" alt="Laptop" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <h5 class="mb-0">HP Notebook</h5>
                                <div class="small text-danger"><h5 class="text-dark mb-0">$999</h5><s>$1099</s></div>
                                
                            </div>

                            <div class="">
                                <button class="btn btn-primary btn-sm w-100 mt-1"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                                <button class="btn btn-primary btn-sm w-100 mt-1"><i class="fa fa-star"></i> Add to Favourite</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
