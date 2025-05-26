<x-layout>
    <!-- Main Content -->
    <main class="pt-32 pb-20 px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Create New <span class="gradient-text">Project</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Add a new project to your portfolio. Fill in the details below to showcase your work.
                </p>
            </div>

            <!-- Form -->
            <form class="space-y-8" action="/projects" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Basic Information -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Basic Information</h2>

                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Project Name *</label>
                            <input type="text" name="title" required value="{{ old('name') }}"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                                   placeholder="Enter project name">
                            @error('name')
                            <p class="text-red-600 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="block text-sm font-medium mb-2">Short Description *</label>
                        <textarea required name="description" rows="3" maxlength="200"
                                  class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors resize-none"
                                  placeholder="Brief description of the project (max 200 characters)">{{ old('description') }}</textarea>
                        @error('description')
                        <p class="text-red-600 text-xs font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Technologies -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Technologies Used</h2>

                    <div class="flex-col items-center">
                        @foreach(\App\Models\Tag::all() as $tag)
                            <input type="checkbox" class="m-2" name="tags[]" value="{{ $tag->name }}">{{ $tag->name }}
                        @endforeach
                    </div>

                </div>

                <!-- Links -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Project Links</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Live Demo URL</label>
                            <input type="url" name="demo_url" value="{{ old('demo_url') }}"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                                   placeholder="https://example.com">
                            @error('demo_url')
                            <p class="text-red-600 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">GitHub URL</label>
                            <input type="url" name="github_url" value="{{ old('github_url') }}"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                                   placeholder="https://github.com/username/repo">
                            @error('github_url')
                            <p class="text-red-600 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Project Image</h2>

                    <div class="drag-area rounded-lg p-8 text-center">
                        <div class="text-6xl mb-4">📁</div>
                        <p class="text-lg mb-2">Drag and drop image here</p>
                        <p class="text-gray-400 mb-4">or</p>

                        <input type="file" multiple name="image" accept="image/*"
                               class="px-2 py-3 bg-accent rounded-lg hover:bg-accent/80 transition-colors text-center">
                        <p class="text-sm text-gray-400 mt-4">Supported formats: JPG, PNG, GIF (Max 5MB each)</p>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button type="submit"
                            class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105">
                        Create Project
                    </button>
                    <a href="/projects"
                       class="px-8 py-3 bg-gray-600 text-center rounded-lg hover:bg-gray-500 transition-colors">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </main>
</x-layout>
