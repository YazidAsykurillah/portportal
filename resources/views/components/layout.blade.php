<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'My Portfolio' }}</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f0f0f0] text-black font-sans antialiased flex flex-col min-h-screen selection:bg-accent selection:text-black overflow-x-hidden">

    <nav class="bg-white border-b-2 border-black sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-3xl font-heading font-extrabold text-black uppercase tracking-tighter hover:text-accent transition-colors stroke-black stroke-2">
                        asykurillah<span class="text-accent">.</span>
                    </a>
                </div>
                
                {{-- Desktop Menu --}}
                <div class="hidden sm:flex sm:space-x-8">
                    <a href="{{ route('home') }}" class="text-black hover:bg-black hover:text-white px-3 py-2 text-lg font-bold font-heading uppercase transition-all {{ request()->routeIs('home') ? 'bg-black text-white' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="text-black hover:bg-black hover:text-white px-3 py-2 text-lg font-bold font-heading uppercase transition-all {{ request()->routeIs('about') ? 'bg-black text-white' : '' }}">About</a>
                    <a href="{{ route('portfolio.index') }}" class="text-black hover:bg-black hover:text-white px-3 py-2 text-lg font-bold font-heading uppercase transition-all {{ request()->routeIs('portfolio.*') ? 'bg-black text-white' : '' }}">Work</a>
                    <a href="{{ route('blog.index') }}" class="text-black hover:bg-black hover:text-white px-3 py-2 text-lg font-bold font-heading uppercase transition-all {{ request()->routeIs('blog.*') ? 'bg-black text-white' : '' }}">Blog</a>
                </div>
                
                <div class="hidden sm:flex items-center space-x-4">
                    <a href="{{ route('contact') }}" class="neo-btn text-sm! py-2! px-4!">Let's Talk</a>
                    @auth
                        <a href="/admin" class="neo-btn-outline text-sm! py-2! px-4!">Dashboard</a>
                    @endauth
                </div>

                {{-- Mobile Menu Button --}}
                <div class="flex items-center sm:hidden">
                    <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="text-black hover:text-accent focus:outline-none p-2 border-2 border-black shadow-neo-sm">
                        <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu Dropdown --}}
        <div class="hidden sm:hidden border-t-2 border-black bg-white absolute w-full left-0 z-40 shadow-neo" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-4 text-xl font-heading font-black uppercase text-black hover:bg-accent hover:pl-6 transition-all border-b-2 border-black {{ request()->routeIs('home') ? 'bg-black text-white hover:bg-black hover:text-white' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="block px-3 py-4 text-xl font-heading font-black uppercase text-black hover:bg-accent hover:pl-6 transition-all border-b-2 border-black {{ request()->routeIs('about') ? 'bg-black text-white hover:bg-black hover:text-white' : '' }}">About</a>
                <a href="{{ route('portfolio.index') }}" class="block px-3 py-4 text-xl font-heading font-black uppercase text-black hover:bg-accent hover:pl-6 transition-all border-b-2 border-black {{ request()->routeIs('portfolio.*') ? 'bg-black text-white hover:bg-black hover:text-white' : '' }}">Work</a>
                <a href="{{ route('blog.index') }}" class="block px-3 py-4 text-xl font-heading font-black uppercase text-black hover:bg-accent hover:pl-6 transition-all border-b-2 border-black {{ request()->routeIs('blog.*') ? 'bg-black text-white hover:bg-black hover:text-white' : '' }}">Blog</a>
            </div>
            <div class="pt-4 pb-4 border-t border-gray-200 px-4 space-y-3">
                 <a href="{{ route('contact') }}" class="neo-btn w-full text-center">Let's Talk</a>
                 @auth
                    <a href="/admin" class="neo-btn-outline w-full text-center">Dashboard</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        {{ $slot }}
    </main>

    <footer class="bg-black text-white border-t-4 border-accent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <span class="text-4xl font-heading font-black tracking-tighter block mb-2">LET'S WORK<br>TOGETHER.</span>
                    <p class="text-gray-400 font-sans text-sm">&copy; {{ date('Y') }} All rights reserved.</p>
                </div>
                <div class="flex justify-end space-x-6">
                    <!-- Social links placeholder -->
                    <a href="#" class="text-white hover:text-accent font-bold uppercase font-heading">LinkedIn</a>
                    <a href="#" class="text-white hover:text-accent font-bold uppercase font-heading">GitHub</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
