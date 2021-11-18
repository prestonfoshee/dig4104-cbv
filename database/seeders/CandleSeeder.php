<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candles')->insert([
            'slug' => 'blueberry-pie',
            'name' => 'Blueberry Pie',
            'type' => 'candle',
            'description' => 'Brand new to the CBV lineup! This wonderful desert candle from the Candles by Victoria Scorpio Collection will immediately immerse you in the fall spirit.',
            'img_url' => 'candles-blueberry-pie.png',
            'price' => '19.99'
        ]);

        DB::table('candles')->insert([
            'slug' => 'chocolate-sugar-cookie',
            'name' => 'Chocolate Sugar Cookie',
            'type' => 'candle',
            'description' => 'Brand new to the CBV lineup! This wonderful desert candle from the Candles by Victoria Scorpio Collection will immediately immerse you in the fall spirit.',
            'img_url' => 'candles-chocolate-sugar-cookie.png',
            'price' => '24.99'
        ]);

        DB::table('candles')->insert([
            'slug' => 'gingerbread',
            'name' => 'Gingerbread',
            'type' => 'candle',
            'description' => 'Brand new to the CBV lineup! This wonderful desert candle from the Candles by Victoria Scorpio Collection will immediately immerse you in the fall spirit.',
            'img_url' => 'candles-gingerbread.png',
            'price' => '29.99'
        ]);

        DB::table('candles')->insert([
            'slug' => 'peanut-chocolate-cheesecake',
            'name' => 'Peanut Chocolate Cheesecake',
            'type' => 'candle',
            'description' => 'Brand new to the CBV lineup! This wonderful desert candle from the Candles by Victoria Scorpio Collection will immediately immerse you in the fall spirit.',
            'img_url' => 'candles-peanut-chocolate-cheesecake.png',
            'price' => '19.99'
        ]);

        DB::table('candles')->insert([
            'slug' => 'smores-donut',
            'name' => 'Smores Donut',
            'type' => 'candle',
            'description' => 'Brand new to the CBV lineup! This wonderful desert candle from the Candles by Victoria Scorpio Collection will immediately immerse you in the fall spirit.',
            'img_url' => 'candles-blueberry-pie.png',
            'price' => '19.99'
        ]);
    }
}
