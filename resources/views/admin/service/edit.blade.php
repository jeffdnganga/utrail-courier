

<div class="modal fade" id="editService-{{ $service->id }}" tabindex="-1" aria-labelledby="editService" style="display: none;" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-primary">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Edit <strong>{{ $service->name }}</strong> Category</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                  </div>
                  <form action="{{ route('admin.services.update', $service->id) }}" method="post">
                    @csrf
                    @method('PUT')
                     <div class="modal-body">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label for="name" class="form-label">Delivery Category Name</label>
                              <input type="text" name="name" class="form-control" placeholder="Furniture" autofocus required value="{{ $service->name }}">
                              @error('name'){{ $message }} @enderror
                            </div>
                          </div>
                          {{-- <div class="col-lg-6">
                            <div class="form-group">
                              <label for="source" class="form-label">Destination</label>
                              <input type="file" name="featured_image" class="form-control" required>
                              @error('featured_image'){{ $message }} @enderror
                            </div>
                          </div> --}}
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                        <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Upload Service</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>