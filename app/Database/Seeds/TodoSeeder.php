<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'Tugas To Do List Codeigniter',
            'description'    => 'Membuat To Do List menggunakan Codeigniter4',
            'finished_at'    => "2022-04-07-06:00",
        ];

        // Simple Queries
        $this->db->table('todos')->insert($data);
        
        $data = [
            'title' => 'Tugas Magang Ribrick',
            'description'    => 'Memperbaiki website seterum.com menggunakan Laravel',
            'finished_at'    => "2022-05-01-21:00",
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);

        $data = [
            'title' => 'Exam AeU',
            'description'    => 'Examination AeU for 5 subjects',
            'finished_at'    => "2022-04-11-09:00",
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);
    }
}