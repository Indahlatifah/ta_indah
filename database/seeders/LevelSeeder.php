<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // 
    public function run(): void
    {
        DB::table('level')->insert(
            [
            'name' => 'admin'
            ],
            [
                'name' => 'kemahasiswaan'
            ],
            [
                'name' => 'akademik'
            ],
            [
                'name' => 'kamsisdal'
            ],
            [
                'name' => 'sarpras'
            ],
            [
                'name' => 'direksi'
            ],
            [
                'name' => 'keuangan'
            ],
            [
                'name' => 'umum'
            ],
            [
                'name' => 'mahasiswa'
            ],
        );
    }
}