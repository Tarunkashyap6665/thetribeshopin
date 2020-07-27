<div>
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
            
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                <ul class="nav nav-tabs aa-products-tab">
                  @foreach ($categories as $category)
                   @if (!empty($category->haveProducts->first()))
                      {{-- {{dump($category->haveProducts)}} --}}
                      <li class="{{$category->id==$active?'active':''}}"><a href="#{{$category->id}}"
                          data-toggle="tab">{{$category->name}}</a></li>
                  @endif
                  @endforeach
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  @foreach ($categories as $category)
                  @if ($category->haveProducts)
                      
                  <!-- Start {{$category->name}} product category -->
                  <div class="tab-pane fade in {{$category->id==$active?'active':''}}" id="{{$category->id}}">
                    <ul class="aa-product-catg">
                      @php
                      if ($category->haveProducts->take(8)) {
                        $products=$category->haveProducts->take(8);
                      } else {
                        $products=$category->haveProducts;
                      }
                      @endphp
                      @foreach ($products as $product)
                      <!-- start single product item -->
                      <livewire:front.template.product-card  :product="$product" :key="$product->id"/>
                      @endforeach

                    </ul>
                    <a class="aa-browse-btn" style="margin-left: 42%;margin-bottom: 3%;"
                      href="{{route('productstore')}}">Browse all Product <span
                        class="fa fa-long-arrow-right"></span></a>
                  </div>
                  <!-- / {{$category->name}} product category -->
                  @endif
                  @endforeach

                </div>
                <!-- quick view modal -->
                <livewire:front.template.homepage.quick-view />
                <!-- / quick view modal -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
</div>