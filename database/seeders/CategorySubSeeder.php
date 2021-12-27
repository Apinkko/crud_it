<?php

namespace Database\Seeders;

use App\Models\CategorySub;
use Illuminate\Database\Seeder;

class CategorySubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategorySub::query()->create([
            'category_id' => 1,
            'name' => 'Proccessor'
        ]);
        CategorySub::query()->create([
            'category_id' => 1,
            'name' => 'Lcd'
        ]);
        CategorySub::query()->create([
            'category_id' => 2,
            'name' => 'Adobe'
        ]);
        CategorySub::query()->create([
            'category_id' => 2,
            'name' => 'MS. Office'
        ]);
    }
}
