

<div class="modal fade" id="editRoute-{{ $route->id }}" tabindex="-1" aria-labelledby="createRouteModal" style="display: none;" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-primary">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Edit <strong>{{ $route->name }}</strong> Details</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                  </div>
                  <form action="{{ route('admin.routes.update', $route->id) }}" method="post">
                    @csrf
                    @method('PUT')
                     <div class="modal-body">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="source" class="form-label">Source</label>
                              <input type="text" name="source" class="form-control" placeholder="Nairobi" autofocus required value="{{ $route->source }}">
                              @error('source'){{ $message }} @enderror
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="source" class="form-label">Destination</label>
                              <input type="text" name="destination" class="form-control" placeholder="Nakuru" required value="{{ $route->destination }}">
                              @error('destination'){{ $message }} @enderror
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                        <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Update Route</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>