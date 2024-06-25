
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('storage/back/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('storage/back/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('storage/back/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('storage/back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('storage/back/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Toaster & Sweetalert Style -->
    <script src="{{asset('public/backend/build/js/toastr.min.js')}}"></script>

    <!-- Vendors JS -->
    <script src="{{asset('storage/back/assets/vendor/libs/apex-charts/apexcharts.j')}}s"></script>

    <!-- Main JS -->
    <script src="{{asset('storage/back/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('storage/back/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
      @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('message') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
      @endif
    </script>
  </body>
</html>