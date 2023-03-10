<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="{{asset ('plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{asset ('plugins/notification/snackbar/snackbar.min.js') }}"></script>
    <script src="{{asset ('plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{asset ('plugins/currency/dist/currency.min.js') }}"></script>

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="{{ asset('assets/js/dashboard/dash_1.js') }}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script>
        function noty(msg,option = 1) {
            Snackbar.show({
                text: msg.toUpperCase(),
                actionText: 'CERRAR',
                actionTextColor:'#001529',
                backgroundColor: option == 1 ? '#3b3f5c' :'#e7515a',
                pos:'top-right'
            })
        }
    </script> 
    @livewireScripts
<!-- END GLOBAL MANDATORY SCRIPTS -->
