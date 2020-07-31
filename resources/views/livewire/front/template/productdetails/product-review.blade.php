    <div class="tab-pane fade {{$active==true?'active in':''}} " id="review">
        <div class="aa-product-review-area">
        <h4>{{$productReviews->count()}} Reviews for {{$product->name}}</h4> 
          <ul class="aa-review-nav">
            @foreach ($productReviews as $productReview)
            <li>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src={{asset('storage/'.$productReview->user->avatar)}} alt="girl image">
                  </a>
                </div>
                <div class="media-body">
                <h4 class="media-heading"><strong>{{$productReview->user->name}}</strong> - <span>{{$productReview->created_at->diffForHumans()}}</span></h4>
                  <div class="aa-product-rating">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i<=$productReview->rating)
                        <span class="fa fa-star"></span>
                        @else
                        <span class="fa fa-star-o"></span>
                        @endif
                    @endfor
                  </div>
                  <p>{{$productReview->message}}</p>
                </div>
              </div>
           </li>
            @endforeach
            {{$productReviews->links()}}
          </ul>

          <h4>Add a review</h4>
          <div class="aa-your-rating">
            <p>Your Rating</p>
            @for($i=1;$i<=5;$i++)
              @if ($i<=$review['rating'])
                <span wire:click="rating({{$i}})" class="fa fa-star" style="cursor: pointer;"></span>
              @else    
                <span wire:click="rating({{$i}})" class="fa fa-star-o" style="cursor: pointer;"></span>
              @endif
            @endfor
          </div>
          <!-- review form -->
          <form action="" wire:submit.prevent="productReview" class="aa-review-form">
             <div class="form-group">
               <label for="message">Your Review</label>
               <textarea class="form-control" name="message" wire:model.lazy="review.message" rows="3" id="message"></textarea>
               @error('review.message')
               <div class="alert alert-danger" role="alert">
                {{$message}}
                     
               </div>
               @enderror
             </div>
             @if (Auth::check())
                 
             <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
             @else
             <button type="submit" class="btn btn-default aa-review-submit" disabled>Submit</button>
                 
             @endif
          </form>
        </div>
       </div>
