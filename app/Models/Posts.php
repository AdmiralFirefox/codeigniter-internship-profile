<?php

namespace App\Models;

use CodeIgniter\Model;

class Posts extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['post_banner_url', 'post_slug' ,'post_title', 'post_author', 'post_content'];

    public function generateSlug($title)
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', trim($title)));
    }
}