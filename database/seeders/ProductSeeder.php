<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                "name"=>"Redmi Note 7s",
                "category"=>"Mobile",
                "price"=>"18000",
                "description"=>"4gb ram, High quality HD Display",
                "gallery"=>"https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-7s-1.jpg",
            ],
            [
                "name"=>"Smart TV",
                "category"=>"TV",
                "price"=>"60000",
                "description"=>"55inch smart TV, High quality HD Display",
                "gallery"=>"https://images.hindustantimes.com/tech/img/2020/10/15/960x540/image_(23)_1602756606080_1602756611186.jpg",
            ],
            [
                "name"=>"BMW",
                "category"=>"Car",
                "price"=>"1800000",
                "description"=>"BMW, High quality",
                "gallery"=>"https://specials-images.forbesimg.com/imageserve/5d3703e2f1176b00089761a6/960x0.jpg?cropX1=836&cropX2=5396&cropY1=799&cropY2=3364",
            ],
            [
                "name"=>"Aston Martin",
                "category"=>"Motor Bike",
                "price"=>"1800000",
                "description"=>"This is the Brand",
                "gallery"=>"https://economictimes.indiatimes.com/thumb/msid-71939224,width-1200,height-900,resizemode-4,imgsize-482211/the-amb-001-by-aston-martin.jpg?from=mdr",
            ],
        ]);
    }
}
