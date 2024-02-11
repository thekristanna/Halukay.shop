<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders_product')->delete();
        
        \DB::table('orders_product')->insert(array (
            0 => 
            array (
                'op_id' => 7,
                'order_id' => 7,
                'product_id' => 1,
                'shopper_id' => 7,
            ),
            1 => 
            array (
                'op_id' => 8,
                'order_id' => 7,
                'product_id' => 2,
                'shopper_id' => 7,
            ),
            2 => 
            array (
                'op_id' => 9,
                'order_id' => 7,
                'product_id' => 3,
                'shopper_id' => 7,
            ),
            3 => 
            array (
                'op_id' => 10,
                'order_id' => 7,
                'product_id' => 4,
                'shopper_id' => 7,
            ),
            4 => 
            array (
                'op_id' => 11,
                'order_id' => 8,
                'product_id' => 13,
                'shopper_id' => 7,
            ),
            5 => 
            array (
                'op_id' => 12,
                'order_id' => 8,
                'product_id' => 14,
                'shopper_id' => 7,
            ),
        ));
        
        
    }
}