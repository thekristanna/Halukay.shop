<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'order_id' => 10,
                'collect_op' => 'delivery',
                'payment' => 'cash',
                'seller_id' => 0,
                'shopper_id' => 7,
                'status_seller' => 'Order Complete',
                'status_shopper' => 'Order Complete',
            ),
            1 => 
            array (
                'order_id' => 11,
                'collect_op' => 'delivery',
                'payment' => 'cash',
                'seller_id' => 1,
                'shopper_id' => 7,
                'status_seller' => 'Order Submitted',
                'status_shopper' => 'Waiting Confirmation',
            ),
            2 => 
            array (
                'order_id' => 12,
                'collect_op' => 'delivery',
                'payment' => 'cash',
                'seller_id' => 1,
                'shopper_id' => 7,
                'status_seller' => 'Order Submitted',
                'status_shopper' => 'Waiting Confirmation',
            ),
            3 => 
            array (
                'order_id' => 13,
                'collect_op' => 'delivery',
                'payment' => 'cash',
                'seller_id' => 0,
                'shopper_id' => 7,
                'status_seller' => 'Order Submitted',
                'status_shopper' => 'Waiting Confirmation',
            ),
        ));
        
        
    }
}