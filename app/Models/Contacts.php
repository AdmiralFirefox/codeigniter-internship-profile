<?php

namespace App\Models;

use CodeIgniter\Model;

class Contacts extends Model
{
    protected $table            = 'contacts';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['email', 'name', 'subject', 'message'];
}