<div>
    <!-- catg header banner section -->
<livewire:front.template.category-banner :page="'Search Results'" :type="'search'"/>
<!-- / catg header banner section -->
    <div class="container">
      @if (Session::has('searchProduct'))
      <h3>Found items - {{sizeof(Session::get('searchProduct'))}}</h3>
      <hr>
    <ul class="aa-product-catg">
    @forelse (Session::get('searchProduct') as $product)
        <!-- start single product item -->
        <livewire:front.template.product-card :product="$product" :key="$product->id" />
        @empty
        Search not found
        @endforelse
    </ul>
    @endif
    </div>
</div>
