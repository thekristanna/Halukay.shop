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
                'op_id' => 17,
                'order_id' => 10,
                'product_id' => 1,
                'shopper_id' => 7,
            ),
            1 => 
            array (
                'op_id' => 18,
                'order_id' => 10,
                'product_id' => 2,
                'shopper_id' => 7,
            ),
            2 => 
            array (
                'op_id' => 19,
                'order_id' => 10,
                'product_id' => 3,
                'shopper_id' => 7,
            ),
            3 => 
            array (
                'op_id' => 20,
                'order_id' => 10,
                'product_id' => 4,
                'shopper_id' => 7,
            ),
            4 => 
            array (
                'op_id' => 21,
                'order_id' => 11,
                'product_id' => 13,
                'shopper_id' => 7,
            ),
            5 => 
            array (
                'op_id' => 22,
                'order_id' => 11,
                'product_id' => 14,
                'shopper_id' => 7,
            ),
            6 => 
            array (
                'op_id' => 23,
                'order_id' => 12,
                'product_id' => 13,
                'shopper_id' => 7,
            ),
            7 => 
            array (
                'op_id' => 24,
                'order_id' => 12,
                'product_id' => 14,
                'shopper_id' => 7,
            ),
            8 => 
            array (
                'op_id' => 25,
                'order_id' => 13,
                'product_id' => 1,
                'shopper_id' => 7,
            ),
            9 => 
            array (
                'op_id' => 26,
                'order_id' => 13,
                'product_id' => 2,
                'shopper_id' => 7,
            ),
            10 => 
            array (
                'op_id' => 27,
                'order_id' => 13,
                'product_id' => 7,
                'shopper_id' => 7,
            ),
        ));
        
        
    }
}