<div class="panel panel-default aa-checkout-coupon">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                Have a Coupon?
            </a>
        </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
            <input type="text" wire:model.lazy="coupon" placeholder="Coupon Code" class="aa-coupon-code">
            <input type="button" wire:click="applyCoupon" value="Apply Coupon" class="aa-browse-btn">
            {{-- <button class="aa-cart-view-btn" >Apply Coupon</button> --}}
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
    </div>
</div>