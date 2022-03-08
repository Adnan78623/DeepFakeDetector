<body>

    <div id="page-container">

        <div id="content-wrap">

            <!-- Navbar START -->
            <nav class="navbar navbar-expand-sm fixed-top navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">DeepFake Detector</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class=" nav-link" href="{{ route('scanner') }}">Scanner</a>
                            </li>
                            <li class="nav-item">
                                <a class=" nav-link" href="https://github.com/Adnan78623/DeepFakeDetector">GitHub</a>
                            </li>
                            <li class="nav-item">
                                <a class=" nav-link" href="{{ route('contactus') }}">Contact Us</a>
                            </li>
                            @if (Route::has('login'))
                            <li class="nav-item">
                                @auth
                                <a class=" nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                @else
                                <a class=" nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                <a class=" nav-link" href="{{ route('register') }}">Register</a>
                                @endif
                                @endauth
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar END -->