<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eflyer Website</title>
     <!-- bootstrap css -->
     <link rel="stylesheet" type="text/css" href="{{asset("assets/css/bootstrap.min.css")}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset("assets/images/fevicon.png")}}" type="image/gif" />      
      <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/jquery.mCustomScrollbar.min.css")}}" />
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
       <!-- font awesome -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}">
      <link rel="stylesoeet" href="{{asset("assets/css/owl.theme.default.min.css")}}">
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen"
    />
</head>
<body>
    <!-- Add Header -->
     @include('website.includes.Header')

    <!-- Page Content -->
     @section('main-content')
     @show

     <!-- Add Footer -->
     @include('website.includes.Footer')

     <!-- Script Files -->
   <!-- Javascript files-->
   <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/js/popper.min.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-3.0.0.min.js")}}"></script>
    <script src="{{asset("assets/js/plugin.js")}}"></script>
    <!-- sidebar -->
    <script src="{{asset("assets/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
    <script src="{{asset("assets/js/custom.js")}}"></script>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>
    </body>
</html>