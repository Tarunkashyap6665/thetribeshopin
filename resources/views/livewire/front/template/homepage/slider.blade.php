<div>
  @inject('imageIntervention', 'Intervention\Image\ImageManagerStatic')
    <!-- Start slider -->
    @if (App\Banner::count()!=0)
    <section id="aa-slider">
      <div class="aa-slider-area">
        <div id="sequence" class="seq">
          <div class="seq-screen">
            <ul class="seq-canvas">
              @foreach ($banners as $banner)
              <!-- single slide item -->
              <li>
                <div class="seq-model">
                  @php
                      $imagePath='storage/'.$banner->image;
                  @endphp
                  <img data-seq src={{$imageIntervention::make($imagePath)->resize(1920,700)->encode('data-url')}} alt="Men slide img" />
                </div>                
              </li>    
              @endforeach
            </ul>
          </div>
          <!-- slider navigation btn -->
          {{-- <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
            <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
            <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
          </fieldset> --}}
        </div>
      </div>
    </section>      
    @endif
  
  <!-- / slider -->
</div>
