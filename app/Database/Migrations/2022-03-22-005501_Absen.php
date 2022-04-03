<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Absen extends Migration
{
    public function up()
    {
        // membuat kolom untuk tabel absen
        $this->forge->addField([
            'kd_absen' => [
                'type' => 'INT',
                'constraint' => 6,
                'unique' => true,
                'unsigned' => true
            ],
            'bulan' => [
                'type' => 'INT',
                'constraint' => 2,
                'unsigned' => true
            ],
            'tahun' => [
                'type' => 'INT',
                'constraint' => 4,
            ],
            'id_card' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jumlah_alpha' => [
                'type' => 'INT',
                'constraint' => 2,
                'unsigned' => true
            ],
            'jumlah_sakit' => [
                'type' => 'INT',
                'constraint' => 2,
                'unsigned' => true
            ],
            'jumlah_itb' => [
                'type' => 'INT',
                'constraint' => 2,
                'unsigned' => true
            ],
        ]);

        // tambah primary key
        $this->forge->addKey('kode_absen', true);
        
        // buat tabel absen
        $this->forge->createTable('absen', true);
    }

    public function down()
    {
        // hapus tabel absen
        $this->forge->dropTable('absen', true);
    }
}
