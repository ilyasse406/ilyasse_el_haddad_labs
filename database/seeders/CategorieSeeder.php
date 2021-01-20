<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            "name" => "Jeuxvideo",
        ]);
        DB::table("categories")->insert([
            "name" => "Sport",
        ]);
        DB::table("categories")->insert([
            "name" => "Fait divers",
        ]);
        DB::table("categories")->insert([
            "name" => "Musique",
        ]);
        DB::table("categories")->insert([
            "name" => "Pegi 18+",
        ]);
        DB::table("categories")->insert([
            "name" => "Café",
        ]);
    }
}
