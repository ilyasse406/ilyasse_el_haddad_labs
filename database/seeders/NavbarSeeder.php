<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("navbars")->insert([
            "path" => "../../img/logo.png",
            "lien1" => "Home",
            "lien2" => "Service",
            "lien3" => "Blog",
            "lien4" => "Contact",
        ]);
    }
}
