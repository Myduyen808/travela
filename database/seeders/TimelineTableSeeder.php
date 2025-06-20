<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimelineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tbl_timeline")->insert([
            [
                "timeLineid" => "1",
                "tourid" => "1",
                "tl_title" => "test title timeline 4444",
                "tl_description" => "test title description 4444"
            ],
            [
                "tourid" => "1",
                "tl_title" => "test title timeline 2222",
                "tl_description" => "test title description 2222"
            ],
            [
                "tourid" => "1",
                "tl_title" => "test title timeline 3333",
                "tl_description" => "test title description 3333"
            ],
        ]);
    }
}
