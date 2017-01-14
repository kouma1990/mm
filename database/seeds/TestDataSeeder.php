<?php

use Illuminate\Database\Seeder;
use App\Models\Designer;
use App\Models\Printer;
use App\Models\Country;
use App\Models\Repository;
use App\User;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "kouma",
            "email" => "kouma1990@gmail.com",
            "password" => bcrypt("password"),
        ]);

        DB::table('designers')->delete();
        Designer::create(['name' => "melomoon", "user_id" => $user->id]);
        Designer::create(['name' => "DoramaticBlue", "user_id" => $user->id]);

        DB::table('printers')->delete();
        Printer::create(['name' => 'カモイ', "user_id" => $user->id]);
        Printer::create(['name' => 'マルテン', "user_id" => $user->id]);

        DB::table('countries')->delete();
        Country::create(['name' => '日本', "user_id" => $user->id]);
        Country::create(['name' => '韓国', "user_id" => $user->id]);
        Country::create(['name' => '中国', "user_id" => $user->id]);
        Country::create(['name' => '台湾', "user_id" => $user->id]);

        DB::table('repositories')->delete();
        Repository::create(['name' => '右下', "user_id" => $user->id]);
        Repository::create(['name' => '左下', "user_id" => $user->id]);
    }
}
