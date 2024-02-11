<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShopperRatingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shopper_rating')->delete();
        
        \DB::table('shopper_rating')->insert(array (
            0 => 
            array (
                'rating_id' => 1,
                'order_id' => 13,
                'shopper_id' => 7,
                'seller_id' => 0,
                'rate' => 5,
                'comment' => 'VERY GOOD',
            ),
        ));
        
        
    }
}