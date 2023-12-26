<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymtomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('symtoms')->insert([
            [
                'name' => 'Jamur tiram terlihat keriput ',
                'code' => 'C1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jamur tiram batangnya berlubang',
                'code' => 'C2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jamur tiram tidak tumbuh besar (hanya
                tumbuh kecil saja)',
                'code' => 'C3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jamur tiram tidak terlihat tumbuh sama
                sekali',
                'code' => 'C4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kumbung jamur tiram rapuh',
                'code' => 'C5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Miselium jamur tiram membusuk',
                'code' => 'C6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pertumbuhan jamur tiram lambat',
                'code' => 'C7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Timbul bintik-bintik noda hijau pada
                baglog jamur 
                ',
                'code' => 'C8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Timbul noda hitam pada permukaan media
                baglog',
                'code' => 'C9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tumbuhnya miselium berwarna coklat atau
                merah tua',
                'code' => 'C10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Timbul tanah disekitar baglog (media
                tanam)',
                'code' => 'C11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Plastik baglog berlubang ',
                'code' => 'C12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ruang kumbung kotor ',
                'code' => 'C13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
           
        ]);

    }
}
