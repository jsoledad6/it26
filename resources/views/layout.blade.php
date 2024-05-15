<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="x-icon" href=".../images/Logo_Blue.png">
    
    <style>
        .btn-color {
            background-color: #3cb4fc;
            color: white;
        }
        .btn-outline {
            background-color: white;
            color: #3cb4fc;
        }
        .btn-outline-primary {
            color: #3cb4fc;
            border-color: #3cb4fc;
        }
    </style>

  </head>
  <body>
    @include('include.navbar')
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>