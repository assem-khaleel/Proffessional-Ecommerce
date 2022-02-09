<?php

namespace Database\Seeders;

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
        $items = [
            ['id' => 1, 'category_name' => 'Apple'],
            ['id' => 2, 'category_name' => 'Cars'],
            ['id' => 3, 'category_name' => 'Swatches'],
            ['id' => 4, 'category_name' => 'Clothes'],
        ];

        foreach ($items as $item) {
            \App\Models\Category::create($item);
        }
    }
}
