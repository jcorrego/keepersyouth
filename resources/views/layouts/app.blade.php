<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="/favicon.ico">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}fff</title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.min.css">
    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

    <div id="app" class="full-height container-fluid">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://cdn.rawgit.com/HubSpot/tether/v1.3.4/dist/js/tether.min.js"></script>
    <script src="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.iife.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
    <script>
        $('body').bootstrapMaterialDesign();
    </script>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
