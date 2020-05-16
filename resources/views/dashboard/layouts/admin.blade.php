<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') | {{ config('app.name', 'Laravel') }}</title>


    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="~/favicon.ico">

    @yield('headIncludes')
</head>

<body class="hold-transition sidebar-mini">
    <div id="app" class="wrapper">


        @include('dashboard.includes.navbar_left')

        <div class="content-wrapper">
            @yield('content')
        </div>

    </div>
    @include('dashboard.includes.footer')





<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Moment -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
{{--<script src="{{asset('js/AdminLTE.js')}}"></script>--}}
<script src="{{asset('js/app.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    function confirmDelete(id) {
        $('#idToBeDeleted').val(id);
        $('#modal-confirm-delete').modal();
    };


    function deleteItem(){
        document.getElementById('delete-form-' + $('#idToBeDeleted').val()).submit();
    }
</script>

@yield('footerIncludes')

</body>
</html>





