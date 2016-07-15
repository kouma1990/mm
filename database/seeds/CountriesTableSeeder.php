<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        Country::create([
            'name' => '日本'
        ]);

        Country::create([
            'name' => '韓国'
        ]);

        Country::create([
            'name' => '中国'
        ]);

        Country::create([
            'name' => '台湾'
        ]);
    }
}
