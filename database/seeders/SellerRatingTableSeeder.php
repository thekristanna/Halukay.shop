<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellerRatingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seller_rating')->delete();
        
        \DB::table('seller_rating')->insert(array (
            0 => 
            array (
                'rating_id' => 2,
                'order_id' => 7,
                'seller_id' => 0,
                'shopper_id' => 7,
                'rate' => 3,
                'comment' => 'This is sample with rate of 3',
            ),
        ));
        
        
    }
}