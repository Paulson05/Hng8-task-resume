<!-- End Footer Section -->
<!-- Placed JS at the end of the document so the pages load faster -->
<!-- jQuery latest version -->
<script src="js/vendor/jquery-3.1.1.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail js -->
<script src="js/ajax-mail.js"></script>
<!-- Main js -->
<script src="js/main.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

@if(Session::has('contact_added'))
    <script>
        toastr.success("{!! Session::get('contact_added') !!}");
    </script>
@endif
@if(Session::has('contact_added'))
    <script>
        swal("great job!", "{!! Session::get('contact_added') !!}");
    </script>
@endif
