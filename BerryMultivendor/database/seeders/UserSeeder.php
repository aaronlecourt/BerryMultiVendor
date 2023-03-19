<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'=>'Aaron Lecourt',
            'birthdate'=> Carbon::create('2001', '07', '08'),
            'number'=>'09060747979',
            'email'=>'aaronlecourt@email.com',
            'isVendor'=>'0',
            'password'=>Hash::make('12345')
        ]);
    }
}
