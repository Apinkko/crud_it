<?php

namespace Database\Seeders;

use App\Models\Product;
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
        Product::query()->create([
            'category_id' => 1,
            'category_sub_id' => 1,
            'name' => 'Intel Core I3'
        ]);
        Product::query()->create([
            'category_id' => 1,
            'category_sub_id' => 2,
            'name' => 'Dell 21 inch'
        ]);
        Product::query()->create([
            'category_id' => 2,
            'category_sub_id' => 3,
            'name' => 'Ms Office Power Point'
        ]);
        Product::query()->create([
            'category_id' => 2,
            'category_sub_id' => 3,
            'name' => 'Ms Office Word'
        ]);
    }
}
