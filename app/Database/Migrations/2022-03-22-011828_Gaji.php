<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gaji extends Migration
{
    public function up()
    {
        // membuat kolom untuk tabel gaji
        $this->forge->addField([
            'no_slip' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'gaji_pokok' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'jumlah_masuk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'jumlah_lembur' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'total_gaji' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
