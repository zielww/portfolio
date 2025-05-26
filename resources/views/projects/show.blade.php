<x-layout>
    <!-- Back Button -->
    <div class="pt-24 px-6">
        <div class="max-w-7xl mx-auto">
            <a href="/projects" class="inline-flex items-center text-gray-300 hover:text-accent transition-colors">
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
                @auth()
                    <form action="/projects/{{ $project->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500/20 text-red-400 border border-red-500 rounded-lg hover:bg-red-500 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Delete Project
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="py-16 px-6 hero-bg">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-accent/20 text-accent rounded-full text-sm font-medium">{{ $project->tags[0]->name ?? false }}</span>
                        <span class="text-gray-400">•</span>
                        <span class="text-gray-400">{{ $project->created_at->format('F Y') }}</span>
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        {{ $project->title }} <span class="gradient-text">System</span>
                    </h1>
                    <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                       {{ $project->description }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a target="_blank" href="{{ $project->live_demo_url }}" class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105 text-center text-white">
                            View Live Demo
                        </a>
                        <a target="_blank" href="{{ $project->github_url }}" class="px-8 py-3 border border-accent text-accent rounded-lg font-semibold hover:bg-accent hover:text-white transition-all duration-300 text-center">
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
                @foreach($related_projects as $project)
                    <a href="{{ url('/projects', $project->id) }}" class="project-card card-hover rounded-xl overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-purple-500/20 to-pink-500/20 flex items-center justify-center">
                            <div class="text-6xl">📱</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-white">{{ $project->title }}</h3>
                            <p class="text-gray-300 text-sm mb-4">{{ $project->description }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project->tags as $tag)
                                    <span style="background-color: hsl({{ rand(0, 360) }}, 80% , 60%)" class="px-3 py-1 text-white rounded-full text-sm">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </a>
                @endforeach
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
                <a href="/#contact" class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105 text-white">
                    Get In Touch
                </a>
                <a href="/projects" class="px-8 py-3 border border-accent text-accent rounded-lg font-semibold hover:bg-accent hover:text-white transition-all duration-300">
                    View All Projects
                </a>
            </div>
        </div>
    </section>
</x-layout>
