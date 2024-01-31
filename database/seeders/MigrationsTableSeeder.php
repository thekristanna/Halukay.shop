<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2024_01_31_081114_create_notifications_table',
                'batch' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2024_01_31_081114_create_orders_table',
                'batch' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2024_01_31_081114_create_product_table',
                'batch' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2024_01_31_081114_create_seller_rating_table',
                'batch' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2024_01_31_081114_create_shopper_rating_table',
                'batch' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2024_01_31_081114_create_users_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}