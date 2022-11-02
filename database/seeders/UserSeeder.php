<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Alixe',
                'firstname'=>'Johan',
                'age'=>'22',
                'adress'=>'place de la minoterie',
                'email'=>'admin@admin.com',
                'password'=>Hash::make('admin@admin.com'),
                'role_id'=> 1
            ],
            [
                'name'=>'Alixefrfga',
                'firstname'=>'Johan',
                'age'=>'22',
                'adress'=>'place de la minoterie',
                'email'=>'admin1@admin.com',
                'password'=>Hash::make('admin@admin.com'),
                'role_id'=> 1
            ],
            [
                'name'=>'Alixerwe',
                'firstname'=>'Johan',
                'age'=>'22',
                'adress'=>'place de la minoterie',
                'email'=>'admin2@admin.com',
                'password'=>Hash::make('admin@admin.com'),
                'role_id'=> 1
            ]
        ]);
    }
}
