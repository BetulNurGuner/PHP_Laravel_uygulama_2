<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name'=>"Betul",
            'email'=>"betul2@gmail.com",
            'surname'=>"Guner",
            'password'=>md5('123456'),
            'created_at'=>"2020-01-17"
            //'updated_at'=
        ]);
        
    }
}
