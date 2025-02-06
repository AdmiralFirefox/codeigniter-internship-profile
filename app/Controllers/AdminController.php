<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\CIAuth;
use App\Models\Posts;
use App\Models\Contacts;

class AdminController extends BaseController
{
    public function index()
    {
        $postsModel = new Posts();
        $posts = $postsModel->findAll();
        
        $data = [
            'pageTitle' => 'Dashboard',
            'posts' => $posts
        ];

        return view('backend/pages/home', $data);
    }

    public function logoutHandler() 
    {
        CIAuth::forget();
        return redirect()->route('admin.login.form')->with('error', 'You are logged out!');
    }

    public function adminContacts() {
        $contactsModel = new Contacts();
        $contacts = $contactsModel->findAll();
        
        return view('backend/pages/admincontacts', ['contacts' => $contacts]);
    }

    public function createBlog() {
        return view('backend/pages/createblog');
    }

    public function createBlogHandler() {
        $validation = service('validation');

        $validation->setRules([
            'post_banner_url' => [
                'rules' => 'required|valid_url_strict',
                'errors' => [
                    'required' => 'Banner url field is required',
                    'valid_url_strict' => 'URL entered is not valid',
                ],
            ],
            'post_title' => [
                'rules' => 'required|max_length[30]',
                'errors' => [
                    'required' => 'Title field is required',
                    'max_length' => 'Post title should not exceed 30 characters',
                ],
            ],
            'post_author' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Author field is required',
                ]
            ],
            'post_content' => [
                'rules'=> 'required',
                'errors' => [
                    'required' => 'Content field is required',
                ] 
            ],
        ]);

        // Show validation errors
        if (!$validation->withRequest($this->request)->run()) {            
            return view('backend/pages/createblog', ['validation' => $validation]);
        }

        // Create New Post to the Database
        $posts = new Posts();
        $data = [
            'post_banner_url' => $this->request->getPost('post_banner_url'),
            'post_slug' => $posts->generateSlug($this->request->getPost('post_title')),
            'post_title' => $this->request->getPost('post_title'),
            'post_author' => $this->request->getPost('post_author'),
            'post_content' => $this->request->getPost('post_content'),
        ];
        $posts->save($data);

        try {
            session()->setFlashdata('success', 'Blog created successfully!');
        } catch (\Exception $e) {
            session()->setFlashdata('error', 'Failed to create blog: '.$e->getMessage());
        }

        return redirect()->to(base_url('/blog/admin/createBlog'));
    }

    public function deleteBlogHandler($id) {
        $posts = new Posts();
        $post = $posts->find($id);

        if ($post) {
            $postTitle = $post['post_title']; 
            $posts->delete($id); 
            
            return redirect()->route('admin.home')->with('success', "Deleted post '$postTitle' successfully.");
        } else {
            return redirect()->route('admin.home')->with('error', 'Failed to delete post.');
        }
    }

    // View Blog
    public function view($slug) {
        $postsModel = new Posts();
        $post = $postsModel->where('post_slug', $slug)->first();

        if (!$post) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('backend/pages/blog', ['post' => $post]);
    }
}