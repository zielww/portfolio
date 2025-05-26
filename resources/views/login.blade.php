<x-layout>
    <!-- Main Content -->
    <div class="w-full max-w-md mx-auto px-6 relative z-10 my-32">
        <!-- Logo/Avatar -->
        <div class="text-center mb-8">
            <div class="floating">
                <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-gradient-to-r from-accent to-purple-500 p-1">
                    <div class="w-full h-full rounded-full bg-dark-gray flex items-center justify-center">
                        <img class="rounded-full font-bold gradient-text" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/image_2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <h1 class="text-3xl font-bold mb-2">Welcome Back</h1>
            <p class="text-gray-400">Sign in to manage your portfolio</p>
        </div>

        <!-- Login Form -->
        <div class="project-card rounded-xl p-8">
            <form class="space-y-6">
                <!-- Email Input -->
                <div>
                    <label class="block text-sm font-medium mb-2">Email Address</label>
                    <input type="email" required
                           class="w-full px-4 py-4 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                           placeholder="Enter your email">
                </div>

                <!-- Password Input -->
                <div>
                    <label class="block text-sm font-medium mb-2">Password</label>
                    <input type="password" required
                           class="w-full px-4 py-4 bg-light-gray border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors"
                           placeholder="Enter your password">
                </div>

                <!-- Login Button -->
                <button type="submit" class="w-full py-4 bg-gradient-to-r from-accent to-purple-500 rounded-lg font-semibold hover:shadow-lg hover:shadow-accent/25 transition-all duration-300 transform hover:scale-105">
                    Sign In
                </button>
            </form>
        </div>
    </div>

    <!-- Loading Overlay -->
    <div id="loading-overlay" class="fixed inset-0 bg-black/80 hidden z-50 flex items-center justify-center">
        <div class="text-center">
            <div class="w-16 h-16 border-4 border-accent border-t-transparent rounded-full animate-spin mx-auto mb-4"></div>
            <p class="text-white">Signing you in...</p>
        </div>
    </div>

</x-layout>

