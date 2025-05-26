<x-layout>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-6 bg-gradient-to-br from-dark-gray via-medium-gray to-dark-gray">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                My <span class="gradient-text">Projects</span>
            </h1>
            <p class="text-xl text-gray-300 mb-8 max-w-3xl mx-auto">
                A comprehensive collection of my work spanning web development, mobile applications, UI/UX design, and
                AI/ML projects.
            </p>

            @auth()
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/projects/create"
                       class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105">
                        Add New Project
                    </a>
                    <button
                        class="px-8 py-3 border border-accent text-accent rounded-lg font-semibold hover:bg-accent hover:text-white transition-all duration-300">
                        <a href="/">View Statistics</a>
                    </button>
                </div>
            @endauth
        </div>
    </section>

    <!-- Filters -->
    <section class="py-8 px-6 bg-medium-gray border-b border-light-gray">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
                <!-- Search Bar -->
                <form action="/search" method="POST" class="relative flex-1 max-w-md">
                    @csrf
                    <input type="search" name="search" value="{{ old('search') }}" placeholder="Search projects..."
                           class="w-full px-4 py-3 pl-12 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors">
                    <button type="submit">
                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            @if(isset($search))
                <h1 class="text-neutral-200 text-2xl font-bold">Showing results for "{{ $search }}"</h1>
            @endif
            <div class="mb-8">
                <p class="text-gray-400">Showing {{ count($user->projects) }} projects</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Project 1 -->
                @foreach($projects as $project)
                    <div onclick="window.location.href = '{{ url('/projects', $project->id) }}'"
                         class="project-card card-hover rounded-xl overflow-hidden">
                        <div
                            class="h-48 bg-gradient-to-br from-accent/20 to-purple-500/20 rounded-lg mb-6 flex items-center justify-center">
                            <div class="text-6xl">🚀</div>
                        </div>

                        <div class="p-6">
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-bold">{{ $project->title }}</h3>
                                <span class="text-sm text-gray-400">{{ $project->created_at->format("M Y") }}</span>
                            </div>
                            <p class="text-gray-400 mb-4">{{ $project->description }}</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach($project->tags as $tag)
                                    <span style="background-color: hsl({{ rand(0, 360) }}, 80% , 60%)"
                                          class="px-3 py-1 text-white rounded-full text-sm">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                            <div class="flex gap-3">
                                <button
                                    class="flex-1 py-2 bg-accent/20 text-accent rounded-lg hover:bg-accent hover:text-white transition-colors">
                                    <a target="_blank" href="{{ $project->live_demo_url }}">
                                        Live Demo
                                    </a>
                                </button>

                                <button
                                    class="flex-1 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">
                                    <a target="_blank" href="{{ $project->github_url }}">
                                        GitHub
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination -->
            {{ $projects->links() }}
        </div>
    </section>
</x-layout>
