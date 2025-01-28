<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'project_name' => 'Dragon Fruit Classifier',
                'project_description' => 'Thesis undergrad that detects and classifies dragon fruits into different classes, utilizing computer vision techniques.',
                'project_link' => 'https://www.dragonfruitclassifier.com/'
            ],
            [
                'project_name' => 'Safari',
                'project_description' => 'An e-commerce site inspired by Amazon. Integrated with Stripe for payments.',
                'project_link' => 'https://safari-commerce.netlify.app/'
            ],
            [
                'project_name' => 'Sentiment Analyzer',
                'project_description' => 'Performs analysis on a text to classify them as positive, negative, or neutral.',
                'project_link' => 'https://nlp-sentiment-analysis-app.vercel.app/'
            ],
            [
                'project_name' => 'SkyWatch',
                'project_description' => 'A weather application that tracks and forecast weather of a place. It has an autocompletion, can add places on bookmarks, and more.',
                'project_link' => 'https://skywatch-v2.netlify.app'
            ],
            [
                'project_name' => 'Chess Clock',
                'project_description' => 'An online chess clock that you can use to play with your opponent.',
                'project_link' => 'https://online-chess-clock.netlify.app/'
            ],
        );

        $this->db->table('projects')->insertBatch($data);
    }
}
