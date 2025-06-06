<!-- Navigation -->
<nav class="fixed top-0 w-full bg-dark-gray/80 backdrop-blur-md z-50 border-b border-light-gray">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <a href="/" class="text-xl font-bold gradient-text">Clarence Palo</a>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="hover:text-accent transition-colors">Home</a>
                <a href="#about" class="hover:text-accent transition-colors">About</a>
                <a href="/projects" class="hover:text-accent transition-colors">Projects</a>
                <a href="#contact" class="hover:text-accent transition-colors">Contact</a>
                @guest
                    <a href="/login" class="text-accent hover:text-blue-900 transition-colors font-semibold">Sign In</a>
                @endguest
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="text-red-600 hover:text-red-900 transition-colors font-semibold">Log Out</button>
                    </form>
                @endauth
            </div>
            <button id="mobile-menu-btn" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>

