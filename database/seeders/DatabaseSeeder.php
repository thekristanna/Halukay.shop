<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(NotificationsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(SellerRatingTableSeeder::class);
        $this->call(ShopperRatingTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
