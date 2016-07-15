<?php

use Illuminate\Database\Seeder;
use App\Models\Designer;

class DesignersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('designers')->delete();

        Designer::create([
            'name' => "melomoon"
        ]);

        Designer::create([
            'name' => "DoramaticBlue"
        ]);


    }
}
