<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSkillsTable extends Migration
{
    private $fields = [
        'id' => [
            'type' => 'INT',
            'unsigned' => true,
            'auto_increment' => true,
        ],
        'skill_name' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
        ],
        'created_at timestamp default current_timestamp',
        'updated_at timestamp default current_timestamp on update current_timestamp',
    ];

    public function up()
    {
        $tables = [
            'frontend_skills',
            'backend_skills',
            'databases_skills',
            'ml_skills',
        ];

        foreach ($tables as $table) {
            $this->forge->addField($this->fields);
            $this->forge->addKey('id', true);
            $this->forge->createTable($table);
        }
    }

    public function down()
    {
        $tables = [
            'frontend_skills',
            'backend_skills',
            'databases_skills',
            'ml_skills',
        ];

        foreach ($tables as $table) {
            $this->forge->dropTable($table);
        }
    }
}
