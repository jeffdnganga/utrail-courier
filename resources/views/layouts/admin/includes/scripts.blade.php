  <script src="{{ asset('admin/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin/js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('admin/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('admin/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('admin/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('admin/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('admin/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('admin/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('admin/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('admin/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('admin/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('admin/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('admin/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('admin/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('admin/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('admin/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ asset('admin/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('admin/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('admin/js/notify/index.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker/date-picker/datepicker.custom.js') }}"></script>

    <script src="{{ asset('admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/custom.js') }}"></script>
    <script src="{{ asset('admin/js/tooltip-init.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="{{ asset('admin/js/theme-customizer/customizer.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->


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


<script src="https://kit.fontawesome.com/c99e7cdcbd.js" crossorigin="anonymous"></script>