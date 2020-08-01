<div class="panel panel-default aa-checkout-billaddress">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          Shippping Address
        </a>
      </h4>
    </div>
    {{-- {{dd($errors)}} --}}
    @php
         if(Auth::check()){
          $userId=Auth::user()->id;
        }
        else{
          $userId=session()->get('_token');
        }
    @endphp
    <div id="collapseFour" class="panel-collapse collapse">
      @if (Auth::check())
      <input type="hidden" name="userId" value={{Auth::user()->id}}>
      @endif
      <input type="hidden" name="shippingCharges" value="24">
      <input type="hidden" name="grandTotal" value={{$grandTotal}}>
      @if (isset($quantity))
      <input type="hidden" name="productId[]" value={{$product->id}}>
      <input type="hidden" name="productQty[]" value={{$quantity}}>
      @else
      @foreach (\Cart::session($userId)->getContent() as $item)       
      <input type="hidden" name="productId[]" value={{$item->id}}>
      <input type="hidden" name="productQty[]" value={{$item->quantity}}>
      @endforeach
          
      @endif
      <input type="hidden" name="orderStatus" value="0">
      <div class="panel-body">
       <div class="row">
          <div class="col-md-12">
            <div class="aa-checkout-single-bill">
              <input type="text" placeholder="Name*" name="name">
            </div>
            @error('name')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror                             
          </div>
        </div> 
        <div class="row">
          <div class="col-md-12">
            <div class="aa-checkout-single-bill">
              <input type="email" placeholder="Email Address*" name="email">
            </div>      
            @error('email')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror                       
          </div>
          <div class="col-md-12">
            <div class="aa-checkout-single-bill">
              <input type="tel" placeholder="Phone*" name="mobile">
            </div>
            @error('mobile')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror
          </div>
        </div> 
        <div class="row">
          <div class="col-md-12">
            <div class="aa-checkout-single-bill">
              <textarea cols="8" rows="3" name="address" placeholder="Address*"></textarea>
            </div>      
            @error('address')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror                       
          </div>                            
        </div>   
        <div class="row">
          <div class="col-md-12">
            <div class="aa-checkout-single-bill">
              {{-- <select>
                <option value="0">Select Your Country</option>
                <option value="1">Australia</option>
                <option value="2">Afganistan</option>
                <option value="3">Bangladesh</option>
                <option value="4">Belgium</option>
                <option value="5">Brazil</option>
                <option value="6">Canada</option>
                <option value="7">China</option>
                <option value="8">Denmark</option>
                <option value="9">Egypt</option>
                <option value="10">India</option>
                <option value="11">Iran</option>
                <option value="12">Israel</option>
                <option value="13">Mexico</option>
                <option value="14">UAE</option>
                <option value="15">UK</option>
                <option value="16">USA</option>
              </select> --}}
              <input type="text" placeholder="Your Country*" name="country">
            </div>                        
            @error('country')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror     
          </div>                            
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="aa-checkout-single-bill">
              <input type="text" placeholder="State*" name="state">
            </div>      
            @error('state')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror                       
          </div>
          <div class="col-md-6">
            <div class="aa-checkout-single-bill">
              <input type="text" placeholder="Postcode / ZIP*" name="pincode">
            </div>
            @error('pincode')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror
          </div>
        </div>   
        <div class="row">
          <div class="col-md-12">
            <div class="aa-checkout-single-bill ">
              <input type="text" placeholder="City / Town*" name="city">
            </div>
            @error('city')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror
          </div>
        </div>              
      </div>
    </div>
  </div>