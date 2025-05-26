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
            <form class="space-y-8">
                <!-- Basic Information -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Basic Information</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Project Name *</label>
                            <input type="text" required
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                                   placeholder="Enter project name">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Category *</label>
                            <select required class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors">
                                <option value="">Select category</option>
                                <option value="web">Web Development</option>
                                <option value="mobile">Mobile Apps</option>
                                <option value="design">UI/UX Design</option>
                                <option value="ai">AI/ML</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="block text-sm font-medium mb-2">Short Description *</label>
                        <textarea required rows="3" maxlength="200"
                                  class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors resize-none"
                                  placeholder="Brief description of the project (max 200 characters)"></textarea>
                    </div>

                    <div class="mt-6">
                        <label class="block text-sm font-medium mb-2">Detailed Description</label>
                        <textarea rows="6"
                                  class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors resize-none"
                                  placeholder="Detailed description of the project, challenges faced, and solutions implemented"></textarea>
                    </div>
                </div>

                <!-- Project Details -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Project Details</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Duration</label>
                            <input type="text"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                                   placeholder="e.g., 3 months">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Team Size</label>
                            <input type="text"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                                   placeholder="e.g., 5 people">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Your Role</label>
                            <input type="text"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                                   placeholder="e.g., Lead Developer">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Status</label>
                            <select class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors">
                                <option value="completed">Completed</option>
                                <option value="in-progress">In Progress</option>
                                <option value="on-hold">On Hold</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="block text-sm font-medium mb-2">Completion Date</label>
                        <input type="date"
                               class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors">
                    </div>
                </div>

                <!-- Technologies -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Technologies Used</h2>

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">Technologies (comma separated)</label>
                        <input type="text"
                               class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                               placeholder="React, Node.js, MongoDB, etc.">
                    </div>
                </div>

                <!-- Links -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Project Links</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Live Demo URL</label>
                            <input type="url"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                                   placeholder="https://example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">GitHub URL</label>
                            <input type="url"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                                   placeholder="https://github.com/username/repo">
                        </div>
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Project Images</h2>

                    <div class="drag-area rounded-lg p-8 text-center">
                        <div class="text-6xl mb-4">📁</div>
                        <p class="text-lg mb-2">Drag and drop images here</p>
                        <p class="text-gray-400 mb-4">or</p>
                        <button type="button" class="px-6 py-3 bg-accent rounded-lg hover:bg-accent/80 transition-colors">
                            Browse Files
                        </button>
                        <input type="file" multiple accept="image/*" class="hidden">
                        <p class="text-sm text-gray-400 mt-4">Supported formats: JPG, PNG, GIF (Max 5MB each)</p>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button type="button"
                            class="px-8 py-3 border border-accent text-accent rounded-lg hover:bg-accent hover:text-white transition-all duration-300">
                        Preview Project
                    </button>
                    <button type="submit"
                            class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105">
                        Create Project
                    </button>
                    <a href="projects.html"
                       class="px-8 py-3 bg-gray-600 text-center rounded-lg hover:bg-gray-500 transition-colors">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </main>
</x-layout>
