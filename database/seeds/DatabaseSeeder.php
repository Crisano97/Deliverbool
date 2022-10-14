<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            RestaurantsTableSeeder::class,
            CategoryRestaurantTableSeeder::class,
            DishesTableSeeder::class,
            OrdersTableSeeder::class,
        ]);
    }
}
