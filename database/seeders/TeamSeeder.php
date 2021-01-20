<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("teams")->insert([
            "path" => "../../img/team/1.jpg",
            "name" => "Christinne Williams",
            "title" => "PROJECT MANAGER",
            
        ]);
        DB::table("teams")->insert([
            "path" => "../../img/team/2.jpg",
            "name" => "Christinne Williams",
            "title" => "CEO",
            
        ]);
        DB::table("teams")->insert([
            "path" => "../../img/team/3.jpg",
            "name" => "Christinne Williams",
            "title" => "DIGITAL DESIGNER",
            
        ]);
    }
}
