<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('front.home')}}" class="nav-item nav-link">Home</a>
                <a href="{{route('front.about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('front.services')}}" class="nav-item nav-link">Services</a>
                <a href="{{route('front.packages')}}"class="nav-item nav-link">Packages</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href={{route('front.destination')}} class="dropdown-item">Destination</a>
                        <a href={{route('front.booking')}} class="dropdown-item">Booking</a>
                        <a href={{route('front.guides')}} class="dropdown-item">Travel Guides</a>
                        <a href={{route('front.testimonial')}} class="dropdown-item">Testimonial</a>
                        <a href={{route('front.page')}} class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href={{route('front.contact')}} class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            @stack('banner_page')
        </div>
    </div>
</div>
