<?php

use Illuminate\Database\Seeder;
use App\Models\Repository;

class RepositoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('repositories')->delete();

        Repository::create([
            'name' => '右下'
        ]);

        Repository::create([
            'name' => '左下'
        ]);
    }
}
