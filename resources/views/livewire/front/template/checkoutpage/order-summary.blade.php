<div>
  @php
  if(Auth::check()){
    $userId=Auth::user()->id;
  }
  else{
    $userId=session()->get('_token');
  }
  @endphp
  <h4>Order Summary</h4>
  <div class="aa-order-summary-area">
    <table class="table table-responsive">
      <thead>
        <tr>
          <th>Product</th>
          <th>Total</th>
        </tr>
      </thead>
      @if ($product->id!=null)
      <!--For ONe Product-->
      <tbody>
        <tr>
          <td>{{$product->name}} <strong> x {{$quantity}}</strong></td>
          <td>${{$product->price}}</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>Subtotal</th>
          <td>${{$product->price*$quantity}}</td>
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
          <th>GST</th>
          <td>18%</td>
        </tr>
        <tr>
          <th>Total</th>
          <td>${{$grandTotal}}</td>
        </tr>
      </tfoot>
      @elseif(!\Cart::session($userId)->getContent()->isEmpty())
      <!-- For all Cart Product -->
      <tbody>
        @foreach (\Cart::session($userId)->getContent() as $cart)
        <tr>
          <td>{{$cart->name}}<strong> x {{$cart->quantity}}</strong></td>
          <td>{{$cart->price}}</td>
        </tr>
        @endforeach
      </tbody>
      @if (!\Cart::session($userId)->getContent()->isEmpty())
      <tfoot>
        <tr>
          <th>Subtotal</th>
          <td id="subtotal">${{\Cart::session($userId)->getSubTotal()}}</td>
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
          <th>GST</th>
          <td>{{\Cart::session($userId)->getCondition('GST 18% tax')->getValue()}}</td>
        </tr>
        <tr>
          <th>Total</th>
          <td id="total">${{\Cart::session($userId)->getTotal()}}</td>
        </tr>
      </tfoot>
      @endif
      @endif
    </table>
  </div>
</div>