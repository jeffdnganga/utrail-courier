

<div class="modal fade" id="deleteService-{{ $service->id }}" tabindex="-1" aria-labelledby="deleteService" style="display: none;" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-secondary">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Delete <strong>{{ $service->name }}</strong></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                  </div>
                  <form action="{{ route('admin.services.destroy', $service->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                     <div class="modal-body">
                        <p class="text-center lead">
                            Are you sure you want to delete <strong>{{ $service->name }}</strong> service Category?
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                        <button class="btn btn-secondary" type="submit" data-bs-original-title="" title="">Delete</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>