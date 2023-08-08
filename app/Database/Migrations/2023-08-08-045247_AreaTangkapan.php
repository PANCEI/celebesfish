<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AreaTangkapan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_area' => [
                'type' => "INT",
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'area' => [
                'type' => 'VARCHAR',
                'constraint' => "100"
            ],
            'kordinat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'area_created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'area_upated_at' => [
                'type' => 'VARCHAR',
                'null' => true
            ]
        ]);
        $this->forge->addPrimaryKey('id_area');
        $this->forge->createTable('area_tangakapan');
    }

    public function down()
    {
        $this->forge->dropTable('area_tangkapan');
    }
}
