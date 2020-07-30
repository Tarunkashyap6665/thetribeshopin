<div class="aa-cartbox" wire:mouseleave="disableCartBox">
  @php
  if(Auth::check()){
    $userId=Auth::user()->id;
  }
  else{
    $userId=session()->get('_token');
  }
  @endphp
    <a class="aa-cart-link" href="{{route('cart')}}" wire:mouseenter="enableCartBox">
      <span class="fa fa-shopping-basket"></span>
      <span class="aa-cart-title">SHOPPING CART</span>
      <span class="aa-cart-notify" id="itemCount">{{\Cart::session($userId)->getContent()->count()}}</span>
    </a>
    <div class="aa-cartbox-summary" style="{{$active?'display:block':''}}">
      <ul id="carts">
        @forelse (\Cart::session($userId)->getContent() as $cart)
        <li>
          @php
          if($cart->attributes->image!=null){
          $imagePath='storage/'.$cart->attributes->image;
          }
          else{
          $imagePath="";
          }
          @endphp
          <a class="aa-cartbox-img" href="{{route('productdetails',['product'=>$cart->id])}}"><img
              src={{asset($imagePath)}} alt="img"></a>
          <div class="aa-cartbox-info">
            <h4><a href="#">{{$cart->name}}</a></h4>
            <p>{{$cart->quantity}} x ${{$cart->price}}</p>
          </div>
          <a class="aa-remove-product" style="cursor: pointer" wire:click="removeCartItem({{$cart->id}})"><span class="fa fa-times"></span></a>
        </li>
        @empty

        @endforelse
        @if (!\Cart::session($userId)->isEmpty())
        <li>
          <span class="aa-cartbox-total-title">
            Total <h5 style="display: inline;">(GST included.)</h5>
          </span>
          <span class="aa-cartbox-total-price">
            ${{\Cart::session($userId)->getTotal()}}
          </span>
        </li>
      </ul>
        <a class="aa-cartbox-checkout aa-primary-btn" href="{{route('checkout')}}">Checkout</a>
        @else
        <p>Shop product <a href="{{route('productstore')}}" class="aa-cart-title">here .</a></p>
      </ul>
          
      @endif
    </div>
  </div>
