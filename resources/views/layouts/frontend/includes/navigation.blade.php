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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
        </ul>
          <a class="btn client-login-btn mx-lg-4" href="{{ route('login') }}"> Login </a>
          <a class="btn transporter-login-btn me-2" href="{{ route('register') }}">Register</a>
    </div>
  </nav>
</section>
