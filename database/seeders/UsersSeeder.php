<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'PakGuru',
        	'role' => 'admin',
        	'email'=> 'adminsekolah@gmail.com',
        	'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
        	'name' => 'Agung Ramdhan',
        	'role' => 'siswa',
        	'siswa_id' => 1,
        	'email'=> 'agung@gmail.com',
        	'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
        	'name' => 'Daria Rusia',
        	'role' => 'siswa',
        	'siswa_id' => 2,
        	'email'=> 'daria@gmail.com',
        	'password' => bcrypt('password123')
        ]);
    }
}
