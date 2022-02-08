

<!-- code for make a bid pop-up modal begins here -->
<div class="modal fade" id="makeBidModal-{{ $delivery->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="section-heading text-center mt-4">
                <h5 class="hover-underline-animation fw-bold" style="color: #3D5A80;">Make a <span class="unique-heading-section">Bid</span></h5>
            </div>
            <div class="modal-body">
                <p style="color: #293241;"> <i class="fas fa-map-marker-alt text-success"></i>Route: {{ $delivery->routes->name }}</p>
                <p style="color: #293241;"> <i class="fas fa-map-marker-alt text-success"></i> Exact Pick up location: {{ Str::ucfirst($delivery->pick_up_location) }}</p>
                <p style="color: #293241;"> <i class="fas fa-map-marker-alt text-danger"></i> Exact Drop off location: {{ Str::ucfirst($delivery->drop_off_location) }}</p>
                <p class="fw-bold h6" style="color: #3D5A80;"> Special Instructions</p>

                @if ($delivery->desc == NULL)
                    <span class="text-muted"><em>No Special Instruction included in this delivery</em></span>
                @else
                    {{ Str::limit($delivery->desc, 300, '...') }}
                @endif
                
                <div class="form-div">
                    <h5 class="fw-bold mb-3" style="color: #3D5A80;">Make a quick bid</h5>
                    <form action="{{ route('transporter.bids.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="delivery_id" id="id" value="{{ $delivery->id }}">
                        <div class="form-group">
                                <div class="input-group mb-3" style="display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-dollar-sign pe-2" style="color: #EE6C4D;" id="basic-addon1"></i>
                                    <input type="number" name="amount" class="form-control" placeholder="Bid amount" aria-label="Bid amount" aria-describedby="basic-addon1">
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label for="date" class="form-label my-3">Propose different Date</label>
                                <div class="input-group mb-3" style="display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-dollar-sign pe-2" style="color: #EE6C4D;" id="basic-addon1"></i>
                                    <input type="date" name="date" class="form-control"  aria-label="Bid amount" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label for="time" class="form-label my-3">Propose Pick up Time</label>
                                <div class="input-group mb-3" style="display: flex; justify-content: center; align-items: center;">
                                    <i class="far fa-clock pe-2" style="color: #EE6C4D;" id="basic-addon2"></i>
                                    <input type="time" name="time" id="time" class="form-control" required>       
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <i class="fas fa-comment pe-2" style="color: #EE6C4D;" id="basic-addon3"></i>
                            <textarea class="form-control" id="bidMessage" placeholder="Enter a special message" rows="6" name="desc"></textarea>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Submit bid</button>
            </div>
             </form>
        </div>
    </div>
</div>
<!-- code for make a bid pop up ends here -->