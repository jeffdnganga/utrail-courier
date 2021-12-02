<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Daniel',
            'email' => 'daniels@gmai.com',
            'role_id'=> 1,
            'phone_no'=>0701234567,
            'password'=>Hash::make('daniels123')
        ]);

        DB::table('users')->insert([
            'name' => 'Jeff',
            'email' => 'jeff@gmai.com',
            'role_id' => 2,
            'phone_no' => 0701234567,
            'password' => Hash::make('jeff0123')
        ]);


        DB::table('users')->insert([
            'name' => 'Mbuci',
            'email' => 'mbuci@gmai.com',
            'role_id' => 3,
            'phone_no' => 0701234567,
            'password' => Hash::make('mbuci123')
        ]);
    }
}
