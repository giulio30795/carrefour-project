<?php

use Illuminate\Database\Seeder;
use App\Banner;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners = config('banners');

        foreach($banners as $banner){
            $new_banner = new Banner();

            $new_banner->name = $banner['name'];
            $new_banner->cover = $banner['cover'];

            $new_banner->save();
        } 

    }
}
