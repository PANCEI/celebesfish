<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mitra extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_mitra" => [
                "type" => "INT",
                'constraint' => 4,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "mitra" => [
                "type" => "VARCHAR",
                "constraint" => "40"
            ],
            "mitra_created_at" => [
                'type' => "DATETIME",
                "null" => true
            ],
            "mitra_updated_at" => [
                "type" => "DATETIME",
                "null" => true
            ]
        ]);
        $this->forge->addPrimaryKey('id_mitra');
        $this->forge->createTable("mitra");
    }

    public function down()
    {
        $this->forge->dropTable('mitra');
    }
}
