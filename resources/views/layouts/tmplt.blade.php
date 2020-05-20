<!DOCTYPE html>
<html>

 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>@yield('title-block')</title>

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/app.css">
 </head>

 <body>
    @include('inc.header')

    @yield('content')

    @include('inc.footer')
 
  <script src="js/bootstrap.min.js"></script>
 </body> 

 
</html>