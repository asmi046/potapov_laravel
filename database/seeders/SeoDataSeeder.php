<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => "/",
                'seo_title' => "Александр Потапов - Тот самый ведущий",
                'seo_description' => "Александр Потапов - профессиональный ведущий с опытом более 15 лет, свадьбы, банкеты, корпоративные мероприятия",
                'page_title' => "",
            ],
        ];

        DB::table("seo_data")->insert($data);
    }
}
