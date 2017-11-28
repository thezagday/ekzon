<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('test123456789'),
            'admin' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Roman Zagday',
            'email' => 'zagday@gmail.com',
            'password' => bcrypt('zagday'),
            'admin' => 0
        ]);
    }
}
