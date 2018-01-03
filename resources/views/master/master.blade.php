<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>@yield('title')</title>

    @yield('head')
    <!-- Bootstrap Core CSS -->
    <link href="assets/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- Custom CSS -->
    <link href="wrapkit/css/style.css" rel="stylesheet">
    <link href="wrapkit/css/index-landingpage/landing-page.css" rel="stylesheet">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKZ_EO7i_GnSTbyGarNz8g1c6JqlXcho4&callback=initMap"
  type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
    @yield('content')
    <!-- All Jquery -->
    <!-- ============================================================== -->
    @yield('script')
    <script src="assets/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="assets/node_modules/popper/dist/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script src="wrapkit/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <script type="text/javascript">
        
        $('a').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 90
            }, 1000);
            event.preventDefault();
            // code 
            
        });
    </script>
</body>

</html>