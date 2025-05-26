<x-layout>
    <!-- Back Button -->
    <div class="pt-24 px-6">
        <div class="max-w-7xl mx-auto">
            <a href="projects.html" class="inline-flex items-center text-gray-300 hover:text-accent transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Projects
            </a>
        </div>
    </div>

    <!-- Edit/Delete Actions -->
    <div class="px-6 mb-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-end gap-3">
                <a href="/projects/project/edit" class="inline-flex items-center px-4 py-2 bg-accent/20 text-accent border border-accent rounded-lg hover:bg-accent hover:text-white transition-all duration-300">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Edit Project
                </a>
                <a href="/projects/{project}" class="inline-flex items-center px-4 py-2 bg-red-500/20 text-red-400 border border-red-500 rounded-lg hover:bg-red-500 hover:text-white transition-all duration-300">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                    Delete Project
                </a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="py-16 px-6 hero-bg">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-accent/20 text-accent rounded-full text-sm font-medium">Web Development</span>
                        <span class="text-gray-400">•</span>
                        <span class="text-gray-400">January 2024</span>
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        E-Commerce <span class="gradient-text">Platform</span>
                    </h1>
                    <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                        A comprehensive e-commerce solution built with modern technologies, featuring real-time inventory management, secure payment processing, and advanced analytics dashboard.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105 text-center text-white">
                            View Live Demo
                        </a>
                        <a href="#" class="px-8 py-3 border border-accent text-accent rounded-lg font-semibold hover:bg-accent hover:text-white transition-all duration-300 text-center">
                            View on GitHub
                        </a>
                    </div>
                </div>
                <div>
                    <div class="project-card rounded-xl p-2">
                        <div class="h-96 bg-gradient-to-br from-accent/20 to-purple-500/20 rounded-lg flex items-center justify-center">
                            <div class="text-8xl">🚀</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    <section class="py-20 px-6 bg-medium-gray">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 text-white">Related <span class="gradient-text">Projects</span></h2>
                <p class="text-gray-300 text-lg">
                    Check out other projects in my portfolio
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="#" class="project-card card-hover rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-purple-500/20 to-pink-500/20 flex items-center justify-center">
                        <div class="text-6xl">📱</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-white">Fitness Tracking App</h3>
                        <p class="text-gray-300 text-sm mb-4">Cross-platform mobile app for tracking workouts and nutrition.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-400 rounded text-xs">React Native</span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-400 rounded text-xs">Firebase</span>
                        </div>
                    </div>
                </a>

                <a href="#" class="project-card card-hover rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 flex items-center justify-center">
                        <div class="text-6xl">🎨</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-white">Design System</h3>
                        <p class="text-gray-300 text-sm mb-4">Comprehensive design system for a fintech startup.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-pink-500/20 text-pink-400 rounded text-xs">Figma</span>
                            <span class="px-2 py-1 bg-cyan-500/20 text-cyan-400 rounded text-xs">Storybook</span>
                        </div>
                    </div>
                </a>

                <a href="#" class="project-card card-hover rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-green-500/20 to-emerald-500/20 flex items-center justify-center">
                        <div class="text-6xl">🤖</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-white">AI Content Generator</h3>
                        <p class="text-gray-300 text-sm mb-4">Machine learning powered content generation tool.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-green-500/20 text-green-400 rounded text-xs">Python</span>
                            <span class="px-2 py-1 bg-red-500/20 text-red-400 rounded text-xs">TensorFlow</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6 text-white">Interested in Working <span class="gradient-text">Together?</span></h2>
            <p class="text-gray-300 text-lg mb-8 max-w-2xl mx-auto">
                I'm always excited to take on new challenges and create innovative solutions. Let's discuss your next project.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="index.html#contact" class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105 text-white">
                    Get In Touch
                </a>
                <a href="projects.html" class="px-8 py-3 border border-accent text-accent rounded-lg font-semibold hover:bg-accent hover:text-white transition-all duration-300">
                    View All Projects
                </a>
            </div>
        </div>
    </section>
</x-layout>
