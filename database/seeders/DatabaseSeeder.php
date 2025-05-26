<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        # Generate Admin (1 user only)
        User::factory()->create([
            'name' => 'Clarence Palo',
            'email' => 'clarence-palo@gmail.com',
            'password' => 'clarencepalo',
            'about' => " As a dedicated student and aspiring senior full-stack developer, I've gained hands-on experience through two impactful internships, where I contributed to developing scalable web applications and intuitive user interfaces. I love the process of bridging design and functionality, and I'm always looking for innovative ways to solve problems with code. Outside of my studies, I'm constantly diving into new technologies, collaborating on open-source projects, and seeking opportunities to learn and improve. I believe in the power of well-crafted code and thoughtful design. When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or mentoring aspiring developers. I believe in the power of clean code, thoughtful design, and continuous learning.",
            'position' => 'junior full-stack developer'
        ]);


    }
}
