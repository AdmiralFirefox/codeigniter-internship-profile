<?php

namespace App\Controllers;

use App\Models\Skills;
use App\Models\Projects;
use App\Models\Contacts;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function skills()
    {
        $skillsModel = new Skills();
        $frontendSkills = $skillsModel->where('category', 'frontend')->findAll();
        $backendSkills  = $skillsModel->where('category', 'backend')->findAll();
        $databasesSkills = $skillsModel->where('category', 'databases')->findAll();
        $mlSkills = $skillsModel->where('category', 'ml')->findAll();

        $data = [
            'frontend_skills' => $frontendSkills,
            'backend_skills' => $backendSkills,
            'databases_skills' => $databasesSkills,
            'ml_skills' => $mlSkills,
        ];
        
        return view('skills', $data);
    }

    public function blog()
    {
        return view('blog');
    }

    public function projects() 
    {
        $projectsModel = new Projects();
        $projects = $projectsModel->findAll();

        return view('projects', ['projects' => $projects]);
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function sendEmail()
    {
        $validation = service('validation');

        $validation->setRules([
            'email' => [
                'rules' => 'required|valid_email|is_unique[contacts.email]',
                'errors' => [
                    'is_unique' => 'This email is already registered. Please use another one.'
                ]
            ],
            'name' => 'required|max_length[30]',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Show validation errors
        if (!$validation->withRequest($this->request)->run()) {
            $contactsModel = new Contacts();
            $contacts = $contactsModel->findAll();
            
            return view('contacts', ['contacts' => $contacts,'validation' => $validation]);
        }
        
        // Send Email
        // $emailService = service('email');
        // $emailService->setFrom($this->request->getPost('email'), $this->request->getPost('name'));
        // $emailService->setTo('jamesjoseph.cuadra@wvsu.edu.ph');
        // $emailService->setSubject($this->request->getPost('subject'));
        // $emailService->setMessage($this->request->getPost('message'));

        // if ($emailService->send()) {
        //     session()->setFlashdata('success', 'Email sent successfully!');
        // } else {
        //     session()->setFlashdata('error', 'Failed to send email.');
        // }

        // Send Data to database
        $contacts = new Contacts();
        $data = [
            'email' => $this->request->getPost('email'),
            'name' => $this->request->getPost('name'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];
        $contacts->save($data);

        try {
            session()->setFlashdata('success', 'Contact successfully added!');
        } catch (\Exception $e) {
            session()->setFlashdata('error', 'Failed to add contact: '.$e->getMessage());
        }

        // Redirect to prevent form resubmission
        return redirect()->to(base_url('/contacts'));
    }
}