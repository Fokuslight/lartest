<?php

use App\Category;
use App\Product;
use App\Tag;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 30)->create()->each(function (Product $product) {
            $product->tags()->saveMany(factory(Tag::class, 1)->make());
        });
    }
}
