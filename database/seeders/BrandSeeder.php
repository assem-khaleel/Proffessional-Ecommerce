<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'brand_name' => 'Mercedes','brand_logo'=>asset('public/media/brand/Mercedes-brand.jpeg')],
            ['id' => 2, 'brand_name' => 'BMW','brand_logo'=>asset('public/media/brand/BMW-BRAND.jpeg')],
            ['id' => 3, 'brand_name' => 'Volkswagen','brand_logo'=>asset('public/media/brand/volkswagen-brand.png')],
            ['id' => 4, 'brand_name' => 'Audi','brand_logo'=>asset('public/media/brand/Audi-brand.jpeg')],
            ['id' => 5, 'brand_name' => 'Polo','brand_logo'=>asset('public/media/brand/POLO.png')],
        ];

        foreach ($items as $item) {
            \App\Models\Brand::create($item);
        }
    }
}
