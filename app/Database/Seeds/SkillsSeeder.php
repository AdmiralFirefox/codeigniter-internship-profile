<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SkillsSeeder extends Seeder
{
    public function run()
    {
        $frontend_data = array(
            [
                'skill_name' => 'HTML',
                'category' => 'frontend',
            ],
            [
                'skill_name' => 'CSS',
                'category' => 'frontend',
            ],
            [
                'skill_name' => 'SASS',
                'category' => 'frontend',
            ],
            [
                'skill_name' => 'Tailwind',
                'category' => 'frontend',
            ],
            [
                'skill_name' => 'React.js',
                'category' => 'frontend',
            ],
            [
                'skill_name' => 'Next.js',
                'category' => 'frontend',
            ],
            [
                'skill_name' => 'Astro',
                'category' => 'frontend',
            ],
            [
                'skill_name' => 'Flutter',
                'category' => 'frontend',
            ],
        );

        $backend_data = array(
            [
                'skill_name' => 'Node.js',
                'category' => 'backend',
            ],
            [
                'skill_name' => 'Express',
                'category' => 'backend',
            ],
            [
                'skill_name' => 'Flask',
                'category' => 'backend',
            ],
        );

        $databases_data = array(
            [
                'skill_name' => 'Firebase',
                'category' => 'databases',
            ],
            [
                'skill_name' => 'Supabase',
                'category' => 'databases',
            ],
            [
                'skill_name' => 'Prisma',
                'category' => 'databases',
            ],
            [
                'skill_name' => 'MySQL',
                'category' => 'databases',
            ],
            [
                'skill_name' => 'PostgreSQL',
                'category' => 'databases',
            ],
            [
                'skill_name' => 'MongoDB',
                'category' => 'databases',
            ],
        );

        $ml_data = array(
            [
                'skill_name' => 'Tensorflow',
                'category' => 'ml',
            ],
            [
                'skill_name' => 'PyTorch',
                'category' => 'ml',
            ],
            [
                'skill_name' => 'Google Colab',
                'category' => 'ml',
            ],
        );

        $this->db->table('skills')->insertBatch($frontend_data);
        $this->db->table('skills')->insertBatch($backend_data);
        $this->db->table('skills')->insertBatch($databases_data);
        $this->db->table('skills')->insertBatch($ml_data);
    }
}