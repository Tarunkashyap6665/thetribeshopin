<div>
  @section('title','Tribe Shop | Wishlist')
  <!-- catg header banner section -->
  <livewire:front.template.category-banner :page="'Fashion'" :type="'Women'">
    <!-- / catg header banner section -->
    <!-- Cart view section -->
    <section id="cart-view">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="cart-view-area">
              <div class="cart-view-table aa-wishlist-table">
                <form action="">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Stock Status</th>
                          <th>Remove / Add Cart</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse (app('wishlist')->session(1)->getContent() as $wishlist)
                        @php
                        if($wishlist->attributes->image!=null){
                        $imagePath='storage/'.$wishlist->attributes->image;
                        }
                        else{
                        $imagePath="";
                        }
                        @endphp
                        <tr>
                          <td><a href="#"><img src="{{$imagePath}}" alt="img"></a></td>
                          <td><a class="aa-cart-title" href="#">{{$wishlist->name}}</a></td>
                          <td>${{$wishlist->price}}</td>
                          <td>In Stock</td>
                          <td>
                            <p><a class="remove" style="cursor: pointer;"
                                wire:click="removeWishlistItem({{$wishlist->id}})">Remove cart</a></p>
                            <p>
                              <a class="aa-cart-title" id="cart{{$wishlist->id}}" wire:click="addToCart({{$wishlist->id}})" style="color: rgb(15, 121, 41); cursor:pointer;">Add to Cart</a>
                              </p>
                          </>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="6" style="padding-top: 120px;padding-bottom: 125px;">
                            <h3>Wishlist is empty. For shopping new product click <a class="aa-cart-title"
                                href="{{route('productstore')}}">here</a>.</h3>
                          </td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / Cart view section -->
    @include('layouts.front.partial-template.newsletter')
</div>