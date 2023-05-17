<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => "085321509545",
            'ttl' => '2000-12-12',
            'foto' => 'al.png'
        ]);
    }
}
