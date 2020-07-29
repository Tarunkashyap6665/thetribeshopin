<div>
    <div class="aa-product-catg-content">
        <div class="aa-product-catg-head">
          <div class="aa-product-catg-head-left">
            <form action="" class="aa-sort-form">
              <label for="">Sort by</label>
              <select name="">
                <option value="1" selected="Default">Default</option>
                <option value="2">Name</option>
                <option value="3">Price</option>
                <option value="4">Date</option>
              </select>
            </form>
            <form action="" class="aa-show-form">
              <label for="">Show</label>
              <select name="">
                <option value="1" selected="12">12</option>
                <option value="2">24</option>
                <option value="3">36</option>
              </select>
            </form>
          </div>
          <div class="aa-product-catg-head-right">
            <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
            <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
          </div>
        </div>
        <div class="aa-product-catg-body">
          <ul class="aa-product-catg">
            @forelse ($products as $product)
                <!-- start single product item -->
                <livewire:front.template.product-card  :product="$product" :key="$product->id"/>
            @empty
                <li>Product is Empty...</li>
            @endforelse                   
          </ul>
          <!-- quick view modal -->                  
          <livewire:front.template.homepage.quick-view/>
          <!-- / quick view modal -->   
        </div>
        <div class="aa-product-catg-pagination">
          {{-- <nav>
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav> --}}
        
        </div>
      </div>
</div>
