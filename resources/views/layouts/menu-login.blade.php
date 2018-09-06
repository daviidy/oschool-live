<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title') | Whatprice</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="/formcreate/image/png" href="/formcreate/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/formcreate/css/util.css">
	<link rel="stylesheet" type="text/css" href="/formcreate/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	@if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif

  @yield('content')

  <!--===============================================================================================-->
  	<script src="/formcreate/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/formcreate/vendor/bootstrap/js/popper.js"></script>
  	<script src="/formcreate/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/formcreate/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/formcreate/vendor/tilt/tilt.jquery.min.js"></script>
  	<script >
  		$('.js-tilt').tilt({
  			scale: 1.1
  		})
  	</script>
  <!--===============================================================================================-->
  	<script src="/formcreate/js/main.js"></script>

  </body>
  </html>
