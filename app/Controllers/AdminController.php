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
}