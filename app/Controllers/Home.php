<?php

namespace App\Controllers;

use App\Models\FrontendSkills;
use App\Models\BackendSkills;
use App\Models\DatabasesSkills;
use App\Models\MlSkills;
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
        $frontendSkillsModel = new FrontendSkills();
        $backendSkillsModel = new BackendSkills();
        $databasesSkillsModel = new DatabasesSkills();
        $mlSkillsModel = new MlSkills();

        $frontendSkills = $frontendSkillsModel->findAll();
        $backendSkills = $backendSkillsModel->findAll();
        $databasesSkills = $databasesSkillsModel->findAll();
        $mlSkills = $mlSkillsModel->findAll();

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
}