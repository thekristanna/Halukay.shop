<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LikeProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('like_products')->delete();
        
        \DB::table('like_products')->insert(array (
            0 => 
            array (
                'like_id' => 1,
                'product_id' => 22,
                'shopper_id' => 7,
                'seller_id' => 1,
            ),
            1 => 
            array (
                'like_id' => 2,
                'product_id' => 21,
                'shopper_id' => 7,
                'seller_id' => 1,
            ),
            2 => 
            array (
                'like_id' => 3,
                'product_id' => 20,
                'shopper_id' => 7,
                'seller_id' => 1,
            ),
            3 => 
            array (
                'like_id' => 4,
                'product_id' => 50,
                'shopper_id' => 7,
                'seller_id' => 5,
            ),
        ));
        
        
    }
}