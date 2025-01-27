<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FrontendSkillsSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'skill_name' => 'HTML'
            ],
            [
                'skill_name' => 'CSS'
            ],
            [
                'skill_name' => 'SASS'
            ],
            [
                'skill_name' => 'Tailwind'
            ],
            [
                'skill_name' => 'React.js'
            ],
            [
                'skill_name' => 'Next.js'
            ],
            [
                'skill_name' => 'Astro'
            ],
            [
                'skill_name' => 'Flutter'
            ],
        );

        $this->db->table('frontend_skills')->insertBatch($data);
    }
}
