<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

    <!-- ***** Preloader Start ***** -->
    @include('layouts.preloader')
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('layouts.navbar')

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>new arrivals</h4>
                        <h2>toko pashion products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All Products</li>
                        </ul>
                        <form action="{{ url('search') }}" method="get" class="form-inline"
                            style="float: right; padding: 10px;">

                            @csrf

                            <input class="form-control" type="search" name="search" placeholder="search">

                            <input type="submit" value="Search" class="btn btn-success">
                        </form>
                    </div>
                </div>
                @foreach ($data as $product)
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"><img height="250" width="200"
                                    src="/productimage/{{ $product->image }}" alt=""></a>
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
    @include('layouts.footer')
    @include('layouts.script')
</body>

</html>
