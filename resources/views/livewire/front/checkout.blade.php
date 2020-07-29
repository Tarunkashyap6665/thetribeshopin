<div>
  @section('title','Tribe Shop | Checkout')
  <!-- catg header banner section -->
<livewire:front.template.category-banner/>
<!-- / catg header banner section -->
    <!-- Cart view section -->
 <section id="checkout">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="checkout-area">
           <form action="{{route('payment')}}" method="POST">
            @csrf
             <div class="row">
               <div class="col-md-8">
                 <div class="checkout-left">
                   <div class="panel-group" id="accordion">
                     <!-- Coupon section --> 
                     {{-- <livewire:front.template.checkoutpage.coupon-section/> --}}
                     <!-- Login section -->
                     @guest
                     <livewire:front.template.checkoutpage.login-section/>
                     @endguest
                     
                     <!-- Shipping Address -->
                     <livewire:front.template.checkoutpage.shipping-details/>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="checkout-right">
                    <livewire:front.template.checkoutpage.order-summary :product="$product"/>
                   
                   <h4>Payment Method</h4>
                   <div class="aa-payment-method">                    
                     <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios" value="COD"> Cash on Delivery </label>
                     <label for="Paytm"><input type="radio" id="Paytm" name="optionsRadios" value="paytm" checked> Via Paytm </label>    
                     <input type="submit" value="Place Order" class="aa-browse-btn">                
                   </div>
                 </div>
               </div>
             </div>
           </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->
</div>
