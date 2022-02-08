    
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>


  {{-- Toastr --}}
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
         <script>
            @if($errors->any())
              @foreach($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error', {
                  closeButton:true,
                  progressBar:true,
                });
              @endforeach
            @endif
        </script>