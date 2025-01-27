<?php

namespace App\Models;

use CodeIgniter\Model;

class BackendSkills extends Model
{
    protected $table            = 'backend_skills';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['skill_name'];
}
