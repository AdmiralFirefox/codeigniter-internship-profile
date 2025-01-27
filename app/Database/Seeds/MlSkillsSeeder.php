<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MlSkillsSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'skill_name' => 'Tensorflow'
            ],
            [
                'skill_name' => 'PyTorch'
            ],
            [
                'skill_name' => 'Google Colab'
            ],
        );

        $this->db->table('ml_skills')->insertBatch($data);
    }
}
