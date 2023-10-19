<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
        	'nama' => 'Agung Ramadhan',
        	'nis' => 101,
        	'tgl_lahir' => '2000-12-14'
        ]);

        DB::table('siswa')->insert([
        	'nama' => 'Lena naa',
        	'nis' => 102,
        	'tgl_lahir' => '2002-11-17'
        ]);

    }
}
