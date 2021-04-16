<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bukus')-> insert([
        [
            'id_buku' => '002',
            'Judul' => 'Ketika Tuhan Jatuh Cinta',
            'Kategori' => 'Novel',
            'Penerbit' => 'Diva Press',
            'Pengarang' => 'Wahyu Sujani',
            'Jumlah' => '5',
            'Status' => 'Baru'

        ],
        [
            'id_buku' => '003',
            'Judul' => 'Laskar Pelangi',
            'Kategori' => 'Novel',
            'Penerbit' => 'Bentang Pustaka',
            'Pengarang' => 'Andrea Hirata',
            'Jumlah' => '2',
            'Status' => 'Layak baca'

        ],
        [
            'id_buku' => '004',
            'Judul' => 'Ayat-Ayat Cinta',
            'Kategori' => 'Novel',
            'Penerbit' => 'RPBI',
            'Pengarang' => 'Habiburrahman El Shirazy',
            'Jumlah' => '3',
            'Status' => 'Layak baca'

        ],
        [
            'id_buku' => '005',
            'Judul' => 'Ketika Cinta Bertasbih',
            'Kategori' => 'Novel',
            'Penerbit' => 'Republika-Basmalah',
            'Pengarang' => 'Habiburrahman El Shirazy',
            'Jumlah' => '3',
            'Status' => 'Layak baca'

        ],
        [
            'id_buku' => '006',
            'Judul' => '5 Menara',
            'Kategori' => 'Novel',
            'Penerbit' => 'Gramedia (Jakarta)',
            'Pengarang' => 'Ahmad Fuadi',
            'Jumlah' => '10',
            'Status' => '2 tidak layak baca (rusak)'

        ],
        [
            'id_buku' => '007',
            'Judul' => 'Dragon Ball',
            'Kategori' => 'Komik',
            'Penerbit' => ' Shueisha',
            'Pengarang' => 'Akira Toriyama',
            'Jumlah' => '12',
            'Status' => '5 tidak layak baca (rusak)'

        ],
        [
            'id_buku' => '008',
            'Judul' => 'Doraemon',
            'Kategori' => 'Komik',
            'Penerbit' => 'Elex Media Komputindo',
            'Pengarang' => 'Fujiko F',
            'Jumlah' => '12',
            'Status' => '1 tidak layak baca (rusak)'

        ],
        [
            'id_buku' => '009',
            'Judul' => 'Cermin Ajaib',
            'Kategori' => 'Dongeng',
            'Penerbit' => 'Gramedia Pustaka Utama',
            'Pengarang' => 'Enid Blyton',
            'Jumlah' => '11',
            'Status' => '3 tidak layak baca (rusak)'

        ],
        [
            'id_buku' => '0010',
            'Judul' => 'Malin Kundang',
            'Kategori' => 'Dongeng',
            'Penerbit' => 'Pustaka Sandro Jaya',
            'Pengarang' => 'Tira Ikranegara',
            'Jumlah' => '13',
            'Status' => '1 tidak layak baca (rusak)'

        ]

        ]);
    }
}
