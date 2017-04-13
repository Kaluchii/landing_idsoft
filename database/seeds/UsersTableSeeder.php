<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'idsoft',
            'email' => 'sales@idsoft.kz',
            'password' => bcrypt('24621'),
        ]);
    }
}
