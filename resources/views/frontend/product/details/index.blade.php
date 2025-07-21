@extends('template.template')
@section('pagecontent')

  <style>
        .disease-header {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }
        .nav-pills .nav-link.active {
            background-color: #28a745;
        }
        .nav-pills .nav-link {
            color: #28a745;
        }
        .section-card {
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 4px solid #28a745;
        }
        .symptom-img {
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
        }
        .solution-icon {
            font-size: 2rem;
            color: #28a745;
            margin-bottom: 15px;
        }
        .prevention-step {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        .step-number {
            background-color: #28a745;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
    </style>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Disease Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home<Products/a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


{{-- 
     <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">AgriDetect</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Diseases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Detection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Solutions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <!-- Disease Details Content -->
    <div class="container my-5">
        <!-- Disease Header -->
        <div class="disease-header">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <img src="{{asset('frontend/img/blog-2.jpg')}}" alt="Late Blight" class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                    <h1>Late Blight</h1>
                    <p class="text-muted">Scientific name: Phytophthora infestans</p>
                    <div class="badge bg-warning text-dark mb-2">Common in: Tomatoes, Potatoes</div>
                    <div class="badge bg-danger mb-2">Severity: High</div>
                    <p class="mt-2">Late blight is a devastating disease that can affect tomatoes and potatoes, causing significant crop losses if not managed properly.</p>
                </div>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <ul class="nav nav-pills mb-4" id="diseaseTabs" role="tablist" style="font-weight:bold">
            <li class="nav-item" role="preseclassntation">
                <button class="nav-link active" id="overview-tab" data-bs-toggle="pill" data-bs-target="#overview" type="button" style="font-weight:bold">Overview</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="causes-tab" data-bs-toggle="pill" data-bs-target="#causes" type="button" style="font-weight:bold">Causes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="symptoms-tab" data-bs-toggle="pill" data-bs-target="#symptoms" type="button" style="font-weight:bold">Symptoms</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="solutions-tab" data-bs-toggle="pill" data-bs-target="#solutions" type="button" style="font-weight:bold">Solutions</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="prevention-tab" data-bs-toggle="pill" data-bs-target="#prevention" type="button" style="font-weight:bold">Prevention</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="diseaseTabsContent">
            <!-- Overview Tab -->
            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                <div class="card section-card">
                    <div class="card-body">
                        <h3 class="card-title">About Late Blight</h3>
                        <p>Late blight is one of the most serious diseases of potato and tomato worldwide. It is caused by the oomycete pathogen Phytophthora infestans, which was responsible for the Irish potato famine in the 1840s.</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5><i class="fas fa-calendar-alt text-success me-2"></i>Seasonal Activity</h5>
                                <p>Late blight thrives in cool, wet weather. Ideal conditions for disease development are temperatures between 60-80°F (15-27°C) with high humidity or rain.</p>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-clock text-success me-2"></i>Disease Cycle</h5>
                                <p>The disease spreads rapidly through wind-borne spores. Under favorable conditions, the entire plant can be destroyed within a week of the first symptoms appearing.</p>
                            </div>
                        </div>
                        
                        <div class="alert alert-warning mt-4">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Note:</strong> Late blight can completely destroy a crop if left untreated. Early detection and management are crucial.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Causes Tab -->
            <div class="tab-pane fade" id="causes" role="tabpanel">
                <div class="card section-card">
                    <div class="card-body">
                        <h3 class="card-title">Causes of Late Blight</h3>
                        <p>Late blight is caused by several factors working together:</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <div class="me-3 text-success">
                                        <i class="fas fa-bug fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5>Pathogen</h5>
                                        <p>The oomycete Phytophthora infestans is the primary causal agent. It's not a true fungus but behaves similarly.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <div class="me-3 text-success">
                                        <i class="fas fa-cloud-rain fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5>Environmental Conditions</h5>
                                        <p>Cool, moist weather with temperatures between 60-80°F (15-27°C) and relative humidity above 90%.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <div class="me-3 text-success">
                                        <i class="fas fa-seedling fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5>Infected Plant Material</h5>
                                        <p>Using infected seed potatoes or tomato transplants introduces the pathogen to new areas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <div class="me-3 text-success">
                                        <i class="fas fa-wind fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5>Wind Dispersal</h5>
                                        <p>Spores can travel long distances by wind, spreading the disease to new locations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Symptoms Tab -->
            <div class="tab-pane fade" id="symptoms" role="tabpanel">
                <div class="card section-card">
                    <div class="card-body">
                        <h3 class="card-title">Symptoms of Late Blight</h3>
                        <p>Late blight symptoms can appear on leaves, stems, and fruits. Here are the key symptoms to look for:</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="https://via.placeholder.com/300x200?text=Leaf+Lesions" class="card-img-top symptom-img" alt="Leaf Lesions">
                                    <div class="card-body">
                                        <h5 class="card-title">Leaf Lesions</h5>
                                        <p class="card-text">Initially small, pale to dark green water-soaked spots that rapidly enlarge to form purplish-black lesions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="https://via.placeholder.com/300x200?text=White+Mold" class="card-img-top symptom-img" alt="White Mold">
                                    <div class="card-body">
                                        <h5 class="card-title">White Mold</h5>
                                        <p class="card-text">In humid conditions, a white fuzzy mold appears on the underside of leaves at the edges of lesions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="https://via.placeholder.com/300x200?text=Stem+Lesions" class="card-img-top symptom-img" alt="Stem Lesions">
                                    <div class="card-body">
                                        <h5 class="card-title">Stem Lesions</h5>
                                        <p class="card-text">Dark brown to black lesions on stems and petioles that may girdle and kill the stem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="https://via.placeholder.com/300x200?text=Fruit+Symptoms" class="card-img-top symptom-img" alt="Fruit Symptoms">
                                    <div class="card-body">
                                        <h5 class="card-title">Fruit Symptoms</h5>
                                        <p class="card-text">Firm, brown to black lesions on tomato fruits that may become leathery and secondary rot may follow.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="https://via.placeholder.com/300x200?text=Tuber+Symptoms" class="card-img-top symptom-img" alt="Tuber Symptoms">
                                    <div class="card-body">
                                        <h5 class="card-title">Tuber Symptoms (Potatoes)</h5>
                                        <p class="card-text">Irregular, slightly depressed brown to purplish areas on the skin that extend into the flesh as a reddish-brown dry rot.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="https://via.placeholder.com/300x200?text=Rapid+Wilting" class="card-img-top symptom-img" alt="Rapid Wilting">
                                    <div class="card-body">
                                        <h5 class="card-title">Rapid Wilting</h5>
                                        <p class="card-text">Entire plants may quickly collapse and die when conditions are favorable for disease development.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solutions Tab -->
            <div class="tab-pane fade" id="solutions" role="tabpanel">
                <div class="card section-card">
                    <div class="card-body">
                        <h3 class="card-title">Solutions for Late Blight</h3>
                        <p>Managing late blight requires an integrated approach combining cultural practices and chemical controls.</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-4 text-center mb-4">
                                <div class="solution-icon">
                                    <i class="fas fa-spray-can"></i>
                                </div>
                                <h4>Fungicides</h4>
                                <p>Apply protectant fungicides like chlorothalonil or copper-based products before infection occurs. Systemic fungicides like mefenoxam may be used after infection.</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <div class="solution-icon">
                                    <i class="fas fa-trash-alt"></i>
                                </div>
                                <h4>Remove Infected Plants</h4>
                                <p>Immediately remove and destroy infected plants to reduce spore production. Do not compost infected material.</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <div class="solution-icon">
                                    <i class="fas fa-tint-slash"></i>
                                </div>
                                <h4>Reduce Moisture</h4>
                                <p>Improve air circulation and avoid overhead irrigation to reduce leaf wetness duration.</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <div class="solution-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <h4>Resistant Varieties</h4>
                                <p>Plant late blight-resistant varieties when available, though resistance may not be complete.</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <div class="solution-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <h4>Early Detection</h4>
                                <p>Monitor plants regularly and treat at first sign of disease. Early action is critical.</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <div class="solution-icon">
                                    <i class="fas fa-thermometer-half"></i>
                                </div>
                                <h4>Heat Treatment</h4>
                                <p>For potato tubers, curing at high temperatures (50-54°F) for 10-14 days can help prevent storage rot.</p>
                            </div>
                        </div>
                        
                        <div class="alert alert-info mt-4">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Important:</strong> Always follow label instructions when using fungicides and rotate between different chemical classes to prevent resistance development.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prevention Tab -->
            <div class="tab-pane fade" id="prevention" role="tabpanel">
                <div class="card section-card">
                    <div class="card-body">
                        <h3 class="card-title">Preventive Measures</h3>
                        <p>Preventing late blight is more effective than trying to control an existing outbreak. Follow these preventive measures:</p>
                        
                        <div class="mt-4">
                            <div class="prevention-step">
                                <div class="step-number">1</div>
                                <div>
                                    <h5>Use Certified Disease-Free Seed</h5>
                                    <p>Always plant certified disease-free seed potatoes and tomato transplants from reputable sources.</p>
                                </div>
                            </div>
                            
                            <div class="prevention-step">
                                <div class="step-number">2</div>
                                <div>
                                    <h5>Crop Rotation</h5>
                                    <p>Practice 3-4 year rotations with non-host crops to reduce pathogen survival in soil.</p>
                                </div>
                            </div>
                            
                            <div class="prevention-step">
                                <div class="step-number">3</div>
                                <div>
                                    <h5>Proper Spacing</h5>
                                    <p>Space plants adequately to promote air circulation and faster drying of foliage.</p>
                                </div>
                            </div>
                            
                            <div class="prevention-step">
                                <div class="step-number">4</div>
                                <div>
                                    <h5>Sanitation</h5>
                                    <p>Remove and destroy all volunteer potato and tomato plants and cull piles that can serve as sources of inoculum.</p>
                                </div>
                            </div>
                            
                            <div class="prevention-step">
                                <div class="step-number">5</div>
                                <div>
                                    <h5>Monitor Weather</h5>
                                    <p>Watch for weather conditions favorable to late blight (cool, wet weather) and be prepared to apply protectant fungicides.</p>
                                </div>
                            </div>
                            
                            <div class="prevention-step">
                                <div class="step-number">6</div>
                                <div>
                                    <h5>Early Planting</h5>
                                    <p>Plant early to avoid periods of favorable disease weather during critical growth stages.</p>
                                </div>
                            </div>
                            
                            <div class="prevention-step">
                                <div class="step-number">7</div>
                                <div>
                                    <h5>Community Action</h5>
                                    <p>Work with neighboring growers to manage the disease regionally, as spores can travel long distances.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-success mt-4">
                            <i class="fas fa-lightbulb me-2"></i>
                            <strong>Tip:</strong> Consider using a disease forecasting system like Blightcast or USABlight to time fungicide applications most effectively.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
  
@endsection