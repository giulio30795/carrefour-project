<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = config('categories');
        foreach ($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category[0];
            $new_category->icon = $category[1];
            $new_category->save();
        }
    }
}
