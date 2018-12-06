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
        // DB::table('users')->insert([
        //     'login'=>'sysuser',
        //     'name'=>'Sys',
        //     'surname'=>'User',
        //     'password'=>bcrypt('alaola12'),
        // ]);
        // DB::table('users')->insert([
        //     'login'=>'mjakuszewski',
        //     'name'=>'Mariusz',
        //     'surname'=>'Jakuszewski',
        //     'password'=>bcrypt('alaola12'),
        // ]);
                DB::table('users')->insert([
            'login'=>'wfendrych',
            'name'=>'Witold',
            'surname'=>'Fendrych',
            'password'=>bcrypt('alaola12'),
        ]);
                DB::table('users')->insert([
            'login'=>'loracz',
            'name'=>'Łukasz',
            'surname'=>'Oracz',
            'password'=>bcrypt('alaola12'),
        ]);
    }
}
