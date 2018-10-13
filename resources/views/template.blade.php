<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">


      {{-- <!-—Compiled and minified Jquery  --> --}}
      <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <title>Lestari Banyumas</title>
  </head>
  <body>

    <style media="screen">
        .pad{
          padding-left: 50px;
          padding-right: 50px;
        }


      </style>

  <header>
    @yield('header')
  </header>

  <body>
    @yield('isi')
  </body>

  <footer>
    @yield('footer')
  </footer>

  <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>


      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
   {{-- datablesyagja --}}
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 </body>
</html>
