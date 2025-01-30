<?php

namespace App\Models;

use CodeIgniter\Model;

class Skills extends Model
{
    protected $table            = 'skills';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['skill_name', 'category'];
}