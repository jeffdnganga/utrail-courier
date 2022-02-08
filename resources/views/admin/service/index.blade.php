@extends('layouts.admin.index')

@section('title', 'SERVICES')

@section('content')
 <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Key Table</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Extension Data Tables</li>
                    <li class="breadcrumb-item active">Key Table</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>

     <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Basic initialisation</h5>
                    <div class="row">
                      <div class="col-sm-10">
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione molestiae autem laudantium reprehenderit 
                      dolore sapiente porro debitis vitae itaque tempore ex fuga, nostrum repudiandae temporibus odio repellendus 
                      veritatis asperiores minus officiis quam? Delectus, animi autem, veritatis unde dignissimos at officiis sed 
                      maiores soluta architecto harum iste hic et quas consequuntur!</span>
                      </div>
                      <div class="col-sm-2">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#createServiceModal" data-bs-original-title="" title="">
                          <i class="fas fa-plus"></i> New Service
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="dt-ext table-responsive">
                      <table class="display" id="basic-key-table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>DELIVERY TYPE</th>
                            <th>OFFERED?</th>
                            <th>CREATED BY</th>
                            <th>CREATED AT</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>OFFERED?</th>
                            <th>CREATED BY</th>
                            <th>CREATED AT</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                          </tr>
                        </tfoot>
                      <tbody>
                        @foreach ($services as $key=>$service)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $service->name }}</td>
                              <td>
                                  @if ($service->status)
                                      <span class="badge badge-primary">Yes</span>
                                  @else
                                      <span class="badge badge-secondary">No</span>
                                  @endif
                              </td>
                              <td>{{ $service->users->name }}</td>
                              <td>{{ $service->created_at->toFormattedDateString() }}</td>
                              <td>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#editService-{{ $service->id }}" data-bs-original-title="" title="">
                                  <i class="fas fa-edit"></i>
                                </button>
                                @include('admin.service.edit')
                              </td>
                              {{-- <td>
                                <a href="{{ route('home') }}">Good</a>
                              </td> --}}
                              <td>
                              <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#deleteService-{{ $service->id }}" data-bs-original-title="" title="">
                                  <i class="fas fa-trash"></i>
                                </button>
                                @include('admin.service.delete')
                            </td>
                            </tr>                            
                        @endforeach
                      </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="modal fade" id="createServiceModal" tabindex="-1" aria-labelledby="createServiceModal" style="display: none;" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-primary">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Add a new Delivery Category</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                  </div>
                  <form action="{{ route('admin.services.store') }}" method="post">
                    @csrf
                     <div class="modal-body">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label for="name" class="form-label">Delivery Category Name</label>
                              <input type="text" name="name" class="form-control" placeholder="Furniture" autofocus required>
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


            @endsection