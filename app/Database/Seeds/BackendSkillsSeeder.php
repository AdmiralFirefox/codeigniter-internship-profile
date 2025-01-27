<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BackendSkillsSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'skill_name' => 'Node.js'
            ],
            [
                'skill_name' => 'Express'
            ],
            [
                'skill_name' => 'Flask'
            ],
        );

        $this->db->table('backend_skills')->insertBatch($data);
    }
}
