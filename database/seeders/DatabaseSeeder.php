<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        # Generate Admin (1 user only)
        $user = User::factory()->create([
            'name' => 'Clarence Palo',
            'email' => 'clarence-palo@gmail.com',
            'password' => 'clarencepalo',
            'about' => " As a dedicated student and aspiring senior full-stack developer, I've gained hands-on experience through two impactful internships, where I contributed to developing scalable web applications and intuitive user interfaces. I love the process of bridging design and functionality, and I'm always looking for innovative ways to solve problems with code. Outside of my studies, I'm constantly diving into new technologies, collaborating on open-source projects, and seeking opportunities to learn and improve. I believe in the power of well-crafted code and thoughtful design. When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or mentoring aspiring developers. I believe in the power of clean code, thoughtful design, and continuous learning.",
            'position' => 'junior full-stack developer'
        ]);

        // Manually create 4 tags
        $laravelTag = Tag::create(['name' => 'Laravel']);
        $reactTag = Tag::create(['name' => 'React']);
        $vueTag = Tag::create(['name' => 'Vue.js']);
        $tailwindTag = Tag::create(['name' => 'Tailwind CSS']);
        $apiTag = Tag::create(['name' => 'REST API']);

        // Manually create 10 projects and attach tags
        $project1 = Project::create([
            'user_id' => $user->id,
            'title' => 'E-commerce Platform',
            'description' => 'A full-featured e-commerce platform with user authentication, product management, and order processing.',
            'live_demo_url' => 'https://example.com/ecommerce-demo',
            'github_url' => 'https://github.com/clarence-palo/ecommerce-platform',
            'image' => 'ecommerce.jpg',
        ]);
        $project1->tags()->attach([$laravelTag->id, $reactTag->id, $tailwindTag->id, $apiTag->id]);

        $project2 = Project::create([
            'user_id' => $user->id,
            'title' => 'Task Management App',
            'description' => 'A simple and intuitive task management application to help users organize their daily tasks.',
            'live_demo_url' => 'https://example.com/task-app-demo',
            'github_url' => 'https://github.com/clarence-palo/task-management-app',
            'image' => 'task-app.jpg',
        ]);
        $project2->tags()->attach([$laravelTag->id, $vueTag->id, $tailwindTag->id]);


        $project3 = Project::create([
            'user_id' => $user->id,
            'title' => 'Blog CMS',
            'description' => 'A content management system for blogging with an admin panel for creating and managing posts.',
            'live_demo_url' => 'https://example.com/blog-cms-demo',
            'github_url' => 'https://github.com/clarence-palo/blog-cms',
            'image' => 'blog-cms.jpg',
        ]);
        $project3->tags()->attach([$laravelTag->id, $tailwindTag->id]);


        $project4 = Project::create([
            'user_id' => $user->id,
            'title' => 'Social Media Dashboard',
            'description' => 'A dashboard to monitor and manage social media activity across different platforms.',
            'live_demo_url' => 'https://example.com/social-dashboard-demo',
            'github_url' => 'https://github.com/clarence-palo/social-media-dashboard',
            'image' => 'social-dashboard.jpg',
        ]);
        $project4->tags()->attach([$reactTag->id, $apiTag->id, $tailwindTag->id]);


        $project5 = Project::create([
            'user_id' => $user->id,
            'title' => 'Recipe Sharing Platform',
            'description' => 'A platform where users can share their favorite recipes, browse, and save others.',
            'live_demo_url' => 'https://example.com/recipe-share-demo',
            'github_url' => 'https://github.com/clarence-palo/recipe-sharing-platform',
            'image' => 'recipe-app.jpg',
        ]);
        $project5->tags()->attach([$laravelTag->id, $vueTag->id, $tailwindTag->id, $apiTag->id]);


        $project6 = Project::create([
            'user_id' => $user->id,
            'title' => 'Portfolio Website',
            'description' => 'A personal portfolio website to showcase projects, skills, and experience.',
            'live_demo_url' => 'https://example.com/my-portfolio',
            'github_url' => 'https://github.com/clarence-palo/personal-portfolio',
            'image' => 'portfolio.jpg',
        ]);
        $project6->tags()->attach([$reactTag->id, $tailwindTag->id]);


        $project7 = Project::create([
            'user_id' => $user->id,
            'title' => 'Customer Relationship Management (CRM)',
            'description' => 'A basic CRM system to manage customer information, interactions, and sales leads.',
            'live_demo_url' => 'https://example.com/crm-demo',
            'github_url' => 'https://github.com/clarence-palo/basic-crm',
            'image' => 'crm-system.jpg',
        ]);
        $project7->tags()->attach([$laravelTag->id, $tailwindTag->id, $apiTag->id]);


        $project8 = Project::create([
            'user_id' => $user->id,
            'title' => 'Online Quiz Application',
            'description' => 'An interactive online quiz application with multiple categories and score tracking.',
            'live_demo_url' => 'https://example.com/quiz-app-demo',
            'github_url' => 'https://github.com/clarence-palo/online-quiz-app',
            'image' => 'quiz-app.jpg',
        ]);
        $project8->tags()->attach([$vueTag->id, $apiTag->id]);


        $project9 = Project::create([
            'user_id' => $user->id,
            'title' => 'Event Management System',
            'description' => 'A system for creating, managing, and registering for events.',
            'live_demo_url' => 'https://example.com/event-manager-demo',
            'github_url' => 'https://github.com/clarence-palo/event-management-system',
            'image' => 'event-manager.jpg',
        ]);
        $project9->tags()->attach([$laravelTag->id, $reactTag->id, $tailwindTag->id, $apiTag->id]);


        $project10 = Project::create([
            'user_id' => $user->id,
            'title' => 'Weather Dashboard',
            'description' => 'A real-time weather dashboard fetching data from a public weather API.',
            'live_demo_url' => 'https://example.com/weather-dashboard-demo',
            'github_url' => 'https://github.com/clarence-palo/weather-dashboard',
            'image' => 'weather-dashboard.jpg',
        ]);
        $project10->tags()->attach([$reactTag->id, $apiTag->id]);
    }
}
