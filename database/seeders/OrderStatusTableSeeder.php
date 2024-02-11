<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_status')->delete();
        
        \DB::table('order_status')->insert(array (
            0 => 
            array (
                'os_id' => 14,
                'order_id' => 13,
                'date_time' => '2024-02-12 01:13:49',
                'status' => 'Rate shopper experience',
            ),
            1 => 
            array (
                'os_id' => 15,
                'order_id' => 13,
                'date_time' => '2024-02-12 01:13:53',
            'status' => 'Seller(@daiben) confirmed order is delivered.',
            ),
            2 => 
            array (
                'os_id' => 16,
                'order_id' => 13,
                'date_time' => '2024-02-12 01:13:56',
            'status' => 'Seller(@daiben) is preparing your order.',
            ),
            3 => 
            array (
                'os_id' => 17,
                'order_id' => 13,
                'date_time' => '2024-02-12 01:13:59',
                'status' => 'Rate shopper experience',
            ),
            4 => 
            array (
                'os_id' => 18,
                'order_id' => 13,
                'date_time' => '2024-02-12 01:14:11',
                'status' => 'Rate shopper experience',
            ),
            5 => 
            array (
                'os_id' => 19,
                'order_id' => 13,
                'date_time' => '2024-02-12 01:38:53',
                'status' => 'Rate seller experience',
            ),
        ));
        
        
    }
}