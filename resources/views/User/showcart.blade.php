<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

    <!-- ***** Preloader Start ***** -->
    @include('layouts.preloader')
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('layouts.navbar')

    <div style="padding: 100px;" align="center">
        <table>
            <tr style="background-color:gray;">
                <td style="padding:10px; font-size:20px; color:white;">Product Name</td>
                <td style="padding:10px; font-size:20px; color:white;">Quantity</td>
                <td style="padding:10px; font-size:20px; color:white;">Price</td>

                <td style="padding:10px; font-size:20px; color:white;">Action</td>
            </tr>
            <form action="{{ url('order') }}" method="POST">
                @csrf
                @foreach ($cart as $carts)
                    <tr style="background-color:black;">
                        <td style="padding:10px; color:white;">
                            <input type="text" name="productname[]" value="{{ $carts->product_title }}"
                                hidden="">
                            {{ $carts->product_title }}
                        </td>
                        <td style="padding:10px; color:white;">
                            <input type="text" name="quantity[]" value="{{ $carts->quantity }}" hidden="">
                            {{ $carts->quantity }}
                        </td>
                        <td style="padding:10px; color:white;">
                            <input type="text" name="price[]" value="{{ $carts->price }}" hidden="">
                            {{ $carts->price }}
                        </td>

                        <td style="padding:10px; color:white;"><a class="btn btn-danger"
                                href="{{ url('delete', $carts->id) }}">Delete</td>
                    </tr>
                @endforeach
        </table>
        <button class="btn btn-success">Confirm Order</button>
        </form>
    </div>

    @include('layouts.script')
</body>

</html>
