<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
            'name' => 'Rido Ananda',
            'email' => 'ridoananda123@gmail.com',
            'email_verified_at' => null,
            'password' => bcrypt('password'),
        ]);
    }
}
