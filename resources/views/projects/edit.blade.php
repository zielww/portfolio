<x-layout>
    <!-- Back Button -->
    <div class="pt-24 px-6">
        <div class="max-w-7xl mx-auto">
            <a href="project-detail.html" class="inline-flex items-center text-gray-300 hover:text-accent transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Project Details
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="pt-8 pb-20 px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Edit <span class="gradient-text">Project</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Update your project details, add new features, or modify existing information.
                </p>
            </div>

            <!-- Form -->
            <form class="space-y-8">
                <!-- Basic Information -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Basic Information</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2 text-white">Project Name *</label>
                            <input type="text" required value="E-Commerce Platform"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white"
                                   placeholder="Enter project name">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2 text-white">Category *</label>
                            <select required class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white">
                                <option value="">Select category</option>
                                <option value="web" selected>Web Development</option>
                                <option value="mobile">Mobile Apps</option>
                                <option value="design">UI/UX Design</option>
                                <option value="ai">AI/ML</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="block text-sm font-medium mb-2 text-white">Short Description *</label>
                        <textarea required rows="3" maxlength="200"
                                  class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors resize-none text-white"
                                  placeholder="Brief description of the project (max 200 characters)">A comprehensive e-commerce solution built with modern technologies, featuring real-time inventory management and secure payment processing.</textarea>
                        <div class="text-right text-sm text-gray-400 mt-1">
                            <span id="char-count">142</span>/200 characters
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="block text-sm font-medium mb-2 text-white">Detailed Description</label>
                        <textarea rows="6"
                                  class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors resize-none text-white"
                                  placeholder="Detailed description of the project, challenges faced, and solutions implemented">This e-commerce platform was designed to revolutionize online shopping experiences for both customers and administrators. Built from the ground up with scalability and performance in mind, the platform handles everything from product catalog management to complex order processing workflows.

