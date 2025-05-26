<x-layout>
    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-dark-gray via-medium-gray to-dark-gray"></div>
        <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
            <div class="floating">
                <div class="w-32 h-32 mx-auto mb-8 rounded-full bg-gradient-to-r from-accent to-purple-500 p-1">
                    <div class="w-full h-full rounded-full bg-dark-gray flex items-center justify-center">
                        <img class="rounded-full font-bold gradient-text" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/image_2.jpg') }}" alt="">
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
                <a href="#about" class="px-8 py-3 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105">
                    View My Work
                </a>
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
                                    <img class="rounded-full font-bold gradient-text" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/image_2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold mb-2">Clarence Palo</h3>
                                <p class="text-accent font-medium">{{ Str::title($user->position) }}</p>
                            </div>
                        </div>

                        <p class="text-gray-300 leading-relaxed mb-6 text-justify">
                            As a dedicated student and aspiring senior full-stack developer, I've gained hands-on experience through two impactful internships, where I contributed to developing scalable web applications and intuitive user interfaces. I love the process of bridging design and functionality, and I'm always looking for innovative ways to solve problems with code. Outside of my studies, I'm constantly diving into new technologies, collaborating on open-source projects, and seeking opportunities to learn and improve. I believe in the power of well-crafted code and thoughtful design.
                        </p>

                        <p class="text-gray-300 leading-relaxed mb-6 text-justify">
                            When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or mentoring aspiring developers. I believe in the power of clean code, thoughtful design, and continuous learning.
                        </p>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center p-4 bg-dark-gray rounded-lg">
                                <div class="text-2xl font-bold gradient-text">{{ count($user->projects) }}</div>
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
                                <div class="text-2xl font-bold gradient-text">{{ count(\App\Models\Tag::all()) }}+</div>
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
                    <div class="cursor-pointer project-card rounded-xl p-6 text-center card-hover">
                        <div class="text-4xl mb-4">🏆</div>
                        <h4 class="font-bold mb-2">Best Innovation Award</h4>
                        <p class="text-gray-400 text-sm">TechCorp Annual Awards 2023</p>
                    </div>

                    <div class="cursor-pointer project-card rounded-xl p-6 text-center card-hover">
                        <div class="text-4xl mb-4">📜</div>
                        <h4 class="font-bold mb-2">AWS Certified</h4>
                        <p class="text-gray-400 text-sm">Solutions Architect Professional</p>
                    </div>

                    <div class="cursor-pointer project-card rounded-xl p-6 text-center card-hover">
                        <div class="text-4xl mb-4">🎯</div>
                        <h4 class="font-bold mb-2">Google Cloud</h4>
                        <p class="text-gray-400 text-sm">Professional Developer</p>
                    </div>

                    <div class="cursor-pointer project-card rounded-xl p-6 text-center card-hover">
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

            <!-- Projects Grid -->
            <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                @foreach($user->projects->take(6) as $project)
                    <div onclick="window.location.href = '{{ url('/projects', $project->id) }}'" class="cursor-pointer project-card card-hover rounded-xl p-6 fade-in" data-category="web">
                        <div class="h-48 bg-gradient-to-br from-accent/20 to-purple-500/20 rounded-lg mb-6 flex items-center justify-center">
                            <div class="text-6xl">🚀</div>
                        </div>
                        <h3 class="text-xl font-bold mb-3">{{ $project->title }}</h3>
                        <p class="text-gray-400 mb-4">{{ $project->description }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($project->tags as $tag)
                                <span style="background-color: hsl({{ rand(0, 360) }}, 80% , 60%)" class="px-3 py-1 text-white rounded-full text-sm">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 py-2 bg-accent/20 text-accent rounded-lg hover:bg-accent hover:text-white transition-colors">
                                <a  target="_blank" href="{{ $project->live_demo_url }}" >
                                    Live Demo
                                </a>
                            </button>

                            <button class="flex-1 py-2 border border-gray-600 rounded-lg hover:border-accent transition-colors">
                                <a target="_blank"  href="{{ $project->github_url }}" >
                                    GitHub
                                </a>
                            </button>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-6 bg-medium-gray">
        <div class="max-w-4xl mx-auto text-center">
            <div class="fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Let's Work <span class="gradient-text">Together</span></h2>
                <p class="text-gray-400 text-lg mb-12 max-w-2xl mx-auto">
                    I'm always interested in new opportunities and exciting projects. Let's discuss how we can bring your ideas to life.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <a href="mailto:clarencepalo0618@email.com" target="_blank"  class="project-card rounded-xl p-6 hover:shadow-2xl animate-pulse cursor-pointer">
                        <div class="text-4xl mb-4">📧</div>
                        <h3 class="font-semibold mb-2">Email</h3>
                        <p class="text-gray-400">clarencepalo0618@email.com</p>
                    </a>
                    <a  href="https://linkedin.com/in/ClarencePalo"  target="_blank"  class="project-card rounded-xl p-6 hover:shadow-2xl animate-pulse cursor-pointer">
                        <div class="text-4xl mb-4">💼</div>
                        <h3 class="font-semibold mb-2">LinkedIn</h3>
                        <p class="text-gray-400">linkedin.com/ClarencePalo</p>
                    </a>
                    <a href="https://github.com/ClarencePalo"  target="_blank"  class="project-card rounded-xl p-6 hover:shadow-2xl animate-pulse cursor-pointer">
                        <div class="text-4xl mb-4">🐙</div>
                        <h3 class="font-semibold mb-2">GitHub</h3>
                        <p class="text-gray-400">github.com/ClarencePalo</p>
                    </a>
                </div>

                <button class="px-12 py-4 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold text-lg hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105">
                    Get In Touch
                </button>
            </div>
        </div>
    </section>
</x-layout>
