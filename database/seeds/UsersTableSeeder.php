<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = [
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@tdics.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ],[
                'id' => 2,
                'name' => 'company',
                'email' => 'company@tdics.com',
                'password' => Hash::make('123456'),
                'role' => 'company',
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ],[
                'id' => 3,
                'name' => 'indi',
                'email' => 'indi@tdics.com',
                'password' => Hash::make('123456'),
                'role' => 'individual',
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ]
        ];
        DB::table('users')->insert($users);  
    }
}
