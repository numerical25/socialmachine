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
        //
        DB::table('users')->insert([
            'name' => 'Anthony Gordon',
            'email' => 'anthonylgordon25@gmail.com',
            'password' => bcrypt('number25'),
        ]);
        DB::table('users')->insert([
            'name' => 'John Newman',
            'email' => 'test@gmail.com',
            'password' => bcrypt('number25'),
        ]);
    }
}
