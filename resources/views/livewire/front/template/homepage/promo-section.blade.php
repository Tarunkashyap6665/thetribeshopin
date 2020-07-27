<div>
  @inject('imageIntervention', 'Intervention\Image\ImageManagerStatic')
    <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              @if (\App\Category::count()!=0)
                  <!-- promo left -->
              @php
              $imagePath='storage/'.$categoryLeft->image;
              @endphp
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src={{$imageIntervention::make($imagePath)->resize(450,450)->encode('data-url')}} alt="img">                    
                    <div class="aa-prom-content">
                      <span>75% Off</span>
                    <h4><a href="{{route('productstore',['category'=>$categoryLeft->id])}}">For {{$categoryLeft->name}}</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  @foreach ($categories as $category)
                  @php
                  $imagePath='storage/'.$category->image;
                  @endphp
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src={{$imageIntervention::make($imagePath)->resize(300,220)->encode('data-url')}} alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="{{route('productstore',['category'=>$category->id])}}">For {{$category->name}}</a></h4>                        
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @else
                  <div class="">
                    <p>Empty</p>
                  </div>
              @endif
              
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo section -->
</div>
