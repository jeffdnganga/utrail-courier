@extends('layouts.admin.index')

@section('title', 'Routes')

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
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#createRouteModal" data-bs-original-title="" title="">
                          <i class="fas fa-plus"></i> New Route
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
                            <th>SOURCE</th>
                            <th>DESTINATION</th>
                            <th>CREATED BY</th>
                            <th>EDIT</th>
                            {{-- <th>DELETE</th> --}}
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>SOURCE</th>
                            <th>DESTINATION</th>
                            <th>CREATED BY</th>
                            <th>EDIT</th>
                            {{-- <th>DELETE</th> --}}
                          </tr>
                        </tfoot>
                      <tbody>
                        @foreach ($routes as $key=>$route)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $route->source }}</td>
                              <td>{{ $route->destination }}</td>
                              <td>{{ $route->users->name }}</td>
                              <td>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#editRoute-{{ $route->id }}" data-bs-original-title="" title="">
                                  <i class="fas fa-edit"></i>
                                </button>
                                @include('admin.routes.edit')
                              </td>
                              {{-- <td>
                                <a href="{{ route('home') }}">Good</a>
                              </td> --}}
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


          <div class="modal fade" id="createRouteModal" tabindex="-1" aria-labelledby="createRouteModal" style="display: none;" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-primary">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Add a Route</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                  </div>
                  <form action="{{ route('admin.routes.store') }}" method="post">
                    @csrf
                     <div class="modal-body">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="source" class="form-label">Source</label>
                              <input type="text" name="source" class="form-control" placeholder="Nairobi" autofocus required>
                              @error('source'){{ $message }} @enderror
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="source" class="form-label">Destination</label>
                              <input type="text" name="destination" class="form-control" placeholder="Nakuru" required>
                              @error('destination'){{ $message }} @enderror
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                        <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create Route</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>


            @endsection