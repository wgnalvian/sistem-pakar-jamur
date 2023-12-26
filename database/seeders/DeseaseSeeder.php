<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('desease')->insert([
            [
                'image' => 'lalat.jpeg',
                'desease' => 'Lalat',
                'description' => 'Hama lalat pada jamur tiram adalah jenis hama yang paling sering menyerang tanaman jamur tiram. Hama ini dapat menyebabkan kerugian yang sangat besar, bahkan dapat menyebabkan gagal panen. Hama lalat pada jamur tiram memiliki nama latin Mycetophilidae. Hama ini memiliki ukuran tubuh yang kecil, sekitar 3-4 mm. Larva hama ini berwarna putih dan memiliki bentuk seperti cacing. Larva hama ini hidup dan berkembang biak di dalam tubuh jamur tiram. Larva hama lalat pada jamur tiram akan memakan miselium jamur tiram. Miselium adalah jaringan yang berfungsi untuk menyerap air dan nutrisi dari media tanam. Serangan hama lalat ini akan menyebabkan miselium jamur tiram menjadi rusak dan mati. Akibatnya, jamur tiram tidak dapat tumbuh dan berkembang dengan baik. Hama lalat pada jamur tiram dapat menyerang jamur tiram di semua fase pertumbuhan, mulai dari fase inokulasi, fase pertumbuhan miselium, hingga fase pertumbuhan jamur. Serangan hama ini paling sering terjadi pada fase pertumbuhan miselium.Hama lalat pada jamur tiram dapat menyebar melalui udara. Hama ini dapat datang dari kandang jamur tiram lain yang telah terserang hama. Oleh karena itu, penting untuk menjaga kebersihan kandang jamur tiram agar tidak terserang hama.',
                'treatment' => ' 1) Menjaga kebersihan kandang jamur tiram.
                2) Melakukan sterilisasi kandang jamur tiram sebelum digunakan.
                3) Menggunakan media tanam yang bersih dan steril.
                4) Melakukan penyemprotan pestisida secara rutin. 5) Memusnahkan jamur tiram yang telah terserang hama.
                6) Melakukan penyemprotan pestisida secara rutin.
                7) Menggunakan kipas angin untuk membantu meniupkan hama keluar dari kandang.',
                'code' => "P1",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'image' => 'laba-laba.jpeg',
                'desease' => 'Laba-laba',
                'description' => 'Hama laba-laba pada jamur tiram adalah jenis hama yang dapat menyerang tanaman jamur tiram. Hama ini dapat menyebabkan kerugian, tetapi tidak sebesar hama lalat. Hama laba-laba pada jamur tiram memiliki nama latin Araneae. Hama ini memiliki ukuran tubuh yang kecil, sekitar 2-3 mm. Laba-laba ini berwarna hitam atau coklat dan memiliki delapan kaki. Laba-laba ini hidup dan menenun jaring di sekitar baglog jamur tiram. Jaring laba-laba ini dapat menyebabkan pertumbuhan jamur tiram terhambat. Selain itu, jaring laba-laba ini juga dapat menjadi tempat berkembang biak bagi hama lain, seperti lalat. Hama laba-laba pada jamur tiram dapat menyerang jamur tiram di semua fase pertumbuhan, mulai dari fase inokulasi, fase pertumbuhan miselium, hingga fase pertumbuhan jamur. Serangan hama ini paling sering terjadi pada fase pertumbuhan miselium. Hama laba-laba pada jamur tiram dapat menyebar melalui udara. Hama ini dapat datang dari kandang jamur tiram lain yang telah terserang hama. Oleh karena itu, penting untuk menjaga kebersihan kandang jamur tiram agar tidak terserang hama.',
                'treatment' => '1) Menjaga kebersihan kandang jamur tiram.
                2) Melakukan sterilisasi kandang jamur tiram sebelum digunakan.
                3) Menggunakan media tanam yang bersih dan steril.
                4) Melakukan penyemprotan pestisida secara rutin.Memusnahkan jamur tiram yang telah terserang hama.
                5) Melakukan penyemprotan pestisida secara rutin.
                6) Menggunakan kipas angin untuk membantu meniupkan hama keluar dari kandang.',
                'code' => "P2",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
          
            [
                'image' => 'rayap.jpeg',
                'desease' => 'Rayap',
                'description' => '
                Hama rayap pada jamur tiram adalah jenis hama yang dapat menyerang tanaman jamur tiram. Hama ini dapat menyebabkan kerugian yang cukup besar, bahkan dapat menyebabkan gagal panen. Hama rayap pada jamur tiram memiliki nama latin Termitidae. Hama ini memiliki ukuran tubuh yang kecil, sekitar 1-2 mm. Rayap ini berwarna putih atau coklat dan memiliki enam kaki. Rayap ini hidup dan memakan selulosa yang terkandung dalam media tanam jamur tiram. Selulosa adalah bahan utama yang membentuk baglog jamur tiram. Serangan hama rayap ini akan menyebabkan baglog jamur tiram menjadi rusak dan tidak dapat digunakan lagi. Hama rayap pada jamur tiram dapat menyerang jamur tiram di semua fase pertumbuhan, mulai dari fase inokulasi, fase pertumbuhan miselium, hingga fase pertumbuhan jamur. Serangan hama ini paling sering terjadi pada fase pertumbuhan miselium. Hama rayap pada jamur tiram dapat menyebar melalui tanah. Rayap ini dapat datang dari kandang jamur tiram lain yang telah terserang hama. Oleh karena itu, penting untuk menjaga kebersihan kandang jamur tiram agar tidak terserang hama.',
                'treatment' => '1) Menjaga kebersihan kandang jamur tiram.
                2) Melakukan sterilisasi kandang jamur tiram sebelum digunakan.
                3) Menggunakan media tanam yang bersih dan steril.
                4) Melakukan penyemprotan pestisida secara rutin.Memusnahkan jamur tiram yang telah terserang hama.
                5) Melakukan penyemprotan pestisida secara rutin.
                6) Menggunakan kipas angin untuk membantu meniupkan hama keluar dari kandang.',
                'code' => "P3",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'image' => 'siput.jpeg',
                'desease' => 'Siput',
                'description' => 'Hama siput pada jamur tiram adalah jenis hama yang dapat menyerang tanaman jamur tiram. Hama ini dapat menyebabkan kerugian, tetapi tidak sebesar hama lalat. Hama siput pada jamur tiram memiliki nama latin Gastropoda. Hama ini memiliki ukuran tubuh yang bervariasi, mulai dari beberapa milimeter hingga beberapa sentimeter. Siput ini berwarna hijau, coklat, atau hitam. Siput ini hidup dan memakan tubuh buah jamur tiram. Serangan hama siput ini akan menyebabkan tubuh buah jamur tiram menjadi rusak dan tidak dapat dipanen. Hama siput pada jamur tiram dapat menyerang jamur tiram di semua fase pertumbuhan, mulai dari fase inokulasi, fase pertumbuhan miselium, hingga fase pertumbuhan jamur. Serangan hama ini paling sering terjadi pada fase pertumbuhan jamur.Hama siput pada jamur tiram dapat menyebar melalui tanah. Siput ini dapat datang dari kandang jamur tiram lain yang telah terserang hama. Oleh karena itu, penting untuk menjaga kebersihan kandang jamur tiram agar tidak terserang hama.',
                'treatment' => '1) Menjaga kebersihan kandang jamur tiram.
                2) Melakukan sterilisasi kandang jamur tiram sebelum digunakan.
                3) Menggunakan media tanam yang bersih dan steril.
                4) Melakukan penyemprotan pestisida secara rutin.Memusnahkan jamur tiram yang telah terserang hama.
                5) Melakukan penyemprotan pestisida secara rutin.
                6) Menggunakan kipas angin untuk membantu meniupkan hama keluar dari kandang.',
                'code' => "P4",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
          
            [
                'image' => ' Trichodermmia.jpeg',
                'desease' => 'Trichodermmia sp',
                'description' => '
                Hama Trichoderma sp. adalah jamur patogen yang dapat menyerang tanaman jamur tiram. Hama ini dapat menyebabkan kerugian yang cukup besar, bahkan dapat menyebabkan gagal panen.Hama Trichoderma sp. memiliki ciri-ciri sebagai berikut:
                Warna : Hijau tua atau kehitaman
                Bentuk : Berbentuk seperti kapas atau benang
                Lokasi : Biasanya menyerang media tanam jamur tiram
                Hama Trichoderma sp. dapat menyerang jamur tiram di semua fase pertumbuhan, mulai dari fase inokulasi, fase pertumbuhan miselium, hingga fase pertumbuhan jamur. Serangan hama ini paling sering terjadi pada fase pertumbuhan miselium.Hama Trichoderma sp. dapat menyebar melalui udara dan media tanam. Hama ini dapat datang dari kandang jamur tiram lain yang telah terserang hama. Oleh karena itu, penting untuk menjaga kebersihan kandang jamur tiram agar tidak terserang hama.',
                'treatment' => '1) Menjaga kebersihan kandang jamur tiram
                2) Melakukan sterilisasi kandang jamur tiram sebelum digunakan
                3) Menggunakan media tanam yang bersih dan steril
                4) Melakukan penyemprotan pestisida secara rutin Memusnahkan jamur tiram yang telah terserang hama
                5) Melakukan penyemprotan pestisida secara rutin
                6) Menggunakan kipas angin untuk membantu meniupkan hama keluar dari kandang',
                'code' => "P5",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'image' => ' mucor.jpeg',
                'desease' => 'Mucor sp',
                'description' => 'Hama Mucor sp. adalah jamur patogen yang dapat menyerang tanaman jamur tiram. Hama ini dapat menyebabkan kerugian yang cukup besar, bahkan dapat menyebabkan gagal panen.
                Hama Mucor sp. memiliki ciri-ciri sebagai berikut:
                Warna : Hitam atau putih
                Bentuk : Berbentuk seperti benang
                Lokasi : Biasanya menyerang media tanam jamur tiram
                Hama Mucor sp. dapat menyerang jamur tiram di semua fase pertumbuhan, mulai dari fase inokulasi, fase pertumbuhan miselium, hingga fase pertumbuhan jamur. Serangan hama ini paling sering terjadi pada fase pertumbuhan miselium. Hama Mucor sp. dapat menyebar melalui udara dan media tanam. Hama ini dapat datang dari kandang jamur tiram lain yang telah terserang hama. Oleh karena itu, penting untuk menjaga kebersihan kandang jamur tiram agar tidak terserang hama.',
                'treatment' => '1) Menjaga kebersihan kandang jamur tiram
                2) Melakukan sterilisasi kandang jamur tiram sebelum digunakan
                3) Menggunakan media tanam yang bersih dan steril
                4) Melakukan penyemprotan pestisida secara rutin Memusnahkan jamur tiram yang telah terserang hama
                5) Melakukan penyemprotan pestisida secara rutin
                6) Menggunakan kipas angin untuk membantu meniupkan hama keluar dari kandang',
                'code' => "P6",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
               
            ],
            [
                'image' => ' Penicilium.jpeg',
                'desease' => 'Penicilium sp',
                'description' => '
                Hama Penicillium sp. adalah jamur patogen yang dapat menyerang tanaman jamur tiram. Hama ini dapat menyebabkan kerugian yang cukup besar, bahkan dapat menyebabkan gagal panen. Hama Penicillium sp. memiliki ciri-ciri sebagai berikut:
                Warna : Hijau muda, biru, atau hitam
                Bentuk : Berbentuk seperti kapas atau benang
                Lokasi : Biasanya menyerang media tanam jamur tiram
                Hama Penicillium sp. dapat menyerang jamur tiram di semua fase pertumbuhan, mulai dari fase inokulasi, fase pertumbuhan miselium, hingga fase pertumbuhan jamur. Serangan hama ini paling sering terjadi pada fase pertumbuhan miselium. Hama Penicillium sp. dapat menyebar melalui udara dan media tanam. Hama ini dapat datang dari kandang jamur tiram lain yang telah terserang hama. Oleh karena itu, penting untuk menjaga kebersihan kandang jamur tiram agar tidak terserang hama.',
                'treatment' => '1) Menjaga kebersihan kandang jamur tiram
                2) Melakukan sterilisasi kandang jamur tiram sebelum digunakan
                3) Menggunakan media tanam yang bersih dan steril
                4) Melakukan penyemprotan pestisida secara rutin Memusnahkan jamur tiram yang telah terserang hama
                5) Melakukan penyemprotan pestisida secara rutin
                6) Menggunakan kipas angin untuk membantu meniupkan hama keluar dari kandang',
                'code' => "P7",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
           

        ]);
    }
}
