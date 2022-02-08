
  
    <div class="modal fade" id="cancelDelivery-{{ $delivery->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="section-heading text-center mt-4">
                  <h5 class="hover-underline-animation fw-bold" style="color: #3D5A80;"><span class="unique-heading-section">Cancel</span> a Delivery</h5>
                </div>
                <form action="{{ route('customer.cancel-delivery', $delivery->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        Are you sure you want ot cancel <strong>{{ $delivery->luggage_name }}</strong> delivery
                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-secondary" type="submit" data-bs-original-title="" title="">Cancel Delivery</button>
                    </div>
                </form>
              </div>
            </div>
          </div>