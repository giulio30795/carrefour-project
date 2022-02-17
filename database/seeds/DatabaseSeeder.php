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
            AllergensSeeder::class,
            BannersTableSeeder::class,
            CategoriesSeeder::class,
            FoodsSeeder::class,
        ]);
    }
}
