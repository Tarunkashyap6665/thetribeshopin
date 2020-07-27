<div>
    @section('title','Tribe Shop | Homepage')
    <livewire:front.template.homepage.slider/>
    <livewire:front.template.homepage.promo-section/>
    <livewire:front.template.homepage.product-section/>
    <livewire:front.template.homepage.banner/>
    <livewire:front.template.homepage.product-category/> 
    @include('layouts.front.partial-template.support-section')
    {{-- @include('layouts.front.partial-template.testimonial') --}}
    {{-- @include('layouts.front.partial-template.blog') --}} 
    {{-- @include('layouts.front.partial-template.client-brand') --}}
    @include('layouts.front.partial-template.newsletter')
</div>
