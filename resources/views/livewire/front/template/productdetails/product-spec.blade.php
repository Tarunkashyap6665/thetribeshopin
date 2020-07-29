<div class="row">
    @inject('imageIntervention', 'Intervention\Image\ImageManagerStatic')
    <!-- Modal view slider -->
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
  $userId=session()->get('userId');
}
@endphp
    <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="aa-product-view-slider">
            <div class="simpleLens-gallery-container" id="demo-1">
                <div class="simpleLens-container">
                    <div class="simpleLens-big-image-container">
                        <a class="simpleLens-lens-image"
                            data-lens-image={{$imageIntervention::make($imagePath)->resize(900,1024)->encode('data-url')}}>
                            <img src={{$imageIntervention::make($imagePath)->resize(250,300)->encode('data-url')}} class="simpleLens-big-image">
                        </a>
                    </div>
                </div>
                <div>

                </div>
                <div class="simpleLens-thumbnails-container">
                    @foreach ($imageArray as $image)
                    @php
                    $imagePath='storage/'.$image;
                    @endphp
                    <a href="#" class="simpleLens-thumbnail-wrapper"
                        data-lens-image={{$imageIntervention::make($imagePath)->resize(900,1024)->encode('data-url')}}
                        data-big-image={{$imageIntervention::make($imagePath)->resize(250,300)->encode('data-url')}}>
                        <img src="{{$imageIntervention::make($imagePath)->resize(250,300)->encode('data-url')}}" width="45px">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Modal view content -->
    <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="aa-product-view-content">
            <h3>{{$product->name}}</h3>
            <div class="aa-price-block">
                <span class="aa-product-view-price">${{$product->price*.8}}</span>
                <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
            </div>
            <p>{!!$product->description!!}</p>
            <h4>Size</h4>
            <div class="aa-prod-view-size">
                <a href="#">S</a>
                <a href="#">M</a>
                <a href="#">L</a>
                <a href="#">XL</a>
            </div>
            <h4>Color</h4>
            <div class="aa-color-tag">
                <a href="#" class="aa-color-green"></a>
                <a href="#" class="aa-color-yellow"></a>
                <a href="#" class="aa-color-pink"></a>
                <a href="#" class="aa-color-black"></a>
                <a href="#" class="aa-color-white"></a>
            </div>
            <div class="aa-prod-quantity">
               <input type="number" name="quantity" id="quantity{{$product->id}}" value="1" style="width: 50px; padding-left:5px;">
                </form>
                <p class="aa-prod-category">
                    Category: <a href="#">{{$product->category->name}}</a>
                </p>
            </div>
            <div class="aa-prod-view-bottom">
                @if (\Cart::session($userId)->get($product->id))
                <a class="aa-add-to-cart-btn" id="cart{{$product->id}}" href="{{route('cart')}}">Added To Cart</a>
                @else
                <a class="aa-add-to-cart-btn" id="cart{{$product->id}}" onclick="addToCart(this.id)" style="cursor: pointer;">Add To Cart</a>
                @endif

                @if (app('wishlist')->session($userId)->get($product->id))
                <a class="aa-add-to-cart-btn" id="wishlist{{$product->id}}" href="{{route('wishlist')}}">Added To Wishlist</a>
                @else
                <a class="aa-add-to-cart-btn" id="wishlist{{$product->id}}" onclick="addToWishlist(this.id)" style="cursor: pointer;">Wishlist</a>
                @endif
                <a class="aa-add-to-cart-btn" href="#">Compare</a>
            </div>
        </div>
    </div>
</div>