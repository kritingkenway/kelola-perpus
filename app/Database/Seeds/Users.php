<?php 

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            [
                'npm' => 'D1A210001',
                'nama'    => 'Riviansyah',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210003',
                'nama'    => 'Prya Pramudya',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210004',
                'nama'    => 'Dwi Nurul',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210006',
                'nama'    => 'Satrio',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210007',
                'nama'    => 'Ikhsan',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210008',
                'nama'    => 'Shelly',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210009',
                'nama'    => 'Nafa Afriliani',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210010',
                'nama'    => 'Apri Rosadi',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210011',
                'nama'    => 'Sunandar',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210013',
                'nama'    => 'Tio Eka',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210036',
                'nama'    => 'Aditya M',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210031',
                'nama'    => 'Risty',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],
            [
                'npm' => 'D1A210019',
                'nama'    => 'Ridwan',
                'semester-kelas' => '2 Reguler',
                'fakultas' => 'Ilmu Komputer'
            ],

        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}


?>