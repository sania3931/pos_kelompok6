<footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
    </div>
  </footer>
  <!-- partial -->
</div>

<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
<script src="{{asset('admin/vendors/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/js/dataTables.bootstrap4.min.js')}}"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> --}}

<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<!-- Versi dari CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('admin/assets/js/shared/off-canvas.js')}}"></script>
<script src="{{ asset('admin/assets/js/shared/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('admin/assets/js/demo_1/dashboard.js')}}"></script>
<!-- End custom js for this page-->
<script src="{{ asset('admin/assets/js/shared/jquery.cookie.js')}}" type="text/javascript"></script>
<script src="{{ asset('plugins/js/jquery.form-validator.min.js') }}"></script>
<script src="{{ asset('plugins/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugins/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript"></script>
<script>
    $(document).ready(function(){
        var table = new DataTable('#tabel-data');
    });
</script>
@yield('script')
