<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{--  <script src="{{ asset('js/app.js') }}" defer></script>  --}}

    <!-- Fonts -->
    {{--  <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">  --}}

    <!-- Styles -->
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->


    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('assets/js/core/app.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/ripple.min.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body>

    <body class="login-container">

        <!-- Main navbar -->
        {{--  <div class="navbar navbar-inverse bg-indigo">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

                <ul class="nav navbar-nav pull-right visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                </ul>
            </div>

            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-cog3"></i>
                            <span class="visible-xs-inline-block position-right"> Options</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>  --}}
        <!-- /main navbar -->


        <!-- Page container -->
        @yield('content')
        <!-- /page container -->

    </body>
</body>

</html>
