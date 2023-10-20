
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-12 col-lg-3 mb-3 mb-lg-0">
                    <div class="card">
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