The project involved creating a comprehensive ecosystem that includes a customer-facing storefront, an administrative dashboard, a mobile application, and various microservices for handling payments, inventory, and analytics.</textarea>
                    </div>
                </div>

                <!-- Project Details -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Project Details</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2 text-white">Client</label>
                            <input type="text" value="TechCorp Solutions"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white"
                                   placeholder="e.g., TechCorp Solutions">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2 text-white">Duration</label>
                            <input type="text" value="4 months"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white"
                                   placeholder="e.g., 3 months">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2 text-white">Team Size</label>
                            <input type="text" value="6 people"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white"
                                   placeholder="e.g., 5 people">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2 text-white">Your Role</label>
                            <input type="text" value="Lead Full-Stack Developer"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white"
                                   placeholder="e.g., Lead Developer">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2 text-white">Status</label>
                            <select class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white">
                                <option value="completed" selected>Completed</option>
                                <option value="in-progress">In Progress</option>
                                <option value="on-hold">On Hold</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2 text-white">Budget</label>
                            <input type="text" value="$150,000"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white"
                                   placeholder="e.g., $50,000">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="block text-sm font-medium mb-2 text-white">Completion Date</label>
                        <input type="date" value="2024-01-15"
                               class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white">
                    </div>
                </div>

                <!-- Technologies -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Technologies Used</h2>

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2 text-white">Add Technology</label>
                        <div class="flex gap-2">
                            <input type="text" id="tech-input"
                                   class="flex-1 px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white"
                                   placeholder="Enter technology name">
                            <button type="button" id="add-tech-btn"
                                    class="px-6 py-3 bg-accent rounded-lg hover:bg-accent/80 transition-colors text-white">
                                Add
                            </button>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2 text-white">Current Technologies</label>
                        <div id="tech-tags" class="flex flex-wrap gap-2">
                            <div class="tech-tag">
                                React
                                <span class="remove-tech">×</span>
                            </div>
                            <div class="tech-tag">
                                Node.js
                                <span class="remove-tech">×</span>
                            </div>
                            <div class="tech-tag">
                                MongoDB
                                <span class="remove-tech">×</span>
                            </div>
                            <div class="tech-tag">
                                TypeScript
                                <span class="remove-tech">×</span>
                            </div>
                            <div class="tech-tag">
                                Next.js
                                <span class="remove-tech">×</span>
                            </div>
                            <div class="tech-tag">
                                Tailwind CSS
                                <span class="remove-tech">×</span>
                            </div>
                            <div class="tech-tag">
                                Express
                                <span class="remove-tech">×</span>
                            </div>
                            <div class="tech-tag">
                                Redis
                                <span class="remove-tech">×</span>
                            </div>
                            <div class="tech-tag">
                                AWS
                                <span class="remove-tech">×</span>
                            </div>
                            <div class="tech-tag">
                                Docker
                                <span class="remove-tech">×</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Links -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Project Links</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2 text-white">Live Demo URL</label>
                            <input type="url" value="https://ecommerce-demo.alexchen.dev"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white"
                                   placeholder="https://example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2 text-white">GitHub URL</label>
                            <input type="url" value="https://github.com/alexchen/ecommerce-platform"
                                   class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors text-white"
                                   placeholder="https://github.com/username/repo">
                        </div>
                    </div>
                </div>

                <!-- Current Images -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Current Project Images</h2>

                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-6">
                        <div class="image-preview">
                            <div class="h-32 bg-gradient-to-br from-accent/20 to-purple-500/20 rounded-lg flex items-center justify-center">
                                <div class="text-2xl">🏠</div>
                            </div>
                            <div class="remove-image">×</div>
                            <div class="text-xs text-gray-400 mt-1 text-center">Homepage</div>
                        </div>
                        <div class="image-preview">
                            <div class="h-32 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-lg flex items-center justify-center">
                                <div class="text-2xl">🛍️</div>
                            </div>
                            <div class="remove-image">×</div>
                            <div class="text-xs text-gray-400 mt-1 text-center">Product Catalog</div>
                        </div>
                        <div class="image-preview">
                            <div class="h-32 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-lg flex items-center justify-center">
                                <div class="text-2xl">🛒</div>
                            </div>
                            <div class="remove-image">×</div>
                            <div class="text-xs text-gray-400 mt-1 text-center">Shopping Cart</div>
                        </div>
                        <div class="image-preview">
                            <div class="h-32 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-lg flex items-center justify-center">
                                <div class="text-2xl">💳</div>
                            </div>
                            <div class="remove-image">×</div>
                            <div class="text-xs text-gray-400 mt-1 text-center">Checkout</div>
                        </div>
                    </div>
                </div>

                <!-- Add New Images -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Add New Images</h2>

                    <div class="drag-area rounded-lg p-8 text-center">
                        <div class="text-6xl mb-4">📁</div>
                        <p class="text-lg mb-2 text-white">Drag and drop images here</p>
                        <p class="text-gray-400 mb-4">or</p>
                        <button type="button" class="px-6 py-3 bg-accent rounded-lg hover:bg-accent/80 transition-colors text-white">
                            Browse Files
                        </button>
                        <input type="file" multiple accept="image/*" class="hidden">
                        <p class="text-sm text-gray-400 mt-4">Supported formats: JPG, PNG, GIF (Max 5MB each)</p>
                    </div>
                </div>

                <!-- Challenges & Solutions -->
                <div class="project-card rounded-xl p-8">
                    <h2 class="text-2xl font-bold mb-6 gradient-text">Challenges & Solutions</h2>

                    <div id="challenges-container" class="space-y-6">
                        <div class="challenge-item border border-gray-600 rounded-lg p-4">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-lg font-semibold text-white">Challenge #1</h3>
                                <button type="button" class="text-red-400 hover:text-red-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-white">Challenge Description</label>
                                    <textarea rows="3"
                                              class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors resize-none text-white"
                                              placeholder="Describe the challenge you faced">Managing inventory across multiple sales channels while preventing overselling and maintaining data consistency was a complex challenge.</textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-white">Solution</label>
                                    <textarea rows="3"
                                              class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors resize-none text-white"
                                              placeholder="Explain how you solved this challenge">Implemented a distributed inventory system using Redis for real-time updates and event-driven architecture with message queues to ensure all systems stay synchronized.</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="challenge-item border border-gray-600 rounded-lg p-4">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-lg font-semibold text-white">Challenge #2</h3>
                                <button type="button" class="text-red-400 hover:text-red-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-white">Challenge Description</label>
                                    <textarea rows="3"
                                              class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors resize-none text-white"
                                              placeholder="Describe the challenge you faced">Ensuring secure payment processing while maintaining a smooth user experience and compliance with various regulations.</textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-white">Solution</label>
                                    <textarea rows="3"
                                              class="w-full px-4 py-3 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors resize-none text-white"
                                              placeholder="Explain how you solved this challenge">Integrated multiple payment gateways with tokenization, implemented fraud detection algorithms, and achieved PCI DSS compliance through secure architecture design.</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" id="add-challenge-btn" class="mt-4 px-6 py-3 border border-accent text-accent rounded-lg hover:bg-accent hover:text-white transition-all duration-300">
                        Add Another Challenge
                    </button>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button type="button"
                            class="px-8 py-3 border border-accent text-accent rounded-lg hover:bg-accent hover:text-white transition-all duration-300">
                        Preview Changes
                    </button>
                    <button type="submit"
                            class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105 text-white">
                        Save Changes
                    </button>
                    <a href="project-detail.html"
                       class="px-8 py-3 bg-gray-600 text-center rounded-lg hover:bg-gray-500 transition-colors text-white">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </main>
</x-layout>
