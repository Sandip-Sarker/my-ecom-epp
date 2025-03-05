<!-- JQUERY JS -->
<script src="{{asset('/')}}backend/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('/')}}backend/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{asset('/')}}backend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="{{asset('/')}}backend/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('/')}}backend/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}backend/assets/plugins/p-scroll/pscroll.js"></script>

<!-- STICKY JS -->
<script src="{{asset('/')}}backend/assets/js/sticky.js"></script>


<!-- APEXCHART JS -->
<script src="{{asset('/')}}backend/assets/js/apexcharts.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{asset('/')}}backend/assets/plugins/select2/select2.full.min.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{asset('/')}}backend/assets/plugins/circle-progress/circle-progress.min.js"></script>

<!-- INTERNAL DATA-TABLES JS-->
<script src="{{asset('/')}}backend/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}backend/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{asset('/')}}backend/assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- INDEX JS -->
<script src="{{asset('/')}}backend/assets/js/index1.js"></script>
<script src="{{asset('/')}}backend/assets/js/index.js"></script>

<!-- Reply JS-->
<script src="{{asset('/')}}backend/assets/js/reply.js"></script>


<!-- COLOR THEME JS -->
<script src="{{asset('/')}}backend/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{asset('/')}}backend/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="{{asset('/')}}backend/assets/switcher/js/switcher.js"></script>

<!-- Toastr JS -->
<script src="{{asset('/')}}backend/assets/js/toastr.min.js"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };


    @if(session('success'))
    toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
    toastr.error("{{ session('error') }}");
    @endif

    @if(session('warning'))
    toastr.warning("{{ session('warning') }}");
    @endif

    @if(session('info'))
    toastr.info("{{ session('info') }}");
    @endif
</script>
