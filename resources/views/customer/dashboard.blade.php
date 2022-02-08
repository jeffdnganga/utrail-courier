@extends('layouts.frontend.index')

@section('title', 'HOME')

@section('content')


<!-- Code for my deliveries section begins here -->
<section class="my-deliveries">
    <div class="container py-5">
        <div class="section-heading text-center">
            <h2 class="hover-underline-animation fw-bold text-center mb-5" style="color: #3D5A80;"><span class="unique-heading-section">My</span> Deliveries</h2>
            <a href="#postDeliveryModal" class="post-delivery-btn float-end px-3" data-bs-toggle="modal">Post a Delivery</a>
        </div>

       @forelse ($deliveries as $delivery)
          <div class="card my-4">
            <div class="row g-0 main-row">
                <div class="col-sm-12 col-md-3">
                    <img src="{{ asset('frontend/assets/images/load-image1.jpg') }}" class="img-fluid" alt="Load image">
                </div>
                <div class="col-sm-12 col-md-9 pt-md-5 pt-sm-2 delivery-info-col">
                    <div class="row card-block delivery-information">
                        <div class="col-sm-12 col-md-4 ps-4 pt-2">
                            <h3>
                              @if ($delivery->status == 2)
                                  <strike> Cancelled <br> {{ Str::ucfirst($delivery->luggage_name) }}</strike> 
                              @else
                                  {{ Str::ucfirst($delivery->luggage_name) }}
                              @endif
                            </h3>
                        </div>
                        <div class="col-sm-12 col-md-4 ps-4 pt-2">
                            <p>Dimensions: {{ $delivery->dimenstions }}
                              <br>
                              Route: {{ $delivery->routes->name }}
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-4 pt-md-4 pt-sm-2 text-center">
                            <a class="btn" href="bids.php">View bids</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer w-100">
                @if ($delivery->status == 1)
                    <div class="row delivery-actions">
                    <div class="col">
                        <a href="#editDelivery-{{ $delivery->id }}" class="btn btn-success btn-sm" data-bs-toggle="modal"><i class="fas fa-pen pe-1"></i> Edit Delivery</a>
                        @include('customer.edit-delivery')
                    </div>
                    <div class="col">
                        <a href="#cancelDelivery-{{ $delivery->id }}" class="btn btn-warning btn-sm" data-bs-toggle="modal"><i class="fas fa-pen pe-1"></i> Cancel Delivery</a>
                        @include('customer.cancel-delivery')
                    </div>
                    <div class="col">
                         <a href="#deleteDelivery-{{ $delivery->id }}" class="btn btn-danger btn-sm" data-bs-toggle="modal"><i class="fas fa-pen pe-1"></i> Delete Delivery</a>
                         @include('customer.delete-delivery')
                    </div>
                </div>
                @else
                    <p class="text-center text-danger"><strong>Cancelled Post</strong></p>
                @endif
            </div>
        </div>
        @empty
          <div class="alert alert-warning">
            <h2>No post made. Click on the post delivery button to post a new one</h2>
          </div>
       @endforelse
        {{ $deliveries->links() }}
    </div>
</section>
<!-- Code for my deliveries section ends here -->


 <!-- Code for post a delivery modal begins here -->
          <div class="modal fade" id="postDeliveryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="section-heading text-center mt-4">
                  <h5 class="hover-underline-animation fw-bold" style="color: #3D5A80;"><span class="unique-heading-section">Post</span> a Delivery</h5>
                </div>
                <p class="text-center" style="color: #3D5A80;">Enter the details of your delivery here</p>
                <div class="modal-body">
                  <form action="{{ route('customer.deliveries.store') }}" method="POST">
                    @csrf
                    {{-- Service type and Load name--}}
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group mb-3">
                          <label for="load_name">Luggage Name</label>
                          <input type="text" name="load_name" id="load_name" class="form-control" placeholder="Luggage Name">
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-6">
                        <div class="mb-2">
                          <label for="delivery category">Delivery Category</label>
                          <select class="form-select" aria-label="Default select example" name="service">
                            <option selected disabled>Type of delivery</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                          </select>            
                        </div>
                      </div>
                    </div>
                    {{-- Service type ends--}}

                     {{-- Pick up location and date --}}
                         <div class="row mb-2">
                            <div class="col-sm-12 col-md-6">
                              <label for="date">Delivery Date</label>
                              <input type="date" name="date" class="form-control" placeholder="Select Delivery Date">
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <label for="period">Select Delivery Period</label>
                              <select class="form-select" aria-label="Default select example" name="period">
                                <option selected disabled>Delivery period</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>            
                            </div>
                          </div>
                     {{-- Pick up location and date ends --}}

                     {{-- Route --}}
                     <div class="form-group">
                       <label for="route">Select Route</label>
                       <select name="route" class="form-control">
                         <option selected disabled>-- Select Route --</option>
                         @foreach ($routes as $route)
                             <option value="{{ $route->id }}">{{ $route->name }}</option>
                         @endforeach
                       </select>
                     </div>

                     {{-- Pick up and drop off location  --}}
                    <div class="row mb-2">
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                          <label for="pick up location">Pick Up Location</label>
                          <input type="text" name="pick_location" class="form-control" placeholder="Exact Pick Location">
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                          <label for="pick up location">Drop off Location</label>
                          <input type="text" name="drop_location" class="form-control" placeholder="Exact Drop  location">
                        </div>           
                      </div>
                    </div>
                    {{-- Pick up and drop off location ends  --}}

                    <p class="fs-6" style="color: #3D5A80;">Enter the dimensions of your load here <br>(Rough estimates are allowed)</p>
                    <div class="row mb-2">
                      <div class="col">
                        <input type="number" name="length" id="length" placeholder="Length" class="form-control">
                      </div>
                      <div class="col">
                        <input type="number" name="width" id="width" placeholder="width" class="form-control">
                      </div>
                      <div class="col">
                          <input type="number" name="height" id="height" placeholder="height" class="form-control">         
                      </div>
                      <div class="col">
                      <select class="form-select" aria-label="Default select example" name="measurement">
                          <option selected>cm</option>
                          <option>m</option>
                      </select>            
                      </div>
                    </div>

                    {{-- optional Image --}}
                    <div class="mb-2">
                      <div class="form-group">
                          <label for="featured_image">Featured Image (optional)</label>
                          <input type="file" name="featured_image" class="form-control">
                        </div>
                    </div>

                    <div class="mb-2">
                      <label for="description">Special Description (optional)</label>
                      <textarea class="form-control" name="desc" id="moreDescription" placeholder="Enter any extra information here" rows="5"></textarea>                    
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class=" btn post-delivery-btn">Post Delivery</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- Code for post a delivery modal ends here -->

@endsection