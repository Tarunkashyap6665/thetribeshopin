<!-- Start header section -->
@inject('imageIntervention', 'Intervention\Image\ImageManagerStatic')
<header id="aa-header">
  <!-- start header top  -->
  <div class="aa-header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-top-area">
            <!-- start header top left -->
            <div class="aa-header-top-left">
              <!-- start language -->
              <div class="aa-language">
                <script type="text/javascript">
                  $.cookie('googtrans', '/en/it');
                  </script>
                  <div id="google_translate_element" style="display: inline;padding-top:2px;"></div><script type="text/javascript">
              function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
              }
              </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              </div>
              <!-- / language -->

             
             
              <div class="cellphone hidden-xs">
                <p><span class="fa fa-phone"></span>00-62-658-658</p>
              </div>
              <!-- / cellphone -->
            </div>
            <!-- / header top left -->
            <div class="aa-header-top-right">
              <ul class="aa-head-top-nav-right">
                <li class="hidden-xs"><a href={{route("wishlist")}}>Wishlist</a></li>
                <li class="hidden-xs"><a href={{route("cart")}}>My Cart</a></li>
                @guest
                <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                @else
                <li><a href="{{route('userprofile')}}">My Account</a></li>
                @endguest
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header top  -->

  <!-- start header bottom  -->
  <div class="aa-header-bottom ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-bottom-area">
            <!-- logo  -->
            <div class="aa-logo">
              <!-- Text based logo -->
              <a href="/">
                {{-- <span class="fa fa-shopping-cart"></span> --}}
                {{-- <img src="{{asset('storage/'.setting('site.logo'))}}" alt=""> --}}
                <p>tribe<strong>Shop</strong></p>
              </a>
              <!-- img based logo -->
              <!-- <a href="index.html"><img src={{asset("front_assets/img/logo.jpg")}} alt="logo img"></a> -->
            </div>
            <!-- / logo  -->
            <!-- cart box -->
            <livewire:front.template.header-shopping-cart/>
            <!-- / cart box -->
            <!-- search box -->
            <livewire:front.template.search-box/>
            <!-- / search box -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header bottom  -->
</header>
<!-- / header section -->

