<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Food;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foods = config('foods');

        foreach ($foods as $food) {
            $new_food = new Food;
            $new_food->product_name = $food['product_name'];
            $new_food->brand = $food['brand'];
            $new_food->price = $food['price'];
            $new_food->cover = $food['cover'];
            $new_food->conservation = $food['conservation'];
            $new_food->stock = $food['stock'];
            $new_food->quantity = $food['quantity'];
            $new_food->discount = $food['discount'];
            $new_food->discount_end_date = $food['discount_end_date'];
            $new_food->description = $food['description'];
            $new_food->save();
        }
    }
}
