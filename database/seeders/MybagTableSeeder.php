<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MybagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mybag')->delete();
        
        \DB::table('mybag')->insert(array (
            0 => 
            array (
                'bag_id' => 13,
                'shopper_id' => 7,
                'seller_id' => 1,
                'product_id' => 13,
            ),
            1 => 
            array (
                'bag_id' => 14,
                'shopper_id' => 7,
                'seller_id' => 1,
                'product_id' => 14,
            ),
            2 => 
            array (
                'bag_id' => 22,
                'shopper_id' => 7,
                'seller_id' => 0,
                'product_id' => 1,
            ),
            3 => 
            array (
                'bag_id' => 23,
                'shopper_id' => 7,
                'seller_id' => 0,
                'product_id' => 2,
            ),
            4 => 
            array (
                'bag_id' => 24,
                'shopper_id' => 7,
                'seller_id' => 0,
                'product_id' => 3,
            ),
            5 => 
            array (
                'bag_id' => 25,
                'shopper_id' => 7,
                'seller_id' => 0,
                'product_id' => 4,
            ),
        ));
        
        
    }
}