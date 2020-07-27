<div>
    <div class="aa-product-related-item">
        <h3>Related Products</h3>
        <ul class="aa-product-catg aa-related-item-slider">
          @foreach ($products as $product)
              <!-- start single product item -->
              <livewire:front.template.product-card  :product="$product" :key="$product->id"/>
          @endforeach                                                                                   
        </ul>
        <!-- quick view modal -->                  
        <livewire:front.template.homepage.quick-view/>
        <!-- / quick view modal -->   
      </div>
</div>
