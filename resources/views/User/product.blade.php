<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="{{ route('all-product') }}">view all products <i class="fa fa-angle-right"></i></a>

                    <form action="{{ url('search') }}" method="GET" class="float-right form-inline d-flex justify-content-between gap-3 my-4">
                        @csrf
                        <div>
                            <input class="form-control mx-2" type="search" name="search" placeholder="search">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>


            @foreach ($data as $product)
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img height="300" width="150" src="/productimage/{{ $product->image }}"
                                alt="product-image"></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>{{ $product->title }}</h4>
                            </a>
                            <h6>Rp. {{ $product->price }}</h6>
                            <p>{{ $product->description }}</p>

                            <form action="{{ url('addcart', $product->id) }}" method="POST">

                                @csrf

                                <input type="number" value="1" min="1" class="form-control"
                                    style="width:100px" name="quantity">

                                <br>

                                <input class="btn btn-primary" type="submit" value="Add Cart">
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach

            @if (method_exists($data, 'links'))
                <div class="d-flex justify-content-center">
                    {!! $data->links() !!}
                </div>
            @endif

        </div>
    </div>
</div>
