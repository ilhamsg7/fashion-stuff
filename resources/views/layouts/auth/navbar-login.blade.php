 <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>TOKO <em>PASHION</em></h2>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('all-product') }}">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>

                        <li class="nav-item">
                            @if (Route::has('login'))
                                @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('showcart') }}">
                                    <i class="fas fa-shopping-cart"></i>
                                    Cart[{{ $count }}]</a>
                            </li>
                            <x-app-layout>

                            </x-app-layout>
                        @else
                            <li class="nav-item active"><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                        @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
            </div>
        @endif

    </header>
