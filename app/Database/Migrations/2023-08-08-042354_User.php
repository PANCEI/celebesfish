<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type' => "INT",
                'constraint' => 3,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => "VARCHAR",
                'constraint' => '100',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'email' => [
                'type' => "VARCHAR",
                'constraint' => '100'
            ],
            "password" => [
                'type' => "VARCHAR",
                'constraint' => '255',
            ],
            'foto' => [
                'type' => "VARCHAR",
                'constraint' => '255'
            ],
            'id_hak_akses' => [
                "type" => "INT",
                'constraint' => 5
            ],
            'active' => [
                'type' => "VARCHAR",
                'constraint' => '30'
            ],
            'user_created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'user_updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addPrimaryKey('id_user');
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
