<x-layout>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-6 bg-gradient-to-br from-dark-gray via-medium-gray to-dark-gray">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                My <span class="gradient-text">Projects</span>
            </h1>
            <p class="text-xl text-gray-300 mb-8 max-w-3xl mx-auto">
                A comprehensive collection of my work spanning web development, mobile applications, UI/UX design, and AI/ML projects.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="create-project.html" class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105">
                    Add New Project
                </a>
                <button class="px-8 py-3 border border-accent text-accent rounded-lg font-semibold hover:bg-accent hover:text-white transition-all duration-300">
                    View Statistics
                </button>
            </div>
        </div>
    </section>

    <!-- Filters -->
    <section class="py-8 px-6 bg-medium-gray border-b border-light-gray">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
                <!-- Search Bar -->
                <div class="relative flex-1 max-w-md">
                    <input type="text" placeholder="Search projects..."
                           class="w-full px-4 py-3 pl-12 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors">
                    <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>

                <!-- Filters -->
                <div class="flex flex-wrap gap-3">
                    <button class="px-6 py-2 rounded-full bg-gradient-to-r from-accent to-purple-500 text-white font-medium">
                        All Projects
                    </button>
                    <button class="px-6 py-2 rounded-full bg-light-gray text-gray-300 font-medium hover:bg-accent hover:text-white transition-all">
                        Web Development
                    </button>
                    <button class="px-6 py-2 rounded-full bg-light-gray text-gray-300 font-medium hover:bg-accent hover:text-white transition-all">
                        Mobile Apps
                    </button>
                    <button class="px-6 py-2 rounded-full bg-light-gray text-gray-300 font-medium hover:bg-accent hover:text-white transition-all">
                        UI/UX Design
                    </button>
                    <button class="px-6 py-2 rounded-full bg-light-gray text-gray-300 font-medium hover:bg-accent hover:text-white transition-all">
                        AI/ML
                    </button>
                </div>

                <!-- Sort -->
                <select class="px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none">
                    <option>Newest First</option>
                    <option>Oldest First</option>
                    <option>Name A-Z</option>
                    <option>Category</option>
                </select>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="mb-8">
                <p class="text-gray-400">Showing 12 projects</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Project 1 -->
                <div class="project-card card-hover rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-accent/20 to-purple-500/20 flex items-center justify-center">
                        <div class="text-6xl">🚀</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold">E-Commerce Platform</h3>
                            <span class="text-sm text-gray-400">Jan 2024</span>
                        </div>
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
                </div>

                <!-- Project 2 -->
                <div class="project-card card-hover rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-purple-500/20 to-pink-500/20 flex items-center justify-center">
                        <div class="text-6xl">📱</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold">Fitness Tracking App</h3>
                            <span class="text-sm text-gray-400">Dec 2023</span>
                        </div>
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
                </div>

                <!-- Project 3 -->
                <div class="project-card card-hover rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 flex items-center justify-center">
                        <div class="text-6xl">🎨</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold">Design System</h3>
                            <span class="text-sm text-gray-400">Nov 2023</span>
                        </div>
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
                </div>

                <!-- Project 4 -->
                <div class="project-card card-hover rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-green-500/20 to-emerald-500/20 flex items-center justify-center">
                        <div class="text-6xl">🤖</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold">AI Content Generator</h3>
                            <span class="text-sm text-gray-400">Oct 2023</span>
                        </div>
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
                </div>

                <!-- Project 5 -->
                <div class="project-card card-hover rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-orange-500/20 to-red-500/20 flex items-center justify-center">
                        <div class="text-6xl">📊</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold">Analytics Dashboard</h3>
                            <span class="text-sm text-gray-400">Sep 2023</span>
                        </div>
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
                </div>

                <!-- Project 6 -->
                <div class="project-card card-hover rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-indigo-500/20 to-purple-500/20 flex items-center justify-center">
                        <div class="text-6xl">🎵</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold">Music Streaming App</h3>
                            <span class="text-sm text-gray-400">Aug 2023</span>
                        </div>
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

        <!-- Pagination -->
            <div class="flex justify-center items-center space-x-4">
                <button class="px-4 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors opacity-50 cursor-not-allowed">
                    Previous
                </button>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-accent text-white rounded-lg">1</button>
                    <button class="px-4 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">2</button>
                    <button class="px-4 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">3</button>
                </div>
                <button class="px-4 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">
                    Next
                </button>
            </div>
        </div>
    </section>
</x-layout>
