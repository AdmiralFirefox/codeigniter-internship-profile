<?php

namespace App\Models;

use CodeIgniter\Model;

class Posts extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['post_banner_url', 'post_title', 'post_author', 'post_content'];
}