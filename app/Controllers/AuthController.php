<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    protected $helpers = ['url', 'form'];
    public function loginForm()
    {
        $data = [
            'pageTitle' => 'Login',
            'validation' => null,
        ];

        return view('backend/pages/auth/login.php', $data);
    }

    public function loginHandler() {
        $fieldType = filter_var($this->request->getVar('login_id'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == 'email') {
            $isValid = $this->validate([
                'login_id' => [
                    'rules' => 'required|valid_email|is_not_unique[users.email]',
                    'errors' => [
                        'required' => 'Email is required',
                        'valid_email' => 'Email is not valid',
                        'is_not_unique' => 'Email does not exist in the system.'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[8]|max_length[45]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Password must be at least 8 characters',
                        'max_length' => 'Password must not exceed 45 characters',
                    ],
                ]
            ]);
        } else {
            $isValid = $this->validate([
                'login_id' => [
                    'rules' => 'required|is_not_unique[users.username]',
                    'errors' => [
                        'required' => 'Username is required',
                        'is_not_unique' => 'Username does not exist in the system.'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[8]|max_length[45]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Password must be at least 8 characters',
                        'max_length' => 'Password must not exceed 45 characters',
                    ],
                ]
            ]);
        }

        if (!$isValid) {
            return view('backend/pages/auth/login', [
                'pageTitle' => 'Login',
                'validation' => $this->validator,
            ]);
        } else {
            $user = new User();
            $userInfo = $user->where($fieldType, $this->request->getVar('login_id'))->first();
            $check_password = Hash::check($this->request->getVar('password'), $userInfo['password']);

            if (!$check_password) {
                return redirect()->route('admin.login.form')->with('error', 'Wrong password')->withInput();
            } else {
                CIAuth::setCIAuth($userInfo);
                return redirect()->route('admin.home');
            }
        }
    }
}