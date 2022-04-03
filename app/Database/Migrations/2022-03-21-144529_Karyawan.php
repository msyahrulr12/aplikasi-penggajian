<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
    public function up()
    {
        // membuat kolom untuk tabel karyawan
        $this->forge->addField([
            'id_card' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true
            ],
            'nama_karyawan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'telp' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['L', 'P'],
                'default' => 'L'
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);

        // tambah primary key
        $this->forge->addKey('id_card', true);
        
        // buat tabel karyawan
        $this->forge->createTable('karyawan', true);
    }

    public function down()
    {
        // hapus tabel karyawan
        $this->forge->dropTable('karyawan', true);
    }
}
