<?php

use Illuminate\Database\Seeder;
use App\Models\Designer;
use App\Models\Printer;
use App\Models\Country;
use App\Models\Repository;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->delete();
        Designer::create(['name' => "melomoon"]);
        Designer::create(['name' => "DoramaticBlue"]);

        DB::table('printers')->delete();
        Printer::create(['name' => 'カモイ']);
        Printer::create(['name' => 'マルテン']);

        DB::table('countries')->delete();
        Country::create(['name' => '日本']);
        Country::create(['name' => '韓国']);
        Country::create(['name' => '中国']);
        Country::create(['name' => '台湾']);

        DB::table('repositories')->delete();
        Repository::create(['name' => '右下']);
        Repository::create(['name' => '左下']);
    }
}
