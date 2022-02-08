<section class="navigation">
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <a class="navbar-brand ms-2" href="#">
        <img src="{{ asset('frontend/assets/images/logo.jpg') }}" alt="" width="190" height="55">      
      </a>        
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item ms-lg-4">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="#">Our Services</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <!-- Navigation link that triggers post a delivery modal -->
          {{-- <li class="nav-item ms-lg-4">
            <a href="#postDeliveryModal" class="nav-link" data-bs-toggle="modal">Post a Delivery</a>
          </li> --}}
          <li class="nav-item dropdown ms-lg-4">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More <i class="fas fa-angle-down ms-1"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('customer.dashboard') }}">My Deliveries</a></li>
            <li><a class="dropdown-item" href="{{ route('customer.dashboard') }}">Past Deliveries</a></li>
            <li><a class="dropdown-item" href="#">Edit my Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>  
            </li>
          </ul>
        </li>
        </ul>
        <div class="user-image mx-lg-4">
            <img src="{{ asset('frontend/assets/images/user-image.jpg') }}" alt="User image">
        </div>
    </div>
  </nav>
</section>

