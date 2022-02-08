  
  
  
  
    <div class="modal fade" id="editDelivery-{{ $delivery->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="section-heading text-center mt-4">
                  <h5 class="hover-underline-animation fw-bold" style="color: #3D5A80;"><span class="unique-heading-section">Post</span> a Delivery</h5>
                </div>
                <p class="text-center" style="color: #3D5A80;">Enter the details of your delivery here</p>
                <div class="modal-body">
                  <form action="{{ route('customer.deliveries.update', $delivery->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- Service type and Load name--}}
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group mb-3">
                          <label for="load_name">Luggage Name</label>
                          <input type="text" name="load_name" id="load_name" class="form-control" placeholder="Luggage Name" value="{{ $delivery->luggage_name }}">
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-6">
                        <div class="mb-2">
                          <label for="delivery category">Delivery Category</label>
                          <select class="form-select" aria-label="Default select example" name="service">
                            <option selected value="{{ $delivery->service_id }}">{{ $delivery->services->name }}</option>
                            <option disabled>______________________</option>
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
                              <input type="date" name="date" class="form-control" placeholder="Select Delivery Date" value="{{ $delivery->date }}">
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <label for="period">Select Delivery Period</label>
                              <select class="form-select" aria-label="Default select example" name="period">
                                <option selected value="{{ $delivery->period }}">{{ $delivery->period }}</option>
                                <option disabled>______________________</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                              </select>            
                            </div>
                          </div>
                     {{-- Pick up location and date ends --}}

                     {{-- Route --}}
                     <div class="form-group">
                       <label for="route">Select Route</label>
                       <select name="route" class="form-control">
                         <option selected value="{{ $delivery->route_id }}">{{ $delivery->routes->name }}</option>
                         <option disabled>______________________</option>
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
                          <input type="text" name="pick_location" class="form-control" placeholder="Exact Pick Location" value="{{ $delivery->pick_up_location }}">
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                          <label for="pick up location">Drop off Location</label>
                          <input type="text" name="drop_location" class="form-control" placeholder="Exact Drop  location" value="{{ $delivery->drop_off_location }}">
                        </div>           
                      </div>
                    </div>
                    <hr>
                    {{-- Pick up and drop off location ends  --}}

                    <p class="fs-6" style="color: #3D5A80;">Enter the dimensions of your load here <br>(Rough estimates are allowed)</p>
                    <p class="text-info"> Current Measurements {{ $delivery->dimenstions }}</p>
                    <div class="row mb-2">
                      <div class="col">
                        <input type="number" name="length" id="length" placeholder="Length" class="form-control" required>
                      </div>
                      <div class="col">
                        <input type="number" name="width" id="width" placeholder="width" class="form-control" required>
                      </div>
                      <div class="col">
                          <input type="number" name="height" id="height" placeholder="height" class="form-control" required>         
                      </div>
                      <div class="col">
                      <select class="form-select" aria-label="Default select example" name="measurement" required>
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
                      <textarea class="form-control" name="desc" id="moreDescription" placeholder="Enter any extra information here" rows="5">
                          {{ $delivery->desc }}
                      </textarea>                    
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class=" btn post-delivery-btn">Update Delivery</button>
                </div>
              </form>
              </div>
            </div>
          </div>