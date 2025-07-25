@extends('template.template')

@section('pagecontent')

<style>
    .features {
      padding: 2rem 0;
      background: #f8f9fa;
    }
    .feature-icon {
      font-size: 2.5rem;
      color: #4caf50;
    }
    .card-title {
      margin-top: 0.5rem;
      margin-bottom: 0.5rem;
    }
  </style>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
             <!-- Slide 1: Disease Detection Focus -->
            <div class="carousel-item active">
                <img class="w-100 " src="{{asset('frontend/img/carousel-1.jpg')}}" alt="Crop Disease Detection">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown">Your AI plant care assistant</h1>
                                <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Detect Now</a>
                                <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">How It Works</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2: Healthy Crops Focus -->
            <div class="carousel-item">
                <img class="w-100" src="{{asset('frontend/img/carousel-2.jpg')}}" alt="Healthy Fruits and Vegetables">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown">Healthy Crops Start with Early Diagnosis</h1>
                                <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">See Benefits</a>
                                <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Explore Solutions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
        <!-- Carousel End -->


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
{{-- 
            <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
                <div class="col">
                    <div class="card border-0 shadow-sm">
                    <img src="{{asset('frontend/img/product-4.jpg')}}" class="card-img-top" alt="Garden Planner" />
                    <div class="card-body">
                        <h5 class="card-title">Garden Planning</h5>
                        <p class="card-text text-muted">
                        Design your garden with our interactive planner. Get recommendations for plant placement, companion planting, and seasonal rotations.
                        </p>
                        <a href="#" class="link-success fw-medium">Learn more →</a>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 shadow-sm">
                    <img src="{{asset('frontend/img/product-5.jpg')}}" class="card-img-top" alt="Community Forum" />
                    <div class="card-body">
                        <h5 class="card-title">Community Forum</h5>
                        <p class="card-text text-muted">
                        Connect with plant enthusiasts worldwide. Share your experiences, ask questions, and learn from experts in our active community.
                        </p>
                        <a href="#" class="link-success fw-medium">Join the community →</a>
                    </div>
                    </div>
                </div>
            </div> --}}
        </div>
        </section>


        {{-- Features End --}}


   <!-- Feature Start -->
<div class="container-fluid bg-light bg-icon py-6 wow " >
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Our Features</h1>
            <p>Empowering farmers with smart tools to detect and manage crop diseases early and efficiently using AI-driven technology.</p>
        </div>
        <div class="row g-4 wow" >
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{ asset('frontend/img/icon-1.png') }}" alt="">
                    <h4 class="mb-3">AI-Based Detection</h4>
                    <p class="mb-4">Utilizes deep learning to identify crop diseases accurately from leaf and plant images in real time.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{ asset('frontend/img/icon-2.png') }}" alt="">
                    <h4 class="mb-3">Multi-Crop Support</h4>
                    <p class="mb-4">Supports disease detection across various crops like tomato, potato, corn, rice, and more.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{ asset('frontend/img/icon-3.png') }}" alt="">
                    <h4 class="mb-3">Real-Time Recommendations</h4>
                    <p class="mb-4">Provides instant treatment suggestions and preventive actions based on disease type and severity.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


{{-- How AgroDetect works --}}
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


{{-- HOW AgroDetect WORKS --}}







    <!-- Product Start -->
    <div class="container-xxl py-5 bg-gray-100">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Disease Database</h1>
                        <p>Comprehensive database of crop diseases with high-resolution images,symptoms, and detailed treatment option</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Vegetable</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fresh</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/blog-1.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}"> Tomato Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-risk text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/blog-2.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>High Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/blog-3.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Low Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/blog-1.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/blog-2.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/blog-3.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/blog-1.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/blog-2.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('diseasedetail')}}">Browse More Disease</a>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-1.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-2.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-3.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-4.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-5.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-6.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-7.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-8.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Patoto Disease</a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, modi?</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('diseasedetail')}}">Browse More Products</a>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-1.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Fresh Tomato</a>
                                    <span class="text-primary me-1">$19.00</span>
                                    <span class="text-body text-decoration-line-through">$29.00</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-2.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Fresh Tomato</a>
                                    <span class="text-primary me-1">$19.00</span>
                                    <span class="text-body text-decoration-line-through">$29.00</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-3.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Fresh Tomato</a>
                                    <span class="text-primary me-1">$19.00</span>
                                    <span class="text-body text-decoration-line-through">$29.00</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-4.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Fresh Tomato</a>
                                    <span class="text-primary me-1">$19.00</span>
                                    <span class="text-body text-decoration-line-through">$29.00</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-5.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Fresh Tomato</a>
                                    <span class="text-primary me-1">$19.00</span>
                                    <span class="text-body text-decoration-line-through">$29.00</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-6.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Fresh Tomato</a>
                                    <span class="text-primary me-1">$19.00</span>
                                    <span class="text-body text-decoration-line-through">$29.00</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-7.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Fresh Tomato</a>
                                    <span class="text-primary me-1">$19.00</span>
                                    <span class="text-body text-decoration-line-through">$29.00</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('frontend/img/product-8.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="{{route('diseasedetail')}}">Fresh Tomato</a>
                                    <span class="text-primary me-1">$19.00</span>
                                    <span class="text-body text-decoration-line-through">$29.00</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="{{route('diseasedetail')}}"><i class="fa fa-shopping-bag text-primary me-2"></i>Medium Risk</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('diseasedetail')}}">Browse More Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


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


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Customer Review</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="{{asset('frontend/img/testimonial-2.jpg')}}" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="{{asset('frontend/img/testimonial-4.jpg')}}" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Latest Blog</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{asset('frontend/img/blog-1.jpg')}}" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{asset('frontend/img/blog-2.jpg')}}" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{asset('frontend/img/blog-3.jpg')}}" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    
@endsection