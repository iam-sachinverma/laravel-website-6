<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="images/icons/icon-48x48.png" />

	<title>MS Service Center</title>

	<link href="{{ url('css/admin_css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

  <div class="wrapper"> 
    
    @include('layouts.admin_layout.admin_sidebar')

    <div class="main">
    
      @include('layouts.admin_layout.admin_header')
      
      @yield('content')
      
      @include('layouts.admin_layout.admin_footer')  

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ url('js/admin_js/app.js') }}"></script>
  <script src="{{ url('js/admin_js/admin_script.js') }}"></script>

</body>

</html>