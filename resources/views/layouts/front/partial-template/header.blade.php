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
                <div class="dropdown">
                  <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    <img src={{asset("front_assets/img/flag/english.jpg")}} alt="english flag">ENGLISH
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><img src={{asset("front_assets/img/flag/french.jpg")}} alt="">FRENCH</a></li>
                    <li><a href="#"><img src={{asset("front_assets/img/flag/english.jpg")}} alt="">ENGLISH</a></li>
                  </ul>
                </div>
              </div>
              <!-- / language -->

              <!-- start currency -->
              <div class="aa-currency">
                <div class="dropdown">
                  <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-usd"></i>USD
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                    <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                  </ul>
                </div>
              </div>
              <!-- / currency -->
              <!-- start cellphone -->
              <div class="cellphone hidden-xs">
                <p><span class="fa fa-phone"></span>00-62-658-658</p>
              </div>
              <!-- / cellphone -->
            </div>
            <!-- / header top left -->
            <div class="aa-header-top-right">
              <ul class="aa-head-top-nav-right">
                <li><a href="account.html">My Account</a></li>
                <li class="hidden-xs"><a href={{route("wishlist")}}>Wishlist</a></li>
                <li class="hidden-xs"><a href={{route("cart")}}>My Cart</a></li>
                <li class="hidden-xs"><a href={{route("checkout")}}>Checkout</a></li>
                @guest
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                @else
                  <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" >logout</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
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
  <div class="aa-header-bottom">
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

