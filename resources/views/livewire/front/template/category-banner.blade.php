<div wire:poll.12000ms>
  <!-- catg header banner section -->
  @inject('imageIntervention', 'Intervention\Image\ImageManagerStatic')
  @if ($banner!=null)
  <section id="aa-catg-head-banner">
    @php
    if($banner->image!=null){
    $imagePath='storage/'.$banner->image;
    }
    else{
    $imagePath="";
    }
    @endphp
    <img src={{$imageIntervention::make($imagePath)->resize(1920,300)->encode('data-url')}} alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
        <div class="aa-catg-head-banner-content">
          <h2>{{$page}}</h2>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">{{$type}}</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  @else
      
  @endif
  
  <!-- / catg header banner section -->
</div>