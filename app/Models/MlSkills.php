<?php

namespace App\Models;

use CodeIgniter\Model;

class MlSkills extends Model
{
    protected $table            = 'ml_skills';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['skill_name'];
}
