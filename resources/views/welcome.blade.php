@extends('layouts.frontend.index')
@section('title', 'Home')


@section('content')
<!-- Carousel slider begins here -->
<section class="slider">
    <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/assets/images/home-slider-image1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Your convenience is our first priority</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/assets/images/home-slider-image2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Instant quotes on your choice of any date</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/assets/images/home-slider-image3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Save money moving anything anywhere</h3>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- Carousel slider ends here -->

<!-- Request an estimate section begins here -->
<section class="request-estimate">
    <div class="container py-5">
        <div class="section-heading text-center">
            <h2 class="hover-underline-animation fw-bold text-center" style="color: #3D5A80;"><span class="unique-heading-section">Request</span> an Estimate</h2>
        </div>
        <p class="text-center" style="color: #3D5A80;">Fill in this form if you'd like to know how much your delivery would cost</p>

        <!-- Request estimate form begins here -->
        <form class="estimate-form bg-light px-5 py-3" action="">
            <div class="mb-3">
                <label for="selectTypeOfLoad" class="form-label">Type of load:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>            
            </div>
            <div class="mb-3">
                <label for="selectDeliverFrom" class="form-label">Deliver from:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>            
            </div>
            <div class="mb-3">
                <label for="selectDeliverTo" class="form-label">Deliver to:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>            
            </div>
            <button type="submit" class="btn estimate-btn">Get estimate</button>
        </form>
        <!-- Request estimate form ends here -->
    </div>
</section>
<!-- Request an estimate section ends here -->

<!-- Our services section begins here -->
<section class="our-services">
    <div class="container py-4 px-lg-5">
        <div class="section-heading text-center">
            <h2 class="hover-underline-animation fw-bold text-center" style="color: #3D5A80;">Our <span class="unique-heading-section">Services</span></h2>
        </div>
        <div class="row text-center px-lg-5">
            <div class="col-sm-12 col-lg-4 ps-lg-5">
                <div class="service-item" style="background: linear-gradient(rgba(0, 0, 0, 0.473), rgba(0, 0, 0, 0.473)), url('assets/images/furniture.jpg'); background-size: 100% 100%;">
                    <div class="service-title">
                        <h3>Furniture Delivery</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="service-item" style="background: linear-gradient(rgba(0, 0, 0, 0.473), rgba(0, 0, 0, 0.473)), url('assets/images/large-items.jpg');   background-size: 100% 100%;">
                    <div class="service-title">
                        <h3>Large Items Delivery</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 pe-lg-5">
                <div class="service-item" style="background: linear-gradient(rgba(0, 0, 0, 0.473), rgba(0, 0, 0, 0.473)), url('assets/images/electric-appliances.png');   background-size: 100% 100%;">
                    <div class="service-title">
                        <h3>Electric Appliances Transport</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center px-lg-5">
            <div class="col-sm-12 col-lg-4 ps-lg-5">
                <div class="service-item" style="background: linear-gradient(rgba(0, 0, 0, 0.473), rgba(0, 0, 0, 0.473)), url('assets/images/car.jpg');   background-size: 100% 100%;">
                    <div class="service-title">
                        <h3>Car Transport</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="service-item" style="background: linear-gradient(rgba(0, 0, 0, 0.473), rgba(0, 0, 0, 0.473)), url('assets/images/parcel.jpg');   background-size: 100% 100%;">
                    <div class="service-title">
                        <h3>Parcels and Small Items Delivery</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 pe-lg-5">
                <div class="service-item" style="background: linear-gradient(rgba(0, 0, 0, 0.473), rgba(0, 0, 0, 0.473)), url('assets/images/motorbike.jpg');   background-size: 100% 100%;">
                    <div class="service-title">
                        <h3>Motorbike and Bicycles Transport</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our services section ends here -->

<!-- About Us section begins here -->
<section class="about-us">
    <div class="container py-4 mt-5">
        <div class="section-heading text-center">
            <h2 class="hover-underline-animation fw-bold text-center" style="color: #3D5A80;"><span class="unique-heading-section">About</span> Us</h2>
        </div>
 
        <!-- Code for navigation tabs in About Us section begins here -->
        <ul class="nav nav-tabs justify-content-center pt-3" id="aboutTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active mx-2 fs-4" id="our-mission-tab" data-bs-toggle="tab" data-bs-target="#ourMission" type="button" role="tab" aria-controls="ourMission" aria-selected="true">Our Mission</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link mx-2 fs-4" id="our-profile-tab" data-bs-toggle="tab" data-bs-target="#ourProfile" type="button" role="tab" aria-controls="ourProfile" aria-selected="false">Our Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link mx-2 fs-4" id="why-us-tab" data-bs-toggle="tab" data-bs-target="#whyUs" type="button" role="tab" aria-controls="whyUs" aria-selected="false">Why us?</button>
            </li>
        </ul>
        <div class="tab-content text-center py-4" id="aboutTabContent" style="max-width: 70%; margin: 0 auto;">
            <div class="tab-pane fade show active" id="ourMission" role="tabpanel" aria-labelledby="our-mission-tab">
                <p class="fs-5">We’re here to make moving anything easier, more affordable, and greener for everyone!</p>
            </div>
            <div class="tab-pane fade" id="ourProfile" role="tabpanel" aria-labelledby="our-profile-tab">
                <ul style="list-style: none;">
                    <li><p class="fs-5"><i class="fas fa-check-circle me-2"></i>Founded in 2021</p></li>
                    <li><p class="fs-5"><i class="fas fa-check-circle me-2"></i>100+ Delivery requests</p></li>
                    <li><p class="fs-5"><i class="fas fa-check-circle me-2"></i>50+ customers</p></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="whyUs" role="tabpanel" aria-labelledby="why-us-tab">
                <ul style="list-style: none;">
                    <li><p class="fs-5"><i class="fas fa-check-double me-2"></i>Save money moving anything anywhere</p></li>
                    <li><p class="fs-5"><i class="fas fa-check-double me-2"></i>Instant estimates on your choice of any date</p></li>
                    <li><p class="fs-5"><i class="fas fa-check-double me-2"></i>Here to talk 7 days a week</p></li>
                </ul>
            </div>
        </div>
        <!-- Code for navigation tabs in About Us section ends here -->
        <a class="btn read-more-btn" href="#">Read more</a>
    </div>
</section>
<!-- About Us section ends here -->

<!-- Testimonials section begins here -->
<section class="testimonials pt-4 mt-5">
    <div class="section-heading text-center">
        <h2 class="hover-underline-animation fw-bold text-center" style="color: #3D5A80;">Testimonials</h2>
    </div>
    <p class="text-center mb-2" style="color: #3D5A80;">Here are some of what our customers are saying...</p>
    <div class="container-fluid mt-4">
        <div class="row text-center">
            <div class="col-md-8 col-center m-auto">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Carousel -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="img-box mb-4"><img src="{{ asset('frontend/assets/images/customer1.jpg') }}" alt=""></div>
                            <p class="overview">Steven Kamau</p>
                            <h5 class="testimonial-title fw-bold">Great Service</h5>
                            <p class="testimonial fw-light">Great service On time and updated me continually prior to arrival Would recommend this to anyone</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box mb-4"><img src="{{ asset('frontend/assets/images/customer2.jpg') }}" alt=""></div>
                            <p class="overview">Susan Anyango</p>
                            <h5 class="testimonial-title fw-bold">Excellent Professionals</h5>
                            <p class="testimonial fw-light">Excellent professional company, care and consideration was taken top rate delivery driver.</p>
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>                    
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section ends here -->

@endsection