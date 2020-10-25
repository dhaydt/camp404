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
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
        	'name' => 'Andi Saputra',
        	'role' => 'siswa',
        	'siswa_id' => '1',
        	'email' => 'andi@siswa.com',
        	'password' => bcrypt('andi'),
        ]);
        DB::table('users')->insert([
        	'name' => 'Budi Cahya',
        	'role' => 'siswa',
        	'siswa_id' => '2',
        	'email' => 'budi@siswa.com',
        	'password' => bcrypt('budi'),
        ]);
    }
}
