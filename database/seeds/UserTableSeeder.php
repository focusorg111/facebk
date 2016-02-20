<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
    	User::create(array(
        'username' => 'sevilayha',
        'email'    => 'chris@scotch.io',
        'password' => Hash::make('awesome'),
        'Phone'     =>'7894561230',
    ));
    }
}
