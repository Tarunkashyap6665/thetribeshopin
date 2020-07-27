<div>
  @inject('imageIntervention', 'Intervention\Image\ImageManagerStatic')
    <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
              @php
              if ($banner!=null) {
                $imagePath='storage/'.$banner->image;
              }
              else {
                $imagePath='';
              }
              @endphp
            <a href="#"><img src={{$imageIntervention::make($imagePath)->resize(1170,170)->encode('data-url')}} alt="fashion banner img"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
