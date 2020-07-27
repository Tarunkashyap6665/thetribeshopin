@extends('layouts.front.masterlayout')

@section('content')
    @if (Session::has('searchProduct'))
    <ul class="aa-product-catg">
    @forelse (Session::get('searchProduct') as $product)
        <!-- start single product item -->
        <li>
          @php
           $imageString=$product->haveAttribute->images;
           $imageArray=json_decode($imageString);
           $imagePath='storage/'.$imageArray[0];
          @endphp
          <figure>
            <a class="aa-product-img" href="{{route('productdetails',['product'=>$product->id])}}"><img
                src={{asset($imagePath)}} alt="polo shirt img"></a>
            @if (\Cart::session(1)->get($product->id))
            <a class="aa-add-card-btn" href="{{route('cart')}}"><span
                class="fa fa-shopping-cart"></span>Added To Cart</a>
            @else
            <a class="aa-add-card-btn" id="cart{{$product->id}}" onclick="addToCart(this.id)"
              style="cursor: pointer;"><span class="fa fa-shopping-cart"></span>Add To Cart</a>

            @endif
            <figcaption>
              <h4 class="aa-product-title"><a href="#">{{$product->name}}</a></h4>
              <span class="aa-product-price">${{$product->price*.8}}</span><span
                class="aa-product-price"><del>${{$product->price}}</del></span>
            </figcaption>
          </figure>
          <div class="aa-product-hvr-content">
            @if (app('wishlist')->session(1)->get($product->id))
            <a id="wishIcon{{$product->id}}" href="{{route('wishlist')}}" data-toggle="tooltip"
              data-placement="top" title="Added to Wishlist"><span class="fa fa-heart"></span></a>
            @else
            <a id="wishIcon{{$product->id}}" onclick="addToWishlist(this.id)" style="cursor: pointer;"
              data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
                class="fa fa-heart-o"></span></a>
            @endif
            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                class="fa fa-exchange"></span></a>
            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
              wire:click="$emit('quickView',{{$product->id}})" data-toggle="modal"
              data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
          </div>
          <!-- product badge -->
          <span class="aa-badge aa-sale" href="#">SALE!</span>
        </li>


        @empty
        Search not found
        @endforelse
    </ul>
    @endif
@endsection