<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tbl_tours")->insert([
            [
                "tourid" => "1",
                "title" => "BIỂN ĐẢO 3N2Đ | PHÚ QUỐC",
                "description" => "",
                "images" => "",
                "quantity" => "50",
                "priceAdult" => "3690000",
                "priceChild" => "1845000",
                "destination" => "PHÚ QUỐC",
                "availability" => "0",
                "itinerary" => "",
                "startDate" => "2025-05-12",
                "endDate" => "2025-05-14",
                "reviews" => null

            ],
        ]);
    }
}
