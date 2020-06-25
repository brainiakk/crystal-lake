

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.themefisher.com/dlab/light/home-create-event.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 12:55:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('/backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-datepicker.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('inc.admin.navbar')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        @if (Session::has('success') )
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ Session::get('success') }}</strong>
                </div>
                @elseif (Session::has('error') )
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ Session::get('error') }}</strong>
                </div>
                @endif
       @yield('content')
    </div>
        <!--**********************************
            Content body end
        ***********************************-->
        @include('inc.admin.footer')

        <!--removeIf(production)-->
        @include('inc.admin.rsidebar')
        <!--endRemoveIf(production)-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   @include('inc.admin.scripts')

</body>

<!-- Mirrored from demo.themefisher.com/dlab/light/home-create-event.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 12:55:43 GMT -->
</html>
