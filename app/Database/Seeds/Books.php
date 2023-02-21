<?php 

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Books extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode' => '02AB33CD',
                'judul'    => 'Buku Bahasa Indonesia',
                'author' => 'Anonym',
                'penerbit' => 'Gramedia',
                'tahun' => '1999'
            ],
            
            [
                'kode' => '31BC11DC',
                'judul'    => 'Statistika Terapat Untuk Bisnis dan Ekonomi',
                'author' => 'Drs. Samsubar Saleh',
                'penerbit' => 'BPFE-Yogyakarta',
                'tahun' => '1999'
            ],
            
            [
                'kode' => '11FG29GK',
                'judul'    => 'Python Basic',
                'author' => 'Ir. Yuniar Supardi',
                'penerbit' => 'PT Elex Media Komputindo',
                'tahun' => '2017'
            ],
            [
                'kode' => '87UJ68MC',
                'judul'    => 'Mengenal Microsoft Office 2013',
                'author' => 'Taryana Suryana & Koesheryatin',
                'penerbit' => 'PT Elex Media Komputindo',
                'tahun' => '2014'
            ],
            [
                'kode' => '51DA04GB',
                'judul'    => 'Pendidikan Pancasila Untuk Perguruan Tinggi',
                'author' => 'Dr. Ujang Charda S',
                'penerbit' => 'PT RAJAGRAFINDO PERSADA',
                'tahun' => '2018'
            ],
            [
                'kode' => '04GB51DA',
                'judul'    => 'Aplikasi Internet Menggunakan HTML, CSS, JavaScript',
                'author' => 'Taryana Suryana & Koesheryatin',
                'penerbit' => 'PT Elex Media Komputindo',
                'tahun' => '2014'
            ],
            [
                'kode' => '90KH61JL',
                'judul'    => 'Jaringan Komputer',
                'author' => 'Budhi Irawan',
                'penerbit' => 'Graha Ilmu',
                'tahun' => '2005'
            ],
            [
                'kode' => '80HK16LK',
                'judul'    => 'Belajar Oracle 10g, SQL FUNDAMENTAL',
                'author' => 'Diana Effendi & Iyan Gustiana',
                'penerbit' => 'Anonym',
                'tahun' => '2011'
            ],
            [
                'kode' => '60LK18HK',
                'judul'    => 'Buku Pintar Programmer Pemula PHP',
                'author' => 'Abdul Kadir',
                'penerbit' => 'MediaKom',
                'tahun' => '2013'
            ],
            [
                'kode' => '44AS31QW',
                'judul'    => 'Menjadi Game Developer Expert',
                'author' => 'Ariska Hidayat & Restya Winda Astari',
                'penerbit' => 'PT Presentologics',
                'tahun' => '2018'
            ],
            
            [
                'kode' => '66DS71EQ',
                'judul'    => 'Framework CodeIgniter',
                'author' => 'Betha Sidik',
                'penerbit' => 'Informatika Bandung',
                'tahun' => '2012'
            ],
            

        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('books')->insertBatch($data);
    }
}


?>