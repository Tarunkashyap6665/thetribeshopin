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
     <!-- Main style sheet -->
     {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
     <link rel="stylesheet" href="{{asset('front_assets/css/owl.carousel.css')}}" type="text/css">
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

          <script type="text/javascript" src="http://cdn.howcode.org/content/static/javascript/jquery.min.js"></script>
		<script src="http://cdn.howcode.org/content/static/javascript/jquery.cookie.js"></script>	
		<style type="text/css">
		.goog-te-banner-frame.skiptranslate{display:none!important;}
		body{top:0px!important;}
		</style>
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
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}
        <script src="{{asset('front_assets/js/owl.carousel.min.js')}}"></script> 
    <script>
         
        $('.welcome-carousel').owlCarousel({
    loop: true,
    margin:0,
    nav: true,
    dots:true,
    items: 1,
    navText: ['<button class="btn btn-primary btn-lg pl-4 pr-4 text-white">Prev</button>', '<button class="btn btn-lg btn-primary pl-4 pr-4 text-white">Next</button>'],
    smartSpeed: 1000,
    autoplayHoverPause: true,
    mouseDrag: false,
    autoplay: false,
 
  });
 
setTimeout(function(){
if(localStorage.getItem('popWelc')!='shown'){
  $('#activate-welcome').click();
    localStorage.setItem('popWelc','shown');
}
},1000);
</script>  

</body>

</html>