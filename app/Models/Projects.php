<?php

namespace App\Models;

use CodeIgniter\Model;

class Projects extends Model
{
    protected $table            = 'projects';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['project_name', 'project_description', 'project_link'];
}
