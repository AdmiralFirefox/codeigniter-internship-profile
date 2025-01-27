<?php

namespace App\Models;

use CodeIgniter\Model;

class DatabasesSkills extends Model
{
    protected $table            = 'databases_skills';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['skill_name'];
}
