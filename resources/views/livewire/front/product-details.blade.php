<div>
  @section('title','Tribe Shop | Store')
  <!-- catg header banner section -->
  <livewire:front.template.category-banner />
  <!-- / catg header banner section -->
  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <livewire:front.template.productdetails.product-spec :product="$product" />
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Description</a></li>
                <li><a href="#review" data-toggle="tab">Reviews</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  {!! $product->haveAttribute->details!=""?$product->haveAttribute->details:'<h2>Their is no details about product please enter.</h2> ' !!}
                </div>
                <!-- Product review -->
                <livewire:front.template.productdetails.product-review :product="$product" />
                <!-- !Product review -->
              </div>
            </div>
            <!-- Related product -->
            <livewire:front.template.productdetails.related-product :product="$product" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->
  @include('layouts.front.partial-template.newsletter')
  <style>

  </style>
</div>