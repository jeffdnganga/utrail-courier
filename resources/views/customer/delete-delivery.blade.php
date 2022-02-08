
  
    <div class="modal fade" id="deleteDelivery-{{ $delivery->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="section-heading text-center mt-4">
                  <h5 class="hover-underline-animation fw-bold" style="color: #3D5A80;"><span class="unique-heading-section">Delete</span> a Delivery</h5>
                </div>
                <form action="{{ route('customer.deliveries.destroy', $delivery->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Are you sure you want ot delete <strong>{{ $delivery->luggage_name }}</strong> delivery
                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-secondary" type="submit" data-bs-original-title="" title="">Delete Delivery</button>
                    </div>
                </form>
              </div>
            </div>
          </div>