<?php

use Illuminate\Database\Seeder;
use App\Models\Printer;

class PrintersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('printers')->delete();

        Printer::create([
            'name' => 'カモイ'
        ]);

        Printer::create([
            'name' => 'マルテン'
        ]);
    }
}
