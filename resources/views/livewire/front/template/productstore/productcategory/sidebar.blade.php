
    <aside class="aa-sidebar">
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
          <h3>Category</h3>
          <ul class="aa-catg-nav">
            @foreach ($categories as $category)               
            <li><a wire:click="$emit('filter','category',{{$category->id}})">{{$category->name}}</a></li>
            @endforeach
          </ul>
        </div>
        <!-- single sidebar -->
        {{-- <div class="aa-sidebar-widget">
          <h3>Tags</h3>
          <div class="tag-cloud">
            <a href="#">Fashion</a>
            <a href="#">Ecommerce</a>
            <a href="#">Shop</a>
            <a href="#">Hand Bag</a>
            <a href="#">Laptop</a>
            <a href="#">Head Phone</a>
            <a href="#">Pen Drive</a>
          </div>
        </div> --}}
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
          <h3>Shop By Price</h3>              
          <!-- price range -->
          <div class="aa-sidebar-price-range">
           <form id="range" name="range">
              <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
              </div>
              <input type="hidden"  name="minPrice" id="minPrice">
              <input type="hidden" name="maxPrice"  id="maxPrice">
              <span id="skip-value-lower" class="example-val">30.00</span>
             <span id="skip-value-upper" class="example-val">100.00</span>
             <button class="aa-filter-btn" onclick="priceRange()" type="button">Filter</button>
           </form>
          </div>
          {{-- <script>
            function priceRange() {
              // event.preventDefault();
              let minPriceString=document.getElementById('skip-value-lower').innerText;
              let maxPriceString=document.getElementById('skip-value-upper').innerText;
              let minPrice=parseInt(minPriceString);
              let maxPrice=parseInt(maxPriceString);
              let min=document.getElementById("minPrice");
              let max=document.getElementById("maxPrice");
              min.value=minPrice;
              max.value=maxPrice;
            
              let form=document.getElementById("range");
              form.submit();
              
            
            }
          </script>               --}}
        </div>
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
          <h3>Shop By Color</h3>
          <div class="aa-color-tag">
            @foreach ($colors as $color)
              <a style="background-color: {{$color}};" wire:click="$emit('filter','color','{{$color}}')"></a>
            @endforeach
          </div>                            
        </div>
        <!-- single sidebar -->
        {{-- <div class="aa-sidebar-widget">
          <h3>Recently Views</h3>
          <div class="aa-recently-views">
            <ul>
              <li>
                <a href="#" class="aa-cartbox-img"><img alt="img" src={{asset("front_assets/img/woman-small-2.jpg")}}></a>
                <div class="aa-cartbox-info">
                  <h4><a href="#">Product Name</a></h4>
                  <p>1 x $250</p>
                </div>                    
              </li>
              <li>
                <a href="#" class="aa-cartbox-img"><img alt="img" src={{asset("front_assets/img/woman-small-1.jpg")}}></a>
                <div class="aa-cartbox-info">
                  <h4><a href="#">Product Name</a></h4>
                  <p>1 x $250</p>
                </div>                    
              </li>
               <li>
                <a href="#" class="aa-cartbox-img"><img alt="img" src={{asset("front_assets/img/woman-small-2.jpg")}}></a>
                <div class="aa-cartbox-info">
                  <h4><a href="#">Product Name</a></h4>
                  <p>1 x $250</p>
                </div>                    
              </li>                                      
            </ul>
          </div>                            
        </div> --}}
        <!-- single sidebar -->
        {{-- <div class="aa-sidebar-widget">
          <h3>Top Rated Products</h3>
          <div class="aa-recently-views">
            <ul>
              <li>
                <a href="#" class="aa-cartbox-img"><img alt="img" src={{asset("front_assets/img/woman-small-2.jpg")}}></a>
                <div class="aa-cartbox-info">
                  <h4><a href="#">Product Name</a></h4>
                  <p>1 x $250</p>
                </div>                    
              </li>
              <li>
                <a href="#" class="aa-cartbox-img"><img alt="img" src={{asset("front_assets/img/woman-small-1.jpg")}}></a>
                <div class="aa-cartbox-info">
                  <h4><a href="#">Product Name</a></h4>
                  <p>1 x $250</p>
                </div>                    
              </li>
               <li>
                <a href="#" class="aa-cartbox-img"><img alt="img" src={{asset("front_assets/img/woman-small-2.jpg")}}></a>
                <div class="aa-cartbox-info">
                  <h4><a href="#">Product Name</a></h4>
                  <p>1 x $250</p>
                </div>                    
              </li>                                      
            </ul>
          </div>                            
        </div> --}}
      </aside>
