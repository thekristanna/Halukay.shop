<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'notif_id' => 1,
            'content' => 'This is the first sample notification for Seller (Unread)',
                'date_sent' => '2024-02-09 17:42:37',
                'marked_seen' => 0,
                'user_id' => 0,
            ),
            1 => 
            array (
                'notif_id' => 2,
            'content' => 'This is the 2nd sample notification for Seller (Unread)',
                'date_sent' => '2024-02-09 17:42:37',
                'marked_seen' => 0,
                'user_id' => 0,
            ),
            2 => 
            array (
                'notif_id' => 3,
            'content' => 'This is the 3rd sample notification for Seller (read)',
                'date_sent' => '2024-02-09 17:42:37',
                'marked_seen' => 1,
                'user_id' => 0,
            ),
            3 => 
            array (
                'notif_id' => 4,
            'content' => 'This is the 4th sample notification for Seller (Unread)',
                'date_sent' => '2024-02-09 17:42:37',
                'marked_seen' => 0,
                'user_id' => 0,
            ),
            4 => 
            array (
                'notif_id' => 5,
            'content' => 'This is the 5th sample notification for Seller (Unread)',
                'date_sent' => '2024-02-09 17:42:37',
                'marked_seen' => 0,
                'user_id' => 0,
            ),
            5 => 
            array (
                'notif_id' => 6,
            'content' => 'This is the first sample notification for Shopper (Unread)',
                'date_sent' => '2024-02-09 17:43:54',
                'marked_seen' => 0,
                'user_id' => 7,
            ),
            6 => 
            array (
                'notif_id' => 7,
            'content' => 'This is the 2nd sample notification for Shopper (Unread)',
                'date_sent' => '2024-02-09 17:43:54',
                'marked_seen' => 0,
                'user_id' => 7,
            ),
            7 => 
            array (
                'notif_id' => 8,
            'content' => 'This is the 3rd sample notification for Shopper (read)',
                'date_sent' => '2024-02-09 17:43:54',
                'marked_seen' => 1,
                'user_id' => 7,
            ),
            8 => 
            array (
                'notif_id' => 9,
            'content' => 'This is the 4th sample notification for Shopper (Unread)',
                'date_sent' => '2024-02-09 17:43:54',
                'marked_seen' => 0,
                'user_id' => 7,
            ),
            9 => 
            array (
                'notif_id' => 10,
            'content' => 'This is the 5th sample notification for Shopper (Unread)',
                'date_sent' => '2024-02-09 17:43:54',
                'marked_seen' => 0,
                'user_id' => 7,
            ),
        ));
        
        
    }
}