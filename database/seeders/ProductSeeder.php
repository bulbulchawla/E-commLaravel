<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Television',
                'price'=>'12,000',
                'category'=>'tv',
                'description'=>'Led smart android tv ',
                'gallery'=>'https://www.bajajfinserv.in/Image_LED_TV_1_LED_354x202_desktop.jpg'
            ],
            [
                'name'=>'Refridgerater',
                'price'=>'22,000',
                'category'=>'fridge',
                'description'=>'L.G. best Refridgerator in india',
                'gallery'=>'https://www.lg.com/in/images/refrigerators/md06235097/gallery/GL-T372JPZ3-Refrigerators-Front-View-D-01-v1.jpg',
            ],
    ]);
    }
}
