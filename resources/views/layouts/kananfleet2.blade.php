<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/freelancer2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/personalizado.css') }}">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700,900&display=swap" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    @include('menu.principal')

    @yield('content')

    @include('layout.footer')

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   @include('layout.contacto')

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js') }}"></script>

    <script>
        window.sr = ScrollReveal ();
    sr.reveal("#first" , {
      duration: 1000,
      origin: "bottom",
      distance: "100px"
    });
    window.sr = ScrollReveal ();
    sr.reveal("#carousel" , {
      duration: 1000,
      origin: "bottom",
      distance: "100px"
    });
    window.sr = ScrollReveal ();
    sr.reveal("#opiniones" , {
      duration: 1000,
      origin: "bottom",
      distance: "100px"
    });
    </script>

</body>

</html>
