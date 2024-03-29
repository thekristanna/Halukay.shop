<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'user_id' => 0,
                'first_name' => 'Daiben',
                'last_name' => 'Sanchez',
                'email_address' => 'daiben@gmail.com',
                'username' => 'daiben',
                'display_name' => '@daiben',
                'password' => '$2y$12$kIgeE2kGcB1wwyS5NU8DiO0vjoaGQeQ.Dy/p21XAoWrCiCSUau476',
                'phone_number' => '09123456789',
                'address_street' => '123 Angelo St.',
                'address_barangay' => 'San Isidro',
                'address_citytown' => 'Quezon City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1100',
                'role' => 'seller',
                'profile_photo' => '202402061154000000daiben.png',
            ),
            1 => 
            array (
                'user_id' => 1,
                'first_name' => 'Queza',
                'last_name' => 'Fabela',
                'email_address' => 'queza@gmail.com',
                'username' => 'queza',
                'display_name' => '@queza',
                'password' => '$2y$12$GRG8d5qdA35Tmc9Tv9OHxeEpTkGQYAXTfw.s74JdGTJVn340ZVPBy',
                'phone_number' => '0917-4747713',
                'address_street' => '456 Kalayaan Ave.',
                'address_barangay' => 'Maginhawa',
                'address_citytown' => 'Makati City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1200',
                'role' => 'seller',
                'profile_photo' => '202402061155000000Queza.jpeg',
            ),
            2 => 
            array (
                'user_id' => 2,
                'first_name' => 'Dante',
                'last_name' => 'Magbuhos',
                'email_address' => 'djmagbuhos@gmail.com',
                'username' => 'djmagbuhos',
                'display_name' => '@djmagbuhos',
                'password' => '$2y$12$yFLGQSu6hL5AixcpJC9b9.sf.pKOYJTs3xqkP49YeL97O4vISf0rG',
                'phone_number' => '09123654789',
                'address_street' => '123 Sawani Mari St.',
                'address_barangay' => 'Sta. Cruz',
                'address_citytown' => 'Manila',
                'address_province' => 'Metro Manila',
                'address_zip' => '1000',
                'role' => 'seller',
                'profile_photo' => '202402061157000000Dante.jpg',
            ),
            3 => 
            array (
                'user_id' => 3,
                'first_name' => 'Paul',
                'last_name' => 'Quiachon',
                'email_address' => 'john@gmail.com',
                'username' => 'paul',
                'display_name' => '@paul',
                'password' => '$2y$12$FWgi5r1S0kh0NJkUL3MpOeQb2HPW.i0pU2VmnfG.4a/e3NBaR2yny',
                'phone_number' => '09369852147',
                'address_street' => '1010 Mabini Lane',
                'address_barangay' => 'Bagumbayan',
                'address_citytown' => 'Taguig City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1630',
                'role' => 'seller',
                'profile_photo' => '202402061158000000Paul.jpeg',
            ),
            4 => 
            array (
                'user_id' => 5,
                'first_name' => 'Tanna',
                'last_name' => 'Slay',
                'email_address' => 'tanna@gmail.com',
                'username' => 'tanna',
                'display_name' => '@tanna',
                'password' => '$2y$12$c26TTPWX1MybZ5jP7MRCReK.TEMuUoZ2x3agrnp/PuIPk/hDv.4O2',
                'phone_number' => '09170259742',
                'address_street' => '1112 Bonifacio Drive',
                'address_barangay' => 'Poblacion',
                'address_citytown' => 'Pasig City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1600',
                'role' => 'seller',
                'profile_photo' => '202402061159000000Tanna.png',
            ),
            5 => 
            array (
                'user_id' => 6,
                'first_name' => 'Christian Jay',
                'last_name' => 'Salvino',
                'email_address' => 'cj@gmail.com',
                'username' => 'cj',
                'display_name' => '@cj',
                'password' => '$2y$12$lpZTw9ipjOi2bZgQUmMKOerQYV.IJAbKevhYFVzyu9Ex8YhDhxsFO',
                'phone_number' => '09171350692',
                'address_street' => '1314 Malakas St.',
                'address_barangay' => 'San Antonio',
                'address_citytown' => 'Parañaque City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1700',
                'role' => 'shopper',
                'profile_photo' => '202402061200000000CJ.jpg',
            ),
            6 => 
            array (
                'user_id' => 7,
                'first_name' => 'Kevin',
                'last_name' => 'Daus',
                'email_address' => 'kevin@gmail.com',
                'username' => 'kevin',
                'display_name' => '@kevin',
                'password' => '$2y$12$rJeRCLRaJW5w2YruUSgSdu0U8/Xb6XmO1vuwyoupYJoebk.fbdiPK',
                'phone_number' => '09172255626',
                'address_street' => '1516 Maginhawa St.',
                'address_barangay' => 'Krus na Ligas',
                'address_citytown' => 'Quezon City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1101',
                'role' => 'shopper',
                'profile_photo' => '202402061201000000Kevin.jpeg',
            ),
            7 => 
            array (
                'user_id' => 8,
                'first_name' => 'Maynard',
                'last_name' => 'Villalobos',
                'email_address' => 'maynard@gmail.com',
                'username' => 'maynard',
                'display_name' => '@maynard',
                'password' => '$2y$12$GKTBJxW4et4Gs/yG/.9rBe9IK4zknfuTf9h.ipeJu41lP3ssuDAza',
                'phone_number' => '09175964817',
                'address_street' => '1718 Roxas Blvd.',
                'address_barangay' => 'Tambo',
                'address_citytown' => 'Pasay City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1300',
                'role' => 'shopper',
                'profile_photo' => '202402061201000000Maynard.jpeg',
            ),
            8 => 
            array (
                'user_id' => 9,
                'first_name' => 'April',
                'last_name' => 'Ipac',
                'email_address' => 'april@gmail.com',
                'username' => 'april',
                'display_name' => '@april',
                'password' => '$2y$12$FimCN6LdVhc6sZASkyCwyO2BnvfrrGNnyTwlU1XJWzpWPDDEZDeOu',
                'phone_number' => '09176067490',
                'address_street' => '1920 Del Pilar Ave.',
                'address_barangay' => 'San Miguel',
                'address_citytown' => 'Manila',
                'address_province' => 'Metro Manila',
                'address_zip' => '1005',
                'role' => 'shopper',
                'profile_photo' => '202402061202000000April.jpg',
            ),
            9 => 
            array (
                'user_id' => 10,
                'first_name' => 'Jehd',
                'last_name' => 'Jandoc',
                'email_address' => 'jehd@gmail.com',
                'username' => 'jehd',
                'display_name' => '@jehd',
                'password' => '$2y$12$34JRNBrD60GLNMYRwLMlLuFgCBQK72OhwuOJL8YZlQ8ZoIAJkEw7a',
                'phone_number' => '09171412214',
                'address_street' => '2122 Aguinaldo St.',
                'address_barangay' => 'Palanan',
                'address_citytown' => 'Makati City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1235',
                'role' => 'shopper',
                'profile_photo' => '202402061203000000Jehd.jpg',
            ),
            10 => 
            array (
                'user_id' => 11,
                'first_name' => 'Christian Jeuel',
                'last_name' => 'Venturina',
                'email_address' => 'jeuel@gmail.com',
                'username' => 'christian',
                'display_name' => '@christian',
                'password' => '$2y$12$k87BSIq88VQTb4uiQj0kPuGZdIJZEKlG2vE4B51DpwGcyu40Wj/.K',
                'phone_number' => '09178327730',
                'address_street' => '2324 Balagtas St.',
                'address_barangay' => 'Santo Niño',
                'address_citytown' => 'Marikina City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1800',
                'role' => 'shopper',
                'profile_photo' => '202402061204000000Jueul.jpg',
            ),
            11 => 
            array (
                'user_id' => 12,
                'first_name' => 'Jeinin',
                'last_name' => 'Arellano',
                'email_address' => 'jeinin@gmail.com',
                'username' => 'jeinin',
                'display_name' => '@jeinin',
                'password' => '$2y$12$M1GZWDRkeFCWE7p2ywdM..aqodTR4FsGSJYQ7nFTZ4/z7OxjN/DiO',
                'phone_number' => '0917-8548263',
                'address_street' => '2526 Lapu-Lapu Ave.',
                'address_barangay' => 'Maybunga',
                'address_citytown' => 'Pasig City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1607',
                'role' => 'shopper',
                'profile_photo' => '202402061207000000jeinin.jpg',
            ),
            12 => 
            array (
                'user_id' => 13,
                'first_name' => 'Rafael',
                'last_name' => 'Uchi',
                'email_address' => 'rafael@gmail.com',
                'username' => 'rafael',
                'display_name' => '@rafael',
                'password' => '$2y$12$ivPM2YZF6ccBFly6IQKO7utnDEPtV.vBgEeCeNdJKCnBDh5Sa1MV6',
                'phone_number' => '09171792646',
                'address_street' => '2728 Katipunan Rd.',
                'address_barangay' => 'Loyola Heights',
                'address_citytown' => 'Quezon City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1108',
                'role' => 'shopper',
                'profile_photo' => '202402061208000000Rafael.jpeg',
            ),
            13 => 
            array (
                'user_id' => 14,
                'first_name' => 'Keith',
                'last_name' => 'Aquino',
                'email_address' => 'keith@gmail.com',
                'username' => 'keith',
                'display_name' => '@keith',
                'password' => '$2y$12$y5B0lWdgvM/TZN7qHJUr7e4F38bT1ju/E4Tl5s6NPiKXfnOWqRip6',
                'phone_number' => '09178692271',
                'address_street' => '2930 Osmeña St.',
                'address_barangay' => 'San Lorenzo',
                'address_citytown' => 'Makati City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1223',
                'role' => 'shopper',
                'profile_photo' => '202402061210000000keith.jpg',
            ),
            14 => 
            array (
                'user_id' => 15,
                'first_name' => 'Rendell',
                'last_name' => 'Soberano',
                'email_address' => 'rendell@gmail.com',
                'username' => 'rendell',
                'display_name' => '@rendell',
                'password' => '$2y$12$2ZnkOE46YfH56v/dGB1hEOh43/mYIjB6PTTtBA7kHhJbfHn0Vj5m6',
                'phone_number' => '09171981657',
                'address_street' => '3132 Magsaysay Blvd.',
                'address_barangay' => 'Santa Mesa',
                'address_citytown' => 'Manila',
                'address_province' => 'Metro Manila',
                'address_zip' => '1016',
                'role' => 'shopper',
                'profile_photo' => '202402061211000000Rendell.png',
            ),
            15 => 
            array (
                'user_id' => 16,
                'first_name' => 'Angelica',
                'last_name' => 'Libang',
                'email_address' => 'angelica@gmail.com',
                'username' => 'angelica',
                'display_name' => '@rendell',
                'password' => '$2y$12$fVq0SBUXyStQeq/ZJZ9TiuB/is5lYYX5jDX3RP6eFN/q6RFFdzKx.',
                'phone_number' => '09171513598',
                'address_street' => '3334 Luna St.',
                'address_barangay' => 'Ususan',
                'address_citytown' => 'Taguig City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1639',
                'role' => 'shopper',
                'profile_photo' => '202402061213000000angelica.jpg',
            ),
            16 => 
            array (
                'user_id' => 17,
                'first_name' => 'Vivien',
                'last_name' => 'Caampued',
                'email_address' => 'vivien@gmail.com',
                'username' => 'vivien',
                'display_name' => '@vivien',
                'password' => '$2y$12$GKdLOPC/YRk1yoK/g5rOqO4F7o1HeJMO48v/BHvNhX/4Tcqx7pEiq',
                'phone_number' => '09178777201',
                'address_street' => '3536 Burgos Ave.',
                'address_barangay' => 'Almanza',
                'address_citytown' => 'Las Piñas City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1750',
                'role' => 'shopper',
                'profile_photo' => '202402061214000000Vivien.jpeg',
            ),
            17 => 
            array (
                'user_id' => 18,
                'first_name' => 'Fernando',
                'last_name' => 'Valenzuela',
                'email_address' => 'fernando@gmail.com',
                'username' => 'fernando',
                'display_name' => '@fernando',
                'password' => '$2y$12$wOVHRep6hSCROndbuA0VwOt8uaQrmqyUr4Pwni57ejOycNFJ794w2',
                'phone_number' => '09171171463',
                'address_street' => '3738 Quezon Ave.',
                'address_barangay' => 'West Triangle',
                'address_citytown' => 'Quezon City',
                'address_province' => 'Metro Manila',
                'address_zip' => '1104',
                'role' => 'shopper',
                'profile_photo' => '202402061214000000Fernando.jpeg',
            ),
            18 => 
            array (
                'user_id' => 19,
                'first_name' => 'Michael',
                'last_name' => 'John',
                'email_address' => 'sample@gmail.com',
                'username' => 'sample1',
                'display_name' => '@sample1',
                'password' => '$2y$12$vPBaym3JcIyoRueUStXHIe2unrFC6nEEdcs1MCeBX6IrZA1hp5uyW',
                'phone_number' => '09995685688',
                'address_street' => 'street',
                'address_barangay' => '321',
                'address_citytown' => 'sample',
                'address_province' => 'sample',
                'address_zip' => '3214',
                'role' => 'seller',
                'profile_photo' => '202402070651000000michael.jpg',
            ),
        ));
        
        
    }
}