<div>
    @section('title','Tribe Shop | Product Details')
    @section('body-class','productPage')
    <!-- catg header banner section -->
    @if (\App\Banner::count()!=0)
    <livewire:front.template.category-banner :page="'Fashion'" :type="'Women'">
    @endif
    <!-- / catg header banner section -->
    @if (\App\Category::count()!=0)
    <livewire:front.template.productstore.product-category :category="$category"/>
    @endif
    @include('layouts.front.partial-template.newsletter')
</div>
