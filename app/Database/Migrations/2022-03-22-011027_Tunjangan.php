<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tunjangan extends Migration
{
    public function up()
    {
        // membuat kolom untuk tabel tunjangan
        $this->forge->addField([
            'kode_tunjangan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true
            ],
            'tunjangan_jabatan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'tunjangan_masa_kerja' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'tunjangan_haid' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'tunjangan_kehadiran' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'total_tunjangan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
        ]);

        // tambah primary key
        $this->forge->addKey('kode_tunjangan', true);

        // buat tabel tunjangan
        $this->forge->createTable('tunjangan', true);
    }

    public function down()
    {
        // hapus tabel tunjangan
        $this->forge->dropTable('tunjangan', true);
    }
}
