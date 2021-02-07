<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class z0zseeder extends Seeder
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
            'Fname'=> 'Z0Z KOP',
            'email'=>'info@zoz.com',
            'password'=>Hash::make('123456'),

        ]);
    }
}
