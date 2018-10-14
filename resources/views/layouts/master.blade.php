<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Stlylesheets added here -->
    <link rel="stylesheet" type="text/css" media="screen" href=" {{ URL::to('src/css/bootstrap.css') }} " />
    <link rel="stylesheet" type="text/css" media="screen" href=" {{ URL::to('src/css/font-awesome.min.css') }} " />
    @yield('styles')

</head>
<body>

    @yield('header')

    @yield('info-header')

    @yield('content')

    <!-- Javascrips files added here -->
    @yield('javascript')
    <script src="{{URL::to('src/js/jquery.min.js')}}"></script>
    <script src="{{URL::to('src/js/popper.min.js')}}"></script>
    <script src="{{URL::to('src/js/bootstrap.min.js')}}"></script>

</body>
</html>