<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabasesSkillsSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'skill_name' => 'Firebase'
            ],
            [
                'skill_name' => 'Supabase'
            ],
            [
                'skill_name' => 'Prisma'
            ],
            [
                'skill_name' => 'MySQL'
            ],
            [
                'skill_name' => 'PostgreSQL'
            ],
            [
                'skill_name' => 'MongoDB'
            ],
        );

        $this->db->table('databases_skills')->insertBatch($data);
    }
}
