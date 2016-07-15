<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
        $this->call('DesignersTableSeeder');
        $this->call('PrintersTableSeeder');
        $this->call('CountriesTableSeeder');
        $this->call('RepositoriesTableSeeder');
        //$this->call('MastesTableSeeder');

        Model::reguard();
    }
}
