<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Supplier;
use App\Warehouse;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 5)->create();
        factory(Supplier::class, 10)->create();
        factory(Warehouse::class, 2)->create();
        factory(Product::class, 100)->create();
    }
}
