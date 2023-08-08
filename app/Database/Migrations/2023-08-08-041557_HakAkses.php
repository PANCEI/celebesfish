<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HakAkses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_hak_akses" => [
                "type" => "INT",
                'constraint' => 5,
                'unsigned' => true,
                "auto_increment" => true
            ],
            "akses" => [
                "type" => 'VARCHAR',
                "constraint" => "30"
            ],
            'hak_created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'hak_updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addPrimaryKey('id_hak_akses');
        $this->forge->createTable('hak_akses');
    }

    public function down()
    {
        $this->forge->dropTable('hak_akses');
    }
}
