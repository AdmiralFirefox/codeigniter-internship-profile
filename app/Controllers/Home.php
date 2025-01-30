<?php

namespace App\Controllers;

use App\Models\Skills;
use App\Models\Projects;

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

    public function projects() 
    {
        $projectsModel = new Projects();
        $projects = $projectsModel->findAll();

        return view('projects', ['projects' => $projects]);
    }

    public function interests() 
    {
        return view('interests');
    }

    public function questions() 
    {
        return view('questions');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function sendEmail()
    {
        $validation = service('validation');

        $validation->setRules([
            'email' => 'required|valid_email',
            'name' => 'required|max_length[30]',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Show validation errors
        if (!$this->validate($validation->getRules())) {
            return view('contacts', ['validation' => $this->validator]);
        }
        
        // Send Email
        $emailService = service('email');
        $emailService->setFrom($this->request->getPost('email'), $this->request->getPost('name'));
        $emailService->setTo('jamesjoseph.cuadra@wvsu.edu.ph');
        $emailService->setSubject($this->request->getPost('subject'));
        $emailService->setMessage($this->request->getPost('message'));

        if ($emailService->send()) {
            session()->setFlashdata('success', 'Email sent successfully!');
        } else {
            session()->setFlashdata('error', 'Failed to send email.');
        }
    
        // Redirect to prevent form resubmission
        return redirect()->to(base_url('/contacts'));
    }
}