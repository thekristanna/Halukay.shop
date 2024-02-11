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
                'like_id' => 3,
                'product_id' => 20,
                'shopper_id' => 7,
                'seller_id' => 1,
            ),
            2 => 
            array (
                'like_id' => 4,
                'product_id' => 50,
                'shopper_id' => 7,
                'seller_id' => 5,
            ),
            3 => 
            array (
                'like_id' => 42,
                'product_id' => 6,
                'shopper_id' => 7,
                'seller_id' => 0,
            ),
            4 => 
            array (
                'like_id' => 43,
                'product_id' => 4,
                'shopper_id' => 7,
                'seller_id' => 0,
            ),
            5 => 
            array (
                'like_id' => 44,
                'product_id' => 2,
                'shopper_id' => 7,
                'seller_id' => 0,
            ),
            6 => 
            array (
                'like_id' => 45,
                'product_id' => 1,
                'shopper_id' => 7,
                'seller_id' => 0,
            ),
        ));
        
        
    }
}