<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('condition')->insert([
            [
                'name' => ' Tudung (cap) jamur tiram yang layak dipanen umumnya memiliki warna putih hingga krem.',
                'code' => 'D1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'Warna tudung yang mengalami perubahan signifikan, seperti kecokelatan atau perubahan warna yang mencurigakan',
                'code' => 'D2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'Ukuran jamur tiram yang optimal untuk panen umumnya berkisar antara 2 hingga 4 cm untuk diameter tudungnya',
                'code' => 'D3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'Bentuk tudung yang simetris dan kaki yang lurus',
                'code' => 'D4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'tekstur yang padat, kenyal, dan tahan terhadap tekanan lembut.',
                'code' => 'D5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'Jamur tiram  memiliki aroma yang segar, khas, dan tidak ada tanda-tanda aroma yang tidak normal atau busuk.',
                'code' => 'D6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'Jamur tiram yang tumbuh dalam kondisi lingkungan yang bersih, bebas dari kontaminan, dan tanpa tanda-tanda serangan hama atau penyakit.',
                'code' => 'D6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'Panen dilakukan pada waktu yang tepat sesuai dengan siklus pertumbuhan jamur tiram. Ini dapat melibatkan panen ketika tudung telah mencapai ukuran optimal, tetapi sebelum membuka sepenuhnya',
                'code' => 'D7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'Jamur tiram yang terlalu kecil atau terlalu besar mungkin tidak layak dipanen. Ukuran yang tidak sesuai dengan tingkat kematangan dapat menjadi tanda ketidaklayakan.',
                'code' => 'D8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'Jamur tiram yang mengalami deformitas, misalnya tudung yang tidak simetris atau kaki yang bengkok secara abnorm',
                'code' => 'D9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'Jamur tiram yang memiliki tekstur lembek, berair, atau terasa berubah dari kenyal mungkin menunjukkan ketidaklayakan.',
                'code' => 'D10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' =>  'Jamur tiram yang memiliki aroma yang tidak normal, seperti aroma busuk atau tidak segar, bisa menjadi tanda ketidaklayakan.',
                'code' => 'D11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' =>  ' Jamur tiram yang tumbuh dalam lingkungan yang terkontaminasi oleh bahan kimia berbahaya, terkena hama, atau terinfeksi penyakit mungkin tidak layak dipanen.',
                'code' => 'D12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' =>  ' Panen yang dilakukan terlalu awal atau terlalu lambat dalam siklus pertumbuhan jamur tiram dapat membuatnya tidak layak dipanen.',
                'code' => 'D13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
        ]);
    }
}
