<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jabatan extends Migration
{
    public function up()
    {
        // membuat kolom untuk tabel jabatan
        $this->forge->addField([
            'kode_jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true
            ],
            'bagian' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
        ]);

        // tambah primary key
        $this->forge->addKey('kode_jabatan', true);

        // buat tabel jabatan
        $this->forge->createTable('jabatan', true);
    }

    public function down()
    {
        // hapus tabel jabatan
        $this->forge->dropTable('jabatan', true);
    }
}
