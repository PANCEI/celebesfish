<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KelompokNelayan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kelompok' => [
                'type' => "INT",
                'constraint' => 3,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_kelompok' => [
                'type' => 'VARCHAR',
                'constraint' => '30'
            ],
            'kelompok_created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'kelompok_updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addPrimaryKey('id_kelompok');
        $this->forge->createTable('kelompok_nelayan');
    }

    public function down()
    {
        $this->forge->dropTable('kelompok_nelayan');
    }
}
