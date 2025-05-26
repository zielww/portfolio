<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Chen - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-gray': '#0a0a0a',
                        'medium-gray': '#1a1a1a',
                        'light-gray': '#2a2a2a',
                        'accent': '#3b82f6'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .typing-animation {
            border-right: 2px solid #3b82f6;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 50% { border-color: #3b82f6; }
            51%, 100% { border-color: transparent; }
        }

        .project-card {
            background: linear-gradient(145deg, #1a1a1a, #0f0f0f);
            border: 1px solid #2a2a2a;
        }

        .tag-filter {
            transition: all 0.3s ease;
        }

        .tag-filter.active {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            color: white;
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="bg-dark-gray text-white font-sans">
<!-- Navigation -->
<nav class="fixed top-0 w-full bg-dark-gray/80 backdrop-blur-md z-50 border-b border-light-gray">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="text-xl font-bold gradient-text">Alex Chen</div>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="hover:text-accent transition-colors">Home</a>
                <a href="#about" class="hover:text-accent transition-colors">About</a>
                <a href="#projects" class="hover:text-accent transition-colors">Projects</a>
                <a href="#case-studies" class="hover:text-accent transition-colors">Case Studies</a>
                <a href="#contact" class="hover:text-accent transition-colors">Contact</a>
            </div>
            <button id="mobile-menu-btn" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-gray via-medium-gray to-dark-gray"></div>
    <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
        <div class="floating">
            <div class="w-32 h-32 mx-auto mb-8 rounded-full bg-gradient-to-r from-accent to-purple-500 p-1">
                <div class="w-full h-full rounded-full bg-dark-gray flex items-center justify-center">
                    <span class="text-4xl font-bold gradient-text">CP</span>
                </div>
            </div>
        </div>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 fade-in">
            Hi, I'm <span class="gradient-text">Clarence</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-8 fade-in">
            <span id="typing-text" class="typing-animation"></span>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
            <button class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105">
                View My Work
            </button>
            <button class="px-8 py-3 border border-accent text-accent rounded-lg font-semibold hover:bg-accent hover:text-white transition-all duration-300">
                Download CV
            </button>
        </div>
    </div>

    <!-- Animated background elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-accent/10 rounded-full blur-xl animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-32 h-32 bg-purple-500/10 rounded-full blur-xl animate-pulse delay-1000"></div>
    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-cyan-500/10 rounded-full blur-xl animate-pulse delay-500"></div>
</section>

<!-- About Me Section -->
<section id="about" class="py-20 px-6 bg-medium-gray">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">About <span class="gradient-text">Me</span></h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Passionate about creating digital experiences that make a difference
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
            <!-- Personal Info -->
            <div class="fade-in">
                <div class="project-card rounded-xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-r from-accent to-purple-500 p-1 mr-6">
                            <div class="w-full h-full rounded-full bg-dark-gray flex items-center justify-center">
                                <span class="text-2xl font-bold gradient-text">AC</span>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2">Alex Chen</h3>
                            <p class="text-accent font-medium">Senior Full-Stack Developer</p>
                        </div>
                    </div>

                    <p class="text-gray-300 leading-relaxed mb-6">
                        I'm a passionate full-stack developer with 6+ years of experience creating digital solutions that bridge the gap between design and functionality. I specialize in building scalable web applications, mobile apps, and user interfaces that not only look great but solve real-world problems.
                    </p>

                    <p class="text-gray-300 leading-relaxed mb-6">
                        When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or mentoring aspiring developers. I believe in the power of clean code, thoughtful design, and continuous learning.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-dark-gray rounded-lg">
                            <div class="text-2xl font-bold gradient-text">50+</div>
                            <div class="text-gray-400 text-sm">Projects Completed</div>
                        </div>
                        <div class="text-center p-4 bg-dark-gray rounded-lg">
                            <div class="text-2xl font-bold gradient-text">6+</div>
                            <div class="text-gray-400 text-sm">Years Experience</div>
                        </div>
                        <div class="text-center p-4 bg-dark-gray rounded-lg">
                            <div class="text-2xl font-bold gradient-text">25+</div>
                            <div class="text-gray-400 text-sm">Happy Clients</div>
                        </div>
                        <div class="text-center p-4 bg-dark-gray rounded-lg">
                            <div class="text-2xl font-bold gradient-text">15+</div>
                            <div class="text-gray-400 text-sm">Technologies</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills -->
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-8">Technical Skills</h3>

                <div class="space-y-6">
                    <!-- Frontend -->
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-medium">Frontend Development</span>
                            <span class="text-accent">95%</span>
                        </div>
                        <div class="w-full bg-light-gray rounded-full h-2">
                            <div class="bg-gradient-to-r from-accent to-purple-500 h-2 rounded-full skill-bar" style="width: 0%" data-width="95%"></div>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-3">
                            <span class="px-3 py-1 bg-accent/20 text-accent rounded-full text-sm">React</span>
                            <span class="px-3 py-1 bg-accent/20 text-accent rounded-full text-sm">Vue.js</span>
                            <span class="px-3 py-1 bg-accent/20 text-accent rounded-full text-sm">TypeScript</span>
                            <span class="px-3 py-1 bg-accent/20 text-accent rounded-full text-sm">Next.js</span>
                        </div>
                    </div>

                    <!-- Backend -->
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-medium">Backend Development</span>
                            <span class="text-purple-400">90%</span>
                        </div>
                        <div class="w-full bg-light-gray rounded-full h-2">
                            <div class="bg-gradient-to-r from-purple-500 to-pink-500 h-2 rounded-full skill-bar" style="width: 0%" data-width="90%"></div>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-3">
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">Node.js</span>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">Python</span>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">PostgreSQL</span>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">MongoDB</span>
                        </div>
                    </div>

                    <!-- Mobile -->
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-medium">Mobile Development</span>
                            <span class="text-cyan-400">85%</span>
                        </div>
                        <div class="w-full bg-light-gray rounded-full h-2">
                            <div class="bg-gradient-to-r from-cyan-500 to-blue-500 h-2 rounded-full skill-bar" style="width: 0%" data-width="85%"></div>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-3">
                            <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm">React Native</span>
                            <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm">Flutter</span>
                            <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm">Swift</span>
                            <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm">Kotlin</span>
                        </div>
                    </div>

                    <!-- Design -->
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-medium">UI/UX Design</span>
                            <span class="text-green-400">80%</span>
                        </div>
                        <div class="w-full bg-light-gray rounded-full h-2">
                            <div class="bg-gradient-to-r from-green-500 to-emerald-500 h-2 rounded-full skill-bar" style="width: 0%" data-width="80%"></div>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-3">
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Figma</span>
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Adobe XD</span>
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Sketch</span>
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Prototyping</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Experience Timeline -->
        <div class="fade-in">
            <h3 class="text-3xl font-bold text-center mb-12">Professional <span class="gradient-text">Journey</span></h3>

            <div class="relative">
                <!-- Timeline line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-accent to-purple-500 rounded-full"></div>

                <!-- Timeline items -->
                <div class="space-y-12">
                    <!-- Experience 1 -->
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="project-card rounded-xl p-6">
                                <div class="text-accent font-semibold mb-2">2022 - Present</div>
                                <h4 class="text-xl font-bold mb-2">Senior Full-Stack Developer</h4>
                                <p class="text-gray-400 mb-3">TechCorp Solutions</p>
                                <p class="text-gray-300 text-sm">Leading development of enterprise-scale applications, mentoring junior developers, and architecting scalable solutions for Fortune 500 clients.</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-gradient-to-r from-accent to-purple-500 rounded-full flex items-center justify-center relative z-10">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <div class="w-1/2 pl-8"></div>
                    </div>

                    <!-- Experience 2 -->
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center relative z-10">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <div class="w-1/2 pl-8">
                            <div class="project-card rounded-xl p-6">
                                <div class="text-purple-400 font-semibold mb-2">2020 - 2022</div>
                                <h4 class="text-xl font-bold mb-2">Full-Stack Developer</h4>
                                <p class="text-gray-400 mb-3">StartupXYZ</p>
                                <p class="text-gray-300 text-sm">Built the core platform from scratch, implemented CI/CD pipelines, and grew the user base from 0 to 100K+ active users.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Experience 3 -->
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="project-card rounded-xl p-6">
                                <div class="text-cyan-400 font-semibold mb-2">2019 - 2020</div>
                                <h4 class="text-xl font-bold mb-2">Frontend Developer</h4>
                                <p class="text-gray-400 mb-3">Digital Agency Pro</p>
                                <p class="text-gray-300 text-sm">Developed responsive web applications for various clients, specializing in React and modern JavaScript frameworks.</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full flex items-center justify-center relative z-10">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <div class="w-1/2 pl-8"></div>
                    </div>

                    <!-- Experience 4 -->
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center relative z-10">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <div class="w-1/2 pl-8">
                            <div class="project-card rounded-xl p-6">
                                <div class="text-green-400 font-semibold mb-2">2018 - 2019</div>
                                <h4 class="text-xl font-bold mb-2">Junior Developer</h4>
                                <p class="text-gray-400 mb-3">WebDev Studio</p>
                                <p class="text-gray-300 text-sm">Started my professional journey, learning best practices and contributing to various web development projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Achievements & Certifications -->
        <div class="mt-20 fade-in">
            <h3 class="text-3xl font-bold text-center mb-12">Achievements & <span class="gradient-text">Certifications</span></h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="project-card rounded-xl p-6 text-center card-hover">
                    <div class="text-4xl mb-4">🏆</div>
                    <h4 class="font-bold mb-2">Best Innovation Award</h4>
                    <p class="text-gray-400 text-sm">TechCorp Annual Awards 2023</p>
                </div>

                <div class="project-card rounded-xl p-6 text-center card-hover">
                    <div class="text-4xl mb-4">📜</div>
                    <h4 class="font-bold mb-2">AWS Certified</h4>
                    <p class="text-gray-400 text-sm">Solutions Architect Professional</p>
                </div>

                <div class="project-card rounded-xl p-6 text-center card-hover">
                    <div class="text-4xl mb-4">🎯</div>
                    <h4 class="font-bold mb-2">Google Cloud</h4>
                    <p class="text-gray-400 text-sm">Professional Developer</p>
                </div>

                <div class="project-card rounded-xl p-6 text-center card-hover">
                    <div class="text-4xl mb-4">⭐</div>
                    <h4 class="font-bold mb-2">Open Source</h4>
                    <p class="text-gray-400 text-sm">500+ GitHub Stars</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Featured <span class="gradient-text">Projects</span></h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                A collection of projects that showcase my skills in design, development, and problem-solving.
            </p>
        </div>

        <!-- Project Filters -->
        <div class="flex flex-wrap justify-center gap-3 mb-12 fade-in">
            <button class="tag-filter active px-6 py-2 rounded-full bg-light-gray text-white font-medium" data-filter="all">
                All Projects
            </button>
            <button class="tag-filter px-6 py-2 rounded-full bg-light-gray text-gray-300 font-medium" data-filter="web">
                Web Development
            </button>
            <button class="tag-filter px-6 py-2 rounded-full bg-light-gray text-gray-300 font-medium" data-filter="mobile">
                Mobile Apps
            </button>
            <button class="tag-filter px-6 py-2 rounded-full bg-light-gray text-gray-300 font-medium" data-filter="design">
                UI/UX Design
            </button>
            <button class="tag-filter px-6 py-2 rounded-full bg-light-gray text-gray-300 font-medium" data-filter="ai">
                AI/ML
            </button>
        </div>

        <!-- Projects Grid -->
        <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="project-card card-hover rounded-xl p-6 fade-in" data-category="web">
                <div class="h-48 bg-gradient-to-br from-accent/20 to-purple-500/20 rounded-lg mb-6 flex items-center justify-center">
                    <div class="text-6xl">🚀</div>
                </div>
                <h3 class="text-xl font-bold mb-3">E-Commerce Platform</h3>
                <p class="text-gray-400 mb-4">A modern e-commerce solution built with React and Node.js, featuring real-time inventory management and payment processing.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-accent/20 text-accent rounded-full text-sm">React</span>
                    <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">Node.js</span>
                    <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm">MongoDB</span>
                </div>
                <div class="flex gap-3">
                    <button class="flex-1 py-2 bg-accent/20 text-accent rounded-lg hover:bg-accent hover:text-white transition-colors">
                        Live Demo
                    </button>
                    <button class="flex-1 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">
                        GitHub
                    </button>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card card-hover rounded-xl p-6 fade-in" data-category="mobile">
                <div class="h-48 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-lg mb-6 flex items-center justify-center">
                    <div class="text-6xl">📱</div>
                </div>
                <h3 class="text-xl font-bold mb-3">Fitness Tracking App</h3>
                <p class="text-gray-400 mb-4">Cross-platform mobile app for tracking workouts and nutrition with social features and AI-powered recommendations.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">React Native</span>
                    <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Firebase</span>
                    <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-sm">TensorFlow</span>
                </div>
                <div class="flex gap-3">
                    <button class="flex-1 py-2 bg-accent/20 text-accent rounded-lg hover:bg-accent hover:text-white transition-colors">
                        App Store
                    </button>
                    <button class="flex-1 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">
                        GitHub
                    </button>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card card-hover rounded-xl p-6 fade-in" data-category="design">
                <div class="h-48 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-lg mb-6 flex items-center justify-center">
                    <div class="text-6xl">🎨</div>
                </div>
                <h3 class="text-xl font-bold mb-3">Design System</h3>
                <p class="text-gray-400 mb-4">Comprehensive design system for a fintech startup, including component library, style guide, and design tokens.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-pink-500/20 text-pink-400 rounded-full text-sm">Figma</span>
                    <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm">Storybook</span>
                    <span class="px-3 py-1 bg-orange-500/20 text-orange-400 rounded-full text-sm">Design Tokens</span>
                </div>
                <div class="flex gap-3">
                    <button class="flex-1 py-2 bg-accent/20 text-accent rounded-lg hover:bg-accent hover:text-white transition-colors">
                        View Design
                    </button>
                    <button class="flex-1 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">
                        Storybook
                    </button>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card card-hover rounded-xl p-6 fade-in" data-category="ai">
                <div class="h-48 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-lg mb-6 flex items-center justify-center">
                    <div class="text-6xl">🤖</div>
                </div>
                <h3 class="text-xl font-bold mb-3">AI Content Generator</h3>
                <p class="text-gray-400 mb-4">Machine learning powered content generation tool that creates marketing copy, blog posts, and social media content.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Python</span>
                    <span class="px-3 py-1 bg-red-500/20 text-red-400 rounded-full text-sm">TensorFlow</span>
                    <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm">FastAPI</span>
                </div>
                <div class="flex gap-3">
                    <button class="flex-1 py-2 bg-accent/20 text-accent rounded-lg hover:bg-accent hover:text-white transition-colors">
                        Try Demo
                    </button>
                    <button class="flex-1 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">
                        GitHub
                    </button>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="project-card card-hover rounded-xl p-6 fade-in" data-category="web">
                <div class="h-48 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-lg mb-6 flex items-center justify-center">
                    <div class="text-6xl">📊</div>
                </div>
                <h3 class="text-xl font-bold mb-3">Analytics Dashboard</h3>
                <p class="text-gray-400 mb-4">Real-time analytics dashboard for SaaS companies with customizable widgets and advanced data visualization.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-accent/20 text-accent rounded-full text-sm">Vue.js</span>
                    <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">D3.js</span>
                    <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">GraphQL</span>
                </div>
                <div class="flex gap-3">
                    <button class="flex-1 py-2 bg-accent/20 text-accent rounded-lg hover:bg-accent hover:text-white transition-colors">
                        Live Demo
                    </button>
                    <button class="flex-1 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">
                        GitHub
                    </button>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="project-card card-hover rounded-xl p-6 fade-in" data-category="mobile">
                <div class="h-48 bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-lg mb-6 flex items-center justify-center">
                    <div class="text-6xl">🎵</div>
                </div>
                <h3 class="text-xl font-bold mb-3">Music Streaming App</h3>
                <p class="text-gray-400 mb-4">iOS and Android music streaming application with offline playback, social playlists, and personalized recommendations.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm">Swift</span>
                    <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Kotlin</span>
                    <span class="px-3 py-1 bg-red-500/20 text-red-400 rounded-full text-sm">Redis</span>
                </div>
                <div class="flex gap-3">
                    <button class="flex-1 py-2 bg-accent/20 text-accent rounded-lg hover:bg-accent hover:text-white transition-colors">
                        App Store
                    </button>
                    <button class="flex-1 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">
                        Case Study
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Section -->
<section id="case-studies" class="py-20 px-6 bg-medium-gray">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Case <span class="gradient-text">Studies</span></h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Deep dives into my design and development process, challenges faced, and solutions implemented.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Case Study 1 -->
            <div class="project-card card-hover rounded-xl overflow-hidden fade-in">
                <div class="h-64 bg-gradient-to-br from-accent/30 to-purple-500/30 flex items-center justify-center">
                    <div class="text-8xl">💳</div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4">Fintech App Redesign</h3>
                    <p class="text-gray-400 mb-6">
                        Complete UX overhaul of a mobile banking app that increased user engagement by 150% and reduced support tickets by 40%.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-accent/20 text-accent rounded-full text-sm">User Research</span>
                        <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">Prototyping</span>
                        <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm">A/B Testing</span>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-400">Timeline</span>
                            <span>3 months</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">Team Size</span>
                            <span>5 people</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">My Role</span>
                            <span>Lead UX Designer</span>
                        </div>
                    </div>
                    <button class="w-full py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300">
                        Read Full Case Study
                    </button>
                </div>
            </div>

            <!-- Case Study 2 -->
            <div class="project-card card-hover rounded-xl overflow-hidden fade-in">
                <div class="h-64 bg-gradient-to-br from-green-500/30 to-emerald-500/30 flex items-center justify-center">
                    <div class="text-8xl">🌱</div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4">Sustainability Platform</h3>
                    <p class="text-gray-400 mb-6">
                        Built a comprehensive platform for tracking carbon footprint that helped 10,000+ users reduce their environmental impact.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Full-Stack Dev</span>
                        <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm">Data Viz</span>
                        <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-sm">API Design</span>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-400">Timeline</span>
                            <span>6 months</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">Team Size</span>
                            <span>3 people</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">My Role</span>
                            <span>Full-Stack Developer</span>
                        </div>
                    </div>
                    <button class="w-full py-3 bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-green-500/25 transition-all duration-300">
                        Read Full Case Study
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <div class="fade-in">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Let's Work <span class="gradient-text">Together</span></h2>
            <p class="text-gray-400 text-lg mb-12 max-w-2xl mx-auto">
                I'm always interested in new opportunities and exciting projects. Let's discuss how we can bring your ideas to life.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="project-card rounded-xl p-6">
                    <div class="text-4xl mb-4">📧</div>
                    <h3 class="font-semibold mb-2">Email</h3>
                    <p class="text-gray-400">alex.chen@email.com</p>
                </div>
                <div class="project-card rounded-xl p-6">
                    <div class="text-4xl mb-4">💼</div>
                    <h3 class="font-semibold mb-2">LinkedIn</h3>
                    <p class="text-gray-400">linkedin.com/in/alexchen</p>
                </div>
                <div class="project-card rounded-xl p-6">
                    <div class="text-4xl mb-4">🐙</div>
                    <h3 class="font-semibold mb-2">GitHub</h3>
                    <p class="text-gray-400">github.com/alexchen</p>
                </div>
            </div>

            <button class="px-12 py-4 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold text-lg hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105">
                Get In Touch
            </button>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-8 px-6 border-t border-light-gray">
    <div class="max-w-7xl mx-auto text-center text-gray-400">
        <p>&copy; 2024 Alex Chen. All rights reserved.</p>
    </div>
</footer>

<script>
    // Typing animation
    const texts = [
        "Full-Stack Developer",
        "UI/UX Designer",
        "Problem Solver",
        "Creative Thinker"
    ];
    let textIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typingElement = document.getElementById('typing-text');

    function typeText() {
        const currentText = texts[textIndex];

        if (isDeleting) {
            typingElement.textContent = currentText.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typingElement.textContent = currentText.substring(0, charIndex + 1);
            charIndex++;
        }

        let typeSpeed = isDeleting ? 50 : 100;

        if (!isDeleting && charIndex === currentText.length) {
            typeSpeed = 2000;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            textIndex = (textIndex + 1) % texts.length;
            typeSpeed = 500;
        }

        setTimeout(typeText, typeSpeed);
    }

    // Start typing animation
    typeText();

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe all fade-in elements
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });

    // Project filtering
    const filterButtons = document.querySelectorAll('.tag-filter');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            // Filter projects
            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    mobileMenuBtn.addEventListener('click', () => {
        // Add mobile menu functionality here
        console.log('Mobile menu clicked');
    });

    // Parallax effect for background elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.floating');

        parallaxElements.forEach(element => {
            const speed = 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Add some interactive hover effects
    document.querySelectorAll('.card-hover').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.boxShadow = '0 20px 40px rgba(59, 130, 246, 0.15)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.boxShadow = 'none';
        });
    });

    // Skill bar animations
    const skillBars = document.querySelectorAll('.skill-bar');
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const width = bar.getAttribute('data-width');
                setTimeout(() => {
                    bar.style.width = width;
                }, 200);
            }
        });
    }, { threshold: 0.5 });

    skillBars.forEach(bar => {
        skillObserver.observe(bar);
    });
</script>
</body>
</html>
