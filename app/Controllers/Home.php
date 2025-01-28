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
        $frontendSkillsModel = new FrontendSkills();
        $backendSkillsModel = new BackendSkills();
        $databasesSkillsModel = new DatabasesSkills();
        $mlSkillsModel = new MlSkills();
        $projectsModel = new Projects();

        $frontendSkills = $frontendSkillsModel->findAll();
        $backendSkills = $backendSkillsModel->findAll();
        $databasesSkills = $databasesSkillsModel->findAll();
        $mlSkills = $mlSkillsModel->findAll();
        $projects = $projectsModel->findAll();

        $data = [
            'frontend_skills' => $frontendSkills,
            'backend_skills' => $backendSkills,
            'databases_skills' => $databasesSkills,
            'ml_skills' => $mlSkills,
            'projects' => $projects,
        ];

        return view('index', $data);
    }
}
