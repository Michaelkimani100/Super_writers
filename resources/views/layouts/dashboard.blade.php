<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Mar 2018 19:28:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard</title>
 
  <!-- Page level plugin CSS-->

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
</head>
<body>

	@if(Request::is('dashboard'))
@include('inc.dashboardnav')
@endif
<div class="container">
	@yield('content')
    </div>
    </body>
</html>