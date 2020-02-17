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
        DB::table('users')->insert([
        	'name' => 'Admin',
        	'email' => 'vuoncayviet2019.vn@gmail.com',
        	'password' => Hash::make('12345678'),
        	'role' => 1
        ]);
    }
}
