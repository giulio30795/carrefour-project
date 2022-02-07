<?php

use Illuminate\Database\Seeder;
use App\Allergen;

class AllergensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allergens = config('foods');
        foreach ($allergens as $allergen) {
            $new_allergen = new Allergen();
            $new_allergen->name = $allergen;
            $new_allergen->save();
        }
    }
}
