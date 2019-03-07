<?php

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
        factory(\App\Models\Category::class, 10)->create();
        factory(\App\Models\Product::class, 10)->create();
        factory(\App\Models\CategoryAndProduct::class, 40)->create();
    }
}
