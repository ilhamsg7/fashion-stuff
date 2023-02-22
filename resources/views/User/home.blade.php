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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    @include('user.product')

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About TokoPashion</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Bagaimana kualitas produk dari TokoPasion?</h4>
                        <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing"
                                target="_parent"></a>TOKOPASHION hanya menyediakan produk dengan kualitas terjamin.
                            sudah banyak pembeli yang memberikan rating bagus. Sablon dan juga modelnya kece abis.
                            Pokoknya cocok dah sama kamuu.. :)<a rel="nofollow"
                                href="https://templatemo.com/contact"></a></p>
                        <ul class="featured-list">
                        </ul>
                        <a href="about.html" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/feature-image.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Tampil Keren &amp; Kece dari Produk <em>TokoPashion</em></h4>
                                <p>Kualitas sudah terjamin bagus, model keren dan kece. Tunggu apalagi mari kita
                                    shopping di TOKOPASHION</p>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="filled-button">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
    @include('layouts.script')
</body>

</html>
