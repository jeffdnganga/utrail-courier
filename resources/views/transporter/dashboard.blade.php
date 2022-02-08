@extends('layouts.frontend.index')
@section('title', 'Home')


@section('content')
    
<!-- code for new deliveries section begins here -->
<div class="section-heading text-center">
    <h2 class="hover-underline-animation fw-bold text-center mb-3" style="color: #3D5A80;"><span class="unique-heading-section">New</span> Deliveries</h2>
</div>

<section class="new-deliveries" style="background: rgba(238, 108, 77, 0.3);">
    <div class="container py-4">
        <div class="filter-route mb-2" style="width: 340px; margin: 0 auto;">
            <select class="form-select" aria-label="Default select example">
            <option selected>Filter by route</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>            
        </div>

        <div class="row">

            @forelse ($deliveries as $key=>$delivery)
                <div class="col-sm-12 col-md-4 p-3 ">
                    <div class="card" style="box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.25);">
                        <img src="{{ asset('frontend/assets/images/load-image1.jpg') }}" style="height: 12rem; " class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5>{{ $delivery->luggage_name }}</h5>
                                </div>
                                <div class="col-3">
                                    <p class="text-secondary text-end" style="font-size: small;">100 bids</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 posted-by">
                                    <div class="client-image">
                                        @if ($delivery->users->profile_picture ==  "default.png")
                                            <img src="assets/images/user-image.jpg" alt="{{ $delivery->users->name }} ">
                                        @else
                                            <img src="assets/images/user-image.jpg" alt="{{ $delivery->users->name }} ">
                                        @endif
                                    </div>
                                    {{-- <div class="client-name">
                                        <p>{{ $delivery->users->name }}</p>
                                    </div> --}}
                                </div>
                                <div class="col-7 route-time text-end">
                                    <p><i class="fas fa-map-marked-alt pe-2"></i>{{ $delivery->routes->name }}</p>
                                    <p><i class="fas fa-hourglass-half pe-2"></i>{{ date('M d, Y', strtotime($delivery->date)) }}</p>
                                </div>
                            </div>
                            <h6 class="dimensions-weight-date mt-3">
                                Posted By: {{ $delivery->users->name }} <br> 
                                Dimensions: {{ $delivery->dimenstions }} <br> 
                                Pickup date: {{ date('M d, Y', strtotime($delivery->date)) }}
                            </h6>
                            <p class="more-info-peek">
                                @if ($delivery->desc == NULL)
                                    <span class="text-muted"><em>No special instruction</em></span>
                                @else
                                    <span>{{ Str::limit($delivery->desc, 70, '...') }}</span>
                                @endif
                            </p>
                            <a href="#makeBidModal-{{ $delivery->id }}" data-bs-toggle="modal" class="btn btn-success bid-btn d-block fw-bold">Make a bid</a>
                            @include('transporter.make-bid')
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-warning">
                    <h2>No Delivery Posted as at now. Kindly refresh to see new deliveries.</h2>
                </div>
            @endforelse
            
        </div>
    </div>
    {{ $deliveries->links() }}
</section>
<!-- code for new deliveries section ends here -->
@endsection
