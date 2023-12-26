<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsHarvestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('isharvest')->insert([
            [
                'isharvest' => 'Ya',
                'code' => 'P1',
                'image' => 'p1.jpeg',  
                'description' => 'Layak panen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'isharvest' => 'Tidak',
                'code' => 'P2',
                'image' => 'd2.jpg',
                'description' => 'Tidak Layak panen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
