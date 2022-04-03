<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        // membuat kolom untuk tabel admin
        $this->forge->addField([
            'id_card' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true
            ],
            'kode_jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
        ]);

        // tambah primary key
        $this->forge->addKey('id_card', true);

        // buat tabel admin
        $this->forge->createTable('admin', true);
    }

    public function down()
    {
        // hapus tabel admin
        $this->forge->dropTable('admin', true);
    }
}
