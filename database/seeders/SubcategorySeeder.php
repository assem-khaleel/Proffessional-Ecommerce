<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'category_id' => '1','subcategory_name'=>'Apple Green'],
            ['id' => 2, 'category_id' => '1','subcategory_name'=>'Apple Yellow'],
            ['id' => 3, 'category_id' => '3','subcategory_name'=>'Switdd'],
            ['id' => 4, 'category_id' => '4','subcategory_name'=>'T-shirt'],
            ['id' => 5, 'category_id' => '2','subcategory_name'=>'BMW'],
            ['id' => 6, 'category_id' => '2','subcategory_name'=>'Mercedes'],
            ['id' => 7, 'category_id' => '2','subcategory_name'=>'Volkswagen'],
        ];

        foreach ($items as $item) {
            \App\Models\Subcategory::create($item);
        }
    }
}
