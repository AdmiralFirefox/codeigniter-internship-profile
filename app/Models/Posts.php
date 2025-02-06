<?php

namespace App\Models;

use CodeIgniter\Model;

class Posts extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['post_banner_url', 'post_slug' ,'post_title', 'post_author', 'post_content'];
    protected $beforeInsert     = ['generateSlug'];
    protected $beforeUpdate     = ['generateSlug'];

    // Generate Slug Before Insert/Update
    protected function generateSlug(array $data)
    {
        if (isset($data['data']['post_title'])) {
            $slug = $this->slugify($data['data']['post_title']);
            $data['data']['post_slug'] = $this->ensureUniqueSlug($slug);
        }
        return $data;
    }

    // Helper function to create a URL-friendly slug
    public function slugify($title)
    {
        return strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '-', $title), '-'));
    }

    // Ensure slug is unique by adding a numeric suffix if necessary
    private function ensureUniqueSlug($slug)
    {
        $originalSlug = $slug;
        $count = 0;

        while ($this->where('post_slug', $slug)->countAllResults() > 0) {
            $count++;
            $slug = $originalSlug . '-' . $count;
        }

        return $slug;
    }
}