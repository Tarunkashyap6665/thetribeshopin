<div>
    <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            {{-- {{dd($diffProducts)}} --}}
            @if (\App\Category::count()!=0)
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                <li><a href="#latest" data-toggle="tab">Latest</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                @foreach ($diffProducts as $productType=>$values)
                     <!-- Start men popular category -->
                <div class="tab-pane fade in {{$productType==$active?'active':''}}" id="{{$productType}}">
                  <ul class="aa-product-catg aa-{{$productType}}-slider">
                    @foreach ($values as $product)
                        <!-- start single product item -->
                        <livewire:front.template.product-card  :product="$product" :key="$product->id"/>
                    @endforeach
                                                                                                       
                  </ul>
                  <a class="aa-browse-btn" href="{{route('productstore')}}">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category --> 
                @endforeach
                           
              </div>
            </div>
            @else
                <div class="">
                  Empty
                </div>
            @endif
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
</div>
