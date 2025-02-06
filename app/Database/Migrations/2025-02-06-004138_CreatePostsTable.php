<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'post_banner_url' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'post_slug' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'post_title' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'post_author' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'post_content' => [
                'type' => 'TEXT',
            ],
            'created_at timestamp default current_timestamp',
            'updated_at timestamp default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}