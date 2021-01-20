<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("videos")->insert([
            "path" => "../../img/video.jpg",
            "link" => "https://www.youtube.com/watch?v=G4wTERfoPfA&ab_channel=MagicalMessi",
            
        ]);
    }
}
