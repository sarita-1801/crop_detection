@extends('template.template')

@section('pagecontent')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
           <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="{{ asset('frontend/img/image.png') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-5 mb-4">AI-Powered Crop Disease Detection</h1>
                        <p class="mb-4">
                            Our intelligent crop disease detection system leverages AI and image recognition technology to detect plant diseases early and accurately. By identifying symptoms from leaves and stems, farmers can take timely action to protect their crops and reduce losses.
                        </p>
                        <p><i class="fa fa-check text-primary me-3"></i>Real-time disease diagnosis using AI models</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Supports multiple crops including fruits & vegetables</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Helps farmers improve yield and crop health</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- About End -->


    <!-- Firm Visit Start -->
    {{-- <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Visit Our Firm</h1>
                    <p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Visit Now</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Firm Visit End -->


    {{-- Features start --}}
    <section class="features  " >
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="text-center fw-bold mb-3">Powerful Features for Plant Lovers</h2>
            <p class="text-center text-muted mb-5">
            Our AI-powered platform provides everything you need to identify, monitor, and care for your plants.
            </p>

            <div class="row row-cols-1 row-cols-md-3 g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                <img src="{{asset('frontend/img/blog-1.jpg')}}" class="card-img-top" alt="Plant Identification" />
                <div class="card-body text-center">
                    <i class="feature-icon bi bi-flower1"></i>
                    <h5 class="card-title">Plant Identification</h5>
                    <p class="card-text text-muted">
                    Instantly identify over 10,000 plant species with just a photo. Our AI provides accurate results within seconds.
                    </p>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                <img src="{{asset('frontend/img/blog-2.jpg')}}" class="card-img-top" alt="Health Diagnosis" />
                <div class="card-body text-center">
                    <i class="feature-icon bi bi-heart"></i>
                    <h5 class="card-title">Health Diagnosis</h5>
                    <p class="card-text text-muted">
                    Detect diseases, pests, and nutrient deficiencies early. Get detailed analysis of your plant’s health condition.
                    </p>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                <img src="{{asset('frontend/img/blog-3.jpg')}}" class="card-img-top" alt="Care Recommendations" />
                <div class="card-body text-center">
                    <i class="feature-icon bi bi-calendar-check"></i>
                    <h5 class="card-title">Care Recommendations</h5>
                    <p class="card-text text-muted">
                    Receive personalized tips, watering schedules, and light requirements tailored to each of your plants.
                    </p>
                </div>
                </div>
            </div>
        </div>
        </div> 
    </section>


    {{-- How planttix works --}}
<div class="container-fluid bg-light bg-icon py-6">

 <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">How AgroDetect Works</h1>
            <p>Empowering farmers with smart tools to detect and manage crop diseases early and efficiently using AI-driven technology.</p>
        </div>

<div class="row row-cols-1 row-cols-md-4 g-4 mx-auto" style="max-width: 90%">

   
  
  <!-- Step 1: Upload Photo -->
  <div class="col">
    <div class="card h-100 border-0 shadow-sm">
      <img src="{{ asset('frontend/img/image.png') }}" class="card-img-top" alt="Upload Photo">
      <div class="card-body text-center">
        <span class="badge bg-success mb-2">1</span>
        <h5 class="card-title">Upload Photo</h5>
        <p class="card-text text-muted">
          Take a clear photo of your plant or its specific part (leaf, flower, stem) that you want to identify or diagnose.
        </p>
      </div>
    </div>
  </div>

  <!-- Step 2: AI Analysis -->
  <div class="col">
    <div class="card h-100 border-0 shadow-sm">
      <img src="{{ asset('frontend/img/image.png') }}" class="card-img-top" alt="AI Analysis">
      <div class="card-body text-center">
        <span class="badge bg-success mb-2">2</span>
        <h5 class="card-title">AI Analysis</h5>
        <p class="card-text text-muted">
          Our advanced AI processes the image, comparing it with our database of over 10,000 plant species and common plant conditions.
        </p>
      </div>
    </div>
  </div>

  <!-- Step 3: Get Results -->
  <div class="col">
    <div class="card h-100 border-0 shadow-sm">
      <img src="{{ asset('frontend/img/image.png') }}" class="card-img-top" alt="Get Results">
      <div class="card-body text-center">
        <span class="badge bg-success mb-2">3</span>
        <h5 class="card-title">Get Results</h5>
        <p class="card-text text-muted">
          Receive accurate identification or diagnosis within seconds, including the plant’s name, species, and any detected health issues.
        </p>
      </div>
    </div>
  </div>

  <!-- Step 4: View Recommendations -->
  <div class="col">
    <div class="card h-100 border-0 shadow-sm">
      <img src="{{ asset('frontend/img/image.png') }}" class="card-img-top" alt="View Recommendations">
      <div class="card-body text-center">
        <span class="badge bg-success mb-2">4</span>
        <h5 class="card-title">View Recommendations</h5>
        <p class="card-text text-muted">
          Access detailed care instructions, treatment options for diseases, and personalized recommendations for optimal plant health.
        </p>
      </div>
    </div>
  </div>

</div>
</div>


{{-- HOW LANTIX WORKS --}}


    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Services</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3">Natural Process</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{asset('frontend/img/icon-2.png')}}" alt="">
                        <h4 class="mb-3">Organic Products</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{asset('frontend/img/icon-3.png')}}" alt="">
                        <h4 class="mb-3">Biologically Safe</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


@endsection