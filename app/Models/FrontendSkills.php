<?php

namespace App\Models;

use CodeIgniter\Model;

class FrontendSkills extends Model
{
    protected $table            = 'frontend_skills';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['skill_name'];
}
