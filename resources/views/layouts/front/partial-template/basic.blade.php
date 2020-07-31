<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Custom css -->
    @stack('css')
    <!-- Font awesome -->
    <link href={{asset("front_assets/css/font-awesome.css")}} rel="stylesheet">

    <!-- Bootstrap -->
    <link href={{asset("front_assets/css/bootstrap.css")}} rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href={{asset("front_assets/css/jquery.smartmenus.bootstrap.css")}} rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href={{asset("front_assets/css/jquery.simpleLens.css")}}>
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href={{asset("front_assets/css/slick.css")}}>
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href={{asset("front_assets/css/nouislider.css")}}>
    <!-- Theme color -->
    <link id="switcher" href={{asset("front_assets/css/theme-color/custom-theme.css")}} rel="stylesheet">
    <!-- <link id="switcher" href="front_assets/css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href={{asset("front_assets/css/sequence-theme.modern-slide-in.css")}} rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href={{asset("front_assets/css/style.css")}} rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    <livewire:styles />

</head>

<body class="@yield('body-class')">
    @yield('loader')
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    @yield('body')

    <!-- Livewire js -->
    <livewire:scripts />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src={{asset("front_assets/js/bootstrap.js")}}></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src={{asset("front_assets/js/jquery.smartmenus.js")}}></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src={{asset("front_assets/js/jquery.smartmenus.bootstrap.js")}}></script>
    <!-- To Slider JS -->
    <script src={{asset("front_assets/js/sequence.js")}}></script>
    <script src={{asset("front_assets/js/sequence-theme.modern-slide-in.js")}}></script>
    <!-- Product view slider -->
    <script type="text/javascript" src={{asset("front_assets/js/jquery.simpleGallery.js")}}></script>
    <script type="text/javascript" src={{asset("front_assets/js/jquery.simpleLens.js")}}></script>
    <!-- slick slider -->
    <script type="text/javascript" src={{asset("front_assets/js/slick.js")}}></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src={{asset("front_assets/js/nouislider.js")}}></script>
    <!-- Custom js -->
    <script src={{asset("front_assets/js/custom.js")}}></script>
    @stack('js')

</body>

</html>