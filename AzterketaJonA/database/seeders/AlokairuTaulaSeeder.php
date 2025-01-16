<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlokairuTaulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(EtxeaSeeder::class);
        \App\Models\AlokairuTaula::factory()->count(7)->create();
    }
}
