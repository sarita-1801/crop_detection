<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>Pokhara-11,Ranipauwa</small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>shilabushal@gmail.com|sthsarita18@gmail.com</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <a class="text-body ms-3" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a class="text-body ms-3" href="https://x.com/"><i class="fab fa-twitter"></i></a>
            <a class="text-body ms-3" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
            <a class="text-body ms-3" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">Agro<span class="text-secondary">Detect</span></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('index')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('aboutus')}}" class="nav-item nav-link">About Us</a>
                <a href="{{route('product')}}" class="nav-item nav-link">Diseases</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('blog')}}" class="dropdown-item">Latest Blog</a>
                        <a href="{{route('testimonials')}}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact Us</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-search text-body"></small>
                </a>
                <div class="dropdown ms-3">
                    <a href="#" class="btn-sm-square bg-white rounded-circle dropdown-toggle" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        @auth
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        @else
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->