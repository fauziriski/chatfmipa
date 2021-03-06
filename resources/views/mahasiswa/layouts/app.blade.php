
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('mahasiswa/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('mahasiswa/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    {{-- <link href="{{ asset('mahasiswa/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @section('sidebar')
            @include('mahasiswa.layouts.sidebar')
        @show

        @section('header')
            @include('mahasiswa.layouts.header')
        @show


        @yield('content')
        @include('sweetalert::alert')

        @section('footer')
            @include('mahasiswa.layouts.footer')
        @show

        


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('mahasiswa/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('mahasiswa/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('mahasiswa/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('mahasiswa/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    {{-- <script src="{{ asset('mahasiswa/vendor/chart.js/Chart.min.js') }}"></script> --}}

    <!-- Page level custom scripts -->
    {{-- <script src="{{ asset('mahasiswa/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('mahasiswa/js/demo/chart-pie-demo.js') }}"></script> --}}
    
        <!-- Page level plugins -->
    {{-- <script src="{{ asset('mahasiswa/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('mahasiswa/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script> --}}

    <!-- Page level custom scripts -->
    <script src="{{ asset('mahasiswa/js/demo/datatables-demo.js') }}"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>

    






</body>

</html>