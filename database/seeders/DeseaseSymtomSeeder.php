<?php

namespace Database\Seeders;

use App\Models\Desease;
use App\Models\Symtom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeseaseSymtomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
          
                DB::table('desease_symtoms')->insert([
                    [
                        'desease_id' => 1,
                        'symtoms_id' => 1,
                        'cf' => "0.8069",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 1,
                        'symtoms_id' => 2,
                        'cf' => "0.8069",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 1,
                        'symtoms_id' => 3,
                        'cf' => "0.8069",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 1,
                        'symtoms_id' => 6,
                        'cf' => "0.8069",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 1,
                        'symtoms_id' => 7,
                        'cf' => "0.8069",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 2,
                        'symtoms_id' => 2,
                        'cf' => "0.7974",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 2,
                        'symtoms_id' => 3,
                        'cf' => "0.7974",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 2,
                        'symtoms_id' => 4,
                        'cf' => "0.7974",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 2,
                        'symtoms_id' => 13,
                        'cf' => "0.7974",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 3,
                        'symtoms_id' => 2,
                        'cf' => "0.754548
",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 3,
                        'symtoms_id' => 3,
                        'cf' => "0.754548
",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 3,
                        'symtoms_id' => 5,
                        'cf' => "0.754548
",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 3,
                        'symtoms_id' => 7,
                        'cf' => "0.754548
",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 3,
                        'symtoms_id' => 11,
                        'cf' => "0.754548
",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 3,
                        'symtoms_id' => 12,
                        'cf' => "0.754548
",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 4,
                        'symtoms_id' => 2,
                        'cf' => "0.67216",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 4,
                        'symtoms_id' => 6,
                        'cf' => "0.67216",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 4,
                        'symtoms_id' => 9,
                        'cf' => "0.67216",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 4,
                        'symtoms_id' => 13,
                        'cf' => "0.67216",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 5,
                        'symtoms_id' => 6,
                        'cf' => "0.6804",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 5,
                        'symtoms_id' => 7,
                        'cf' => "0.6804",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 5,
                        'symtoms_id' => 8,
                        'cf' => "0.6804",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 5,
                        'symtoms_id' => 10,
                        'cf' => "0.6804",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 6,
                        'symtoms_id' => 4,
                        'cf' => "0.4616",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 6,
                        'symtoms_id' => 5,
                        'cf' => "0.4616",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 6,
                        'symtoms_id' => 6,
                        'cf' => "0.4616",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 6,
                        'symtoms_id' => 7,
                        'cf' => "0.4616",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 6,
                        'symtoms_id' => 9,
                        'cf' => "0.4616",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 7,
                        'symtoms_id' => 1,
                        'cf' => "0.68376",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 7,
                        'symtoms_id' => 3,
                        'cf' => "0.68376",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 7,
                        'symtoms_id' => 6,
                        'cf' => "0.68376",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 7,
                        'symtoms_id' => 7,
                        'cf' => "0.68376",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'desease_id' => 7,
                        'symtoms_id' => 10,
                        'cf' => "0.68376",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                   
                  
                ]);
            }
        
    }

