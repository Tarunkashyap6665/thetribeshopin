<div>
  @inject('imageIntervention', 'Intervention\Image\ImageManagerStatic')
  @php
  if(Auth::check()){
    $userId=Auth::user()->id;
  }
  else{
    $userId=session()->get('_token');
  }
  @endphp
  <div class="modal fade {{$active==true?'in':''}}" id="quick-view-modal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" style="display: {{$active==true?'block':'none'}};">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="row">
            <!-- Modal view slider -->
            @php
            $images=$product->haveAttribute()->select('images')->first();
            $imageArray=json_decode($images["images"]);
            $imagePath='storage/'.$imageArray[0];
            @endphp
            <div class="col-md-4 col-sm-6 col-xs-12">
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
                  <div class="simpleLens-thumbnails-container">
                    @foreach ($imageArray as $image)
                    @php
                    $imagePath='storage/'.$image;
                    @endphp
                    <a href="#" class="simpleLens-thumbnail-wrapper"
                      data-lens-image={{$imageIntervention::make($imagePath)->resize(900,1024)->encode('data-url')}}
                      data-big-image={{asset($imagePath)}}>
                      <img src={{$imageIntervention::make($imagePath)->resize(250,300)->encode('data-url')}} width="45px">
                    </a>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal view content -->
            <div class="col-md-8 col-sm-6 col-xs-12">
              <div class="aa-product-view-content">
                <h3>{{$product->name}}</h3>
                <div class="aa-price-block">
                  <span class="aa-product-view-price">${{$product->price}}</span>
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
                <div class="aa-prod-quantity">
                  <input type="number" name="quantity" id="quantity{{$product->id}}" value="1"
                    style="width: 50px; padding-left:5px;">
                  </form>
                  <p class="aa-prod-category">
                    Category: <a href="#">{{$product->category->name}}</a>
                  </p>
                </div>
                <div class="aa-prod-view-bottom">
                  @if (\Cart::session($userId)->get($product->id))
                  <a class="aa-add-to-cart-btn" id="qkct{{$product->id}}" href="{{route('cart')}}">Added To Cart</a>
                  @else
                  <a class="aa-add-to-cart-btn" id="qkct{{$product->id}}" onclick="addToCart(this.id)"
                    style="cursor: pointer;">Add To Cart</a>
                  @endif
                  <a href="{{route('productdetails',['product'=>$product->id])}}" class="aa-add-to-cart-btn">View
                    Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
</div>