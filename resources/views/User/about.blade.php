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
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>about us</h4>
                        <h2>toko pashion</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Background</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/feature-image.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Siapa kita & Apa yang kita lakukan?</h4>
                        <p>Toko Pashion merupakan salah satu toko yang bergerak di bidang fashion Pria dan Wanita. Toko
                            Pashion menjual berbagai barang fashion yang sedang trend dan high quality. Fashion secara
                            khusus berarti gaya dalam berpakaian yang di gunakan sehari-hari oleh seseorang, mau itu di
                            dalam kehidupan kesehariannya atau ketika orang tersebut menghadiri acara tertentu yang
                            bertujuan menunjang penampilannya. </p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Team Members</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <div class="thumb-container">
                            <img src="assets/images/pp.jpg" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Ibnu Rizal </h4>
                            <span>CO-Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <div class="thumb-container">
                            <img src="assets/images/rk.png" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Hafiz Raka</h4>
                            <span>Product Expert</span>
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
