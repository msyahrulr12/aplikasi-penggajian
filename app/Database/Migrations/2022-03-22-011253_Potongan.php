<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Potongan extends Migration
{
    public function up()
    {
        // membuat kolom untuk tabel potongan
        $this->forge->addField([
            'kode_potongan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true
            ],
            'no_slip' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'bpjs_jpk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'bpjs_jpn' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'bpjs_jht' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'pph_21' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
                'default' => 0
            ],
            'potongan_absensi' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
                'default' => 0
            ],
            'potongan_lain_lain' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
                'default' => 0
            ],
            'total_potongan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);

        // tambah primary key
        $this->forge->addKey('kode_potongan', true);

        // buat tabel potongan
        $this->forge->createTable('potongan', true);
    }

    public function down()
    {
        // hapus tabel potongan
        $this->forge->dropTable('potongan', true);
    }
}
