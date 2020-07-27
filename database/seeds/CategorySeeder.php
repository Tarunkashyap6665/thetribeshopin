<?php

use App\Category;
use App\Product;
use App\ProductAttribute;
use App\ProductImage;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class,10)->create()->each(function($catgy){
           $catgy->haveProducts()->createMany(factory(Product::class,5)->make()->toArray())
           ->each(function($product){
               $product->haveImages()->createMany(factory(ProductImage::class,4)->make()->toArray());
               $product->haveAttribute()->save(factory(ProductAttribute::class)->make());
           });
        });
    }
}
