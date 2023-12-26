<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsHarvestCondition extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('isharvest_condition')->insert([
           [
            'isharvest_id' => '1',
            'condition_id' => '1',
            'cf' => '0.602304',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
           ],
           [
            'isharvest_id' => '1',
            'condition_id' => '3',
            'cf' => '0.602304',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ],
           [
            'isharvest_id' => '1',
            'condition_id' => '4',
            'cf' => '0.602304',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ],
           [
            'isharvest_id' => '1',
            'condition_id' => '5',
            'cf' => '0.602304',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ],
           [
            'isharvest_id' => '1',
            'condition_id' => '6',
            'cf' => '0.602304',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ],
           [
            'isharvest_id' => '1',
            'condition_id' => '7',
            'cf' => '0.602304',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ],
           [
            'isharvest_id' => '2',
            'condition_id' => '2',
            'cf' => '0.669616',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ],
           [
            'isharvest_id' => '2',
            'condition_id' => '8',
            'cf' => '0.669616',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ],
           [
            'isharvest_id' => '2',
            'condition_id' => '9',
            'cf' => '0.669616',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ],
           [
            'isharvest_id' => '2',
            'condition_id' => '10',
            'cf' => '0.669616',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ],
           [
            'isharvest_id' => '2',
            'condition_id' => '11',
            'cf' => '0.669616',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ],
           [
            'isharvest_id' => '2',
            'condition_id' => '12',
            'cf' => '0.669616',
            'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()           ]
        ]);
    }
}
