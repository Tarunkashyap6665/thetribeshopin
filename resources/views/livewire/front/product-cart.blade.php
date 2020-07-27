<div>
  @section('title','Tribe Shop | Cart Page')
  <!-- catg header banner section -->
  <livewire:front.template.category-banner />
  <!-- / catg header banner section -->
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
                      </tr>
                    </thead>
                    <tbody>
                      @forelse (\Cart::session(1)->getContent() as $cart)
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
                          ${{$cart->price}}
                        </td>
                        <td>
                          <input class="aa-cart-quantity" id="quantity{{$cart->id}}" onchange="updateCart(this.id)"
                            value="{{$cart->quantity}}" type="number">
                        </td>
                        <td id="price{{$cart->id}}">${{$cart->getPriceSum()}}</td>
                        <td>
                          <p><a class="remove" style="cursor: pointer;"
                              wire:click="removeCartItem({{$cart->id}})">Remove cart</a></p>
                          <p>
                            <a class="aa-cart-title" id="wishlist{{$cart->id}}" wire:click="addToWishlist({{$cart->id}})" style="color: rgb(15, 121, 41); cursor:pointer;">Add to wishlist</a>
                            </p>
                        </td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="6" style="padding-top: 120px;padding-bottom: 120px;">
                          <h3>Cart is empty. For shopping new product click <a class="aa-cart-title" href="{{route('productstore')}}">here</a>.</h3>
                        </td>
                      </tr>
                      @endforelse
                      @if (!\Cart::session(1)->getContent()->isEmpty())
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          <div class="aa-cart-coupon">
                            @if ($active==0)
                              <input class="aa-coupon-code" wire:model.lazy="coupon" type="text" placeholder="Coupon">
                              <button class="aa-cart-view-btn" wire:click="applyCoupon">Apply Coupon</button>
                              @if (Session::has('error'))
                              <div style="background-color: #da464640;border-radius:4px;margin-top:15px;">
                                <p style="color: rgb(143, 37, 37); margin:0px;padding:10px 0px">
                                  {{Session::get('error')}}
                                </p>
                              </div>
                              @endif
                              
                            @else
                                <div>
                                  <p>{{$coupon}} applied.</p>
                                  <a class="aa-remove-product" style="cursor: pointer" wire:click="removeCoupon('{{$coupon}}')"><span class="fa fa-times"></span></a>
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
              @if (!\Cart::session(1)->getContent()->isEmpty())
              <tr>
                <div class="cart-view-total">
                  <h4>Cart Totals</h4>
                  <table class="aa-totals-table">
                    <tbody>
                      <tr>
                        <th>Subtotal</th>
                        <td id="subtotal">${{\Cart::session(1)->getSubTotal()}}</td>
                      </tr>
                      <tr>
                        <th>GST</th>
                        <td>{{\Cart::session(1)->getCondition('GST 18% tax')->getValue()}}</td>
                      </tr>
                      @if ($active)
                      <tr>
                        <th>
                          {{strtoupper($coupon)}}
                        </th>
                        <td>
                          {{\Cart::session(1)->getCondition($coupon)->getValue()}}
                        </td>
                      </tr>
                      @endif
                      
                      <tr>
                        <th>Total</th>
                        <td id="total">${{\Cart::session(1)->getTotal()}}</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
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
    let itemId=id.substring(8);
         let value=document.getElementById(id).value;
         let price=document.getElementById('price'+itemId);
         let total=document.getElementById('total');
         let subtotal=document.getElementById('subtotal');
         let uri=`http://127.0.0.1:8000/api/cart/${itemId}`;
         data={
           quantity:value
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