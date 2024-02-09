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

        \DB::table('mybag')->insert(array(
            0 =>
            array(
                'bag_id' => 9,
                'shopper_id' => 6,
                'seller_id' => 1,
                'product_id' => 1,
            ),
            1 =>
            array(
                'bag_id' => 10,
                'shopper_id' => 6,
                'seller_id' => 2,
                'product_id' => 2,
            ),
            2 =>
            array(
                'bag_id' => 11,
                'shopper_id' => 6,
                'seller_id' => 0,
                'product_id' => 2,
            ),
        ));
    }
}
