<?php

namespace Database\Seeders;

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
        $items = [
            ['id' => 1, 'category_id' => '1','subcategory_id'=>'3','brand_id'=>'2','product_name'=>'pen','product_code'=>'QRSGA',
             'product_quantity'=>'10','product_details'=>'Parker Urban Premium 5th Technology Ebony Metal Chiseled Fountain Pen, Medium Po
','product_color'=>'black','product_size'=>'Medium','selling_price'=>'300','discount_price'=>'20',
             'video_link'=>'https://www.youtube.com/watch?v=CvJKuIhfeZI','main_slider'=>'1','hot_deal'=>'1','best_rated'=>'1','mid_slider'=>'1','buyone_getone'=>'1','hot_new'=>'1',
             'trend'=>'1','image_one'=>asset('public/media/product/260921_11_44_12.jpg'),'image_two'=>asset('public/media/product/1711701033749218.jpg'),'image_three'=>asset('public/media/product/1711702320920047.jpg'),'status'=>'1'],
            ['id' => 2, 'category_id' => '2','subcategory_id'=>'5','brand_id'=>'3','product_name'=>'BMW','product_code'=>'lopa',
                'product_quantity'=>'7','product_details'=>'the BMW Group Munich plant approximately 7,000 employees from more than 50 nations produce models of the BMW 3 Series and BMW 4 Series','product_color'=>'Silver','product_size'=>'Large','selling_price'=>'13000','discount_price'=>'30',
                'video_link'=>'https://www.youtube.com/watch?v=2zlxkRaOBo0','main_slider'=>'1','hot_deal'=>'1','best_rated'=>'1','mid_slider'=>'1','buyone_getone'=>'1','hot_new'=>'1',
                'trend'=>'1','image_one'=>asset('public/media/product/BMW.jpg'),'image_two'=>asset('public/media/product/bmw22.jpeg'),'image_three'=>asset('public/media/product/bmw3.jpeg'),'status'=>'1'],
            ['id' => 3, 'category_id' => '3','subcategory_id'=>'6','brand_id'=>'1','product_name'=>'Mercedes','product_code'=>'ZZAR',
                'product_quantity'=>'30','product_details'=>'Mercedes-Benz is shaping the next generation of contemporary and individual mobility with innovations that focus on people','product_color'=>'Blue','product_size'=>'Large','selling_price'=>'23000','discount_price'=>'10',
                'video_link'=>'https://www.youtube.com/watch?v=fzD6S1dMhrw','main_slider'=>'1','hot_deal'=>'1','best_rated'=>'1','mid_slider'=>'1','buyone_getone'=>'1','hot_new'=>'1',
                'trend'=>'1','image_one'=>asset('public/media/product/mercedes.jpeg'),'image_two'=>asset('public/media/product/mercedes2.jpg'),'image_three'=>asset('public/media/product/mercedes3.jpg'),'status'=>'1'],
            ['id' => 4, 'category_id' => '4','subcategory_id'=>'7','brand_id'=>'4','product_name'=>'Audi','product_code'=>'LKAA',
                'product_quantity'=>'25','product_details'=>'The S-Class stands for the fascination of Mercedes-Benz: legendary and traditional engineering expertise defines the luxury segment in the automobile industry.','product_color'=>'red','product_size'=>'Small','selling_price'=>'30000','discount_price'=>'60',
                'video_link'=>'https://www.youtube.com/watch?v=U9rUTPhLwy0','main_slider'=>'1','hot_deal'=>'1','best_rated'=>'1','mid_slider'=>'1','buyone_getone'=>'1','hot_new'=>'1',
                'trend'=>'1','image_one'=>asset('public/media/product/Audi.jpeg'),'image_two'=>asset('public/media/product/Audi2.jpeg'),'image_three'=>asset('public/media/product/Audi3.jpg'),'status'=>'1'],
            ['id' => 5, 'category_id' => '2','subcategory_id'=>'2','brand_id'=>'5','product_name'=>'Volkswagen','product_code'=>'OOWQ',
                'product_quantity'=>'50','product_details'=>'The active ambient lighting (optional extra) supplements ambient lighting (standard equipment) with an additional layer of light. With around 250 LEDs it is integrated into the driving assistance systems, and is able to reinforce their warnings visually','product_color'=>'White','product_size'=>'Small','selling_price'=>'','discount_price'=>'40000',
                'video_link'=>'https://www.youtube.com/watch?v=jm9xqRKbP1A','main_slider'=>'1','hot_deal'=>'1','best_rated'=>'1','mid_slider'=>'1','buyone_getone'=>'1','hot_new'=>'1',
                'trend'=>'1','image_one'=>asset('public/media/product/volkswagen.jpeg'),'image_two'=>asset('public/media/product/volkswagen2.jpg'),'image_three'=>asset('public/media/product/wolkswagen3.jpeg'),'status'=>'1'],
        ];

        foreach ($items as $item) {
            \App\Models\Product::create($item);
        }
    }
}
