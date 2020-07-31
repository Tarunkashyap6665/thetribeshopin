<li>
  @inject('imageIntervention', 'Intervention\Image\ImageManagerStatic')
    @php
    $imageString=$product->haveAttribute->images;
    $imageArray=json_decode($imageString);
    $imagePath='storage/'.$imageArray[0];
   @endphp

@php
if(Auth::check()){
  $userId=Auth::user()->id;
}
else{
  $userId=session()->get('_token');
}
@endphp
    <figure>
      <a class="aa-product-img" href="{{route('productdetails',['product'=>$product->id])}}"><img
      src={{$imageIntervention::make($imagePath)->resize(250,300)->encode('data-url')}} alt="polo shirt img"></a>
      <a class="aa-add-card-btn" href="{{route('checkout',['product'=>$product->id,'quantity'=>1])}}"><span
          class="fa fa-cart-arrow-down"></span>Buy Now</a>
      <figcaption>
        <h4 class="aa-product-title"><a href="#">{{$product->name}}</a></h4>
        <span class="aa-product-price">${{$product->price*.8}}</span><span
          class="aa-product-price"><del>${{$product->price}}</del></span>
      </figcaption>
    </figure>
    <div class="aa-product-hvr-content">
      @if (app('wishlist')->session($userId)->get($product->id))
      <a id="wishIcon{{$product->id}}" href="{{route('wishlist')}}" data-toggle="tooltip"
        data-placement="top" title="Added to Wishlist"><span class="fa fa-heart"></span></a>
      @else
      <a id="wishIcon{{$product->id}}" onclick="addToWishlist(this.id)" style="cursor: pointer;"
        data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
          class="fa fa-heart-o"></span></a>
      @endif
      @if (\Cart::session($userId??session()->get('_token'))->get($product->id))
      <a id="cart{{$product->id}}" href="{{route('cart')}}" data-toggle="tooltip"
        data-placement="top" title="Added to Cart"><span class="fa fa-shopping-cart"></span></a>
      @else
      <a id="cart{{$product->id}}" onclick="addToCart(this.id)" style="cursor: pointer;"
        data-toggle="tooltip" data-placement="top" title="Add to Cart"><span
          class="fa fa-opencart"></span></a>
      @endif
      <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
        wire:click="$emit('quickView',{{$product->id}})" data-toggle="modal"
        data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
    </div>
    <!-- product badge -->
    <span class="aa-badge aa-sale" href="#">SALE!</span>
  </li>
