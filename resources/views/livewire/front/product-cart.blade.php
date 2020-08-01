<div>
  @section('title','Tribe Shop | Cart Page')
  <!-- catg header banner section -->
  <livewire:front.template.category-banner />
  <!-- / catg header banner section -->
  @php
  if(Auth::check()){
    $userId=Auth::user()->id;
  }
  else{
    $userId=session()->get('_token');
  }
  @endphp
  <!-- Cart view section -->
  <section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table">
              {{-- <form action=""> --}}
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove / Add Wishlist</th>
                        <th>Buy Now</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse (\Cart::session($userId)->getContent() as $cart)
                      <tr id="cart{{$cart->id}}">
                        @php
                        if($cart->attributes->image!=null){
                        $imagePath='storage/'.$cart->attributes->image; 

                        }
                        else{

                        $imagePath="";
                        }
                        @endphp
                        {{-- <td>
                          <a class="remove" wire:click="removeCartItem({{$cart->id}})">
                        <fa class="fa fa-close"></fa>
                        </a>
                        </td> --}}
                        <td>
                          <a href="{{route('productdetails',['product'=>$cart->id])}}">
                            <img src="{{$imagePath}}" alt="img">
                          </a>
                        </td>
                        <td>
                          <a class="aa-cart-title" href="#">{{$cart->name}}</a>
                        </td>
                        <td>
                          Rs. {{$cart->price}}
                        </td>
                        <td>
                          <input class="aa-cart-quantity" id="quantity{{$cart->id}}" onchange="updateCart(this.id)"
                            value="{{$cart->quantity}}" type="number">
                        </td>
                        <td id="price{{$cart->id}}">Rs. {{$cart->getPriceSum()}}</td>
                        <td>
                          <p><a class="remove" style="cursor: pointer;"
                              wire:click="removeCartItem({{$cart->id}})">Remove cart</a></p>
                          <p>
                            <a class="aa-cart-title" id="wishlist{{$cart->id}}" wire:click="addToWishlist({{$cart->id}})" style="color: rgb(15, 121, 41); cursor:pointer;">Add to wishlist</a>
                            </p>
                        </td>
                        <td><a href="{{route('checkout',['product'=>$cart->id])}}" class="aa-add-to-cart-btn">Add To Cart</a></td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="6" style="padding-top: 120px;padding-bottom: 120px;">
                          <h3>Cart is empty. For shopping new product click <a class="aa-cart-title" href="{{route('productstore')}}">here</a>.</h3>
                        </td>
                      </tr>
                      @endforelse
                      @if (!\Cart::session($userId)->getContent()->isEmpty())
                      <tr>
                        <td colspan="7" class="aa-cart-view-bottom">
                          <div class="aa-cart-coupon">
                              <input class="aa-coupon-code" wire:model.lazy="coupon" type="text" placeholder="Coupon">
                              <button class="aa-cart-view-btn" wire:click="applyCoupon">Apply Coupon</button>
                              @if ($key)
                            
                              <div class="alert alert-{{$type}} alert-dismissible" style="margin-top: 5px;" role="alert">
                                @if ($type=="success")
                                <button type="button" wire:click="removeCoupon('{{$coupon}}')" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                @else
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                @endif
                                <strong>{{$type}}!</strong> {{$msg}}
                              </div>
                      
                              @endif
                              
                              
                          </div>
                        </td>
                      </tr>
                      @endif
                    </tbody>
                  </table>
                  {{-- @push('js')
                      <script>
                        let coupon=document.getElementById('couponForm');
                        function applyCoupon() {
                          
                        }
                      </script>
                  @endpush --}}
                </div>
              {{-- </form> --}}
              <!-- Cart Total view -->
              @if (!\Cart::session($userId)->getContent()->isEmpty())
              <tr>
                <div class="cart-view-total">
                  <h4>Cart Totals</h4>
                  <table class="aa-totals-table">
                    <tbody>
                      <tr>
                        <th>Subtotal</th>
                        <td id="subtotal">Rs. {{\Cart::session($userId)->getSubTotal()}}</td>
                      </tr>
                      <tr>
                        <th>GST</th>
                        <td>{{\Cart::session($userId)->getCondition('GST 18% tax')->getValue()}}</td>
                      </tr>
                      @if ($key=="success")
                      <tr>
                        <th>
                          {{strtoupper($coupon)}}
                        </th>
                        <td>
                          {{\Cart::session($userId)->getCondition($coupon)->getValue()}}
                        </td>
                      </tr>
                      @endif
                      
                      <tr>
                        <th>Total</th>
                        <td id="total">Rs. {{\Cart::session($userId)->getTotal()}}</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="{{route('checkout')}}" class="aa-cart-view-btn">Proced to Checkout</a>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->
  @include('layouts.front.partial-template.newsletter')
</div>

@push('js')
<script>
  function updateCart(id) {
    let itemId=parseInt(id.substring(8));
         let value=document.getElementById(id).value;
         let price=document.getElementById('price'+itemId);
         let total=document.getElementById('total');
         let subtotal=document.getElementById('subtotal');
         @if (Auth::check())
            let token={{Auth::user()->id}}
        @else
            let token="{{session()->get('_token')}}"
        @endif
         let uri=`${location.origin}/api/cart/${itemId}`;
         data={
           quantity:parseInt(value),
           token:token,
         }
         params={
           method:'PUT',
           headers:{
            'Content-Type':'application/json'
           },
           body:JSON.stringify(data)
         }
         fetch(uri,params).then(response=>response.json()).then(jsondata=>{
           price.innerText=jsondata.extraData.price;
           total.innerText=jsondata.extraData.total;
           subtotal.innerText=jsondata.extraData.subtotal;
           console.log(jsondata)
         });
       }
</script>
@endpush