<x-layout title="Home">
    <div class="space-y-24">
        {{-- Hero Section --}}
        <section class="relative pt-20 pb-20 md:pt-32 md:pb-32 px-4 overflow-hidden">
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <h1 class="text-[8vw] leading-none font-heading font-black tracking-tighter mb-8 break-words max-w-full">
                    WEB DESIGNER<br>
                    <span class="text-transparent stroke-black stroke-2" style="-webkit-text-stroke: 2px black; color: transparent;">&</span><br>
                    DEVELOPER
                </h1>
                <p class="text-xl md:text-2xl font-sans font-medium max-w-2xl mx-auto mb-12 bg-white border-2 border-black p-4 shadow-neo inline-block md:rotate-1">
                    <!-- I build web applications that refuse to be ignored. Clean code, intuitive interface, and secure. -->
                    I design and build websites that<br> attract, engage, and convert.
                </p>
                <div class="flex flex-col md:flex-row justify-center gap-6">
                    <a href="{{ route('portfolio.index') }}" class="neo-btn text-xl w-full md:w-auto text-center">View Work</a>
                    <a href="{{ route('about') }}" class="neo-btn-outline text-xl w-full md:w-auto text-center">More About Me</a>
                </div>
            </div>
            
            {{-- Decorative Elements --}}
            <div class="absolute top-10 left-10 w-24 h-24 bg-accent border-2 border-black rounded-full mix-blend-multiply opacity-50 animate-bounce"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 bg-white border-2 border-black rotate-12 shadow-neo z-0">
                 <img src="{{ asset('images/profile_placeholder.png') }}" 
                      alt="Profile" 
                      class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500">
            </div>
        </section>

        {{-- Marquee / Transition --}}
        <div class="relative w-screen left-1/2 -ml-[50vw] overflow-hidden bg-accent border-y-8 border-black transform -skew-y-3" style="padding-top: 14rem; padding-bottom: 14rem;">
            <!-- Row 1: Left to Right -->
            <div class="absolute top-0 left-0 w-full rotate-2 opacity-50">
                 <div class="whitespace-nowrap font-heading font-black text-[10rem] text-black leading-none opacity-20 select-none">
                    DESIGN
                 </div>
            </div>

            <!-- Row 2: Right to Left (Main) -->
            <div class="relative z-10 bg-black py-8 border-y-4 border-white overflow-hidden transform rotate-1 scale-110 shadow-neo-lg group">
                <div class="animate-marquee group-hover:[animation-play-state:paused] whitespace-nowrap font-heading font-black text-6xl md:text-8xl text-white uppercase tracking-tighter" style="width: max-content; animation-duration: 180s;">
                    Web Design • Web Development • UI/UX • Branding • SEO • 
                    Web Design • Web Development • UI/UX • Branding • SEO •
                </div>
            </div>

            <!-- Row 3: Decoration -->
             <div class="absolute bottom-0 left-0 w-full -rotate-1 opacity-50 z-0">
                 <div class="whitespace-nowrap font-heading font-black text-[10rem] text-black leading-none opacity-20 select-none">
                    DEVELOPMENT
                 </div>
            </div>
        </div>

        {{-- Featured/Intro Section --}}
        <section class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="neo-card md:rotate-1">
                    <h2 class="text-4xl font-heading font-black mb-6">WHY ME?</h2>
                    <ul class="space-y-4 font-sans text-lg font-bold">
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-accent border-2 border-black flex-shrink-0"></span>
                            I obsess over the tiny details.
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-purple-400 border-2 border-black flex-shrink-0"></span>
                            Built for speed, not just looks.
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-blue-400 border-2 border-black flex-shrink-0"></span>
                            I solve problems, not just paint pixels.
                        </li>
                    </ul>
                </div>
                <div class="relative">
                     <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=1352&q=80" 
                          alt="Workspace" 
                          class="w-full h-auto border-4 border-black shadow-neo-lg grayscale hover:grayscale-0 transition-all duration-500">
                </div>
            </div>
        </section>

        {{-- Services Section --}}
        <section class="max-w-7xl mx-auto px-4 py-24 border-t-4 border-black">
            <h2 class="text-4xl md:text-8xl font-heading font-black mb-8 text-center uppercase tracking-tight">
                WHAT I DO
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                {{-- Design Card --}}
                <div class="group border-4 border-black p-8 md:p-12 shadow-neo bg-white hover:shadow-neo-lg transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex flex-col items-start gap-4 mb-8 border-b-4 border-black pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="square" stroke-linejoin="miter" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6a2 2 0 012-2h3a1 1 0 001-1V4z" />
                        </svg>
                        <h3 class="text-2xl md:text-5xl font-heading font-black">DESIGN</h3>
                    </div>
                    <ul class="space-y-4 text-xl md:text-2xl font-bold">
                        <li class="flex items-center gap-4">
                            <span class="w-4 h-4 bg-black"></span> UI/UX Design
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-4 h-4 bg-black"></span> Web Design
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-4 h-4 bg-black"></span> Branding & Identity
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-4 h-4 bg-black"></span> Mobile App Design
                        </li>
                    </ul>
                </div>

                {{-- Development Card --}}
                <div class="group border-4 border-black p-8 md:p-12 shadow-neo bg-black text-white hover:shadow-neo-lg transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex flex-col items-start gap-4 mb-8 border-b-4 border-white pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="square" stroke-linejoin="miter" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        <h3 class="text-2xl md:text-5xl font-heading font-black break-all md:break-normal">DEVELOP</h3>
                    </div>
                    <ul class="space-y-4 text-xl md:text-2xl font-bold">
                        <li class="flex items-center gap-4">
                            <span class="w-4 h-4 bg-white"></span> Frontend
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-4 h-4 bg-white"></span> Backend
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-4 h-4 bg-white"></span> Performance Opt.
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-4 h-4 bg-white"></span> SEO Implementation
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
        {{-- Portfolio --}}
        <section class="max-w-7xl mx-auto px-4 py-24 border-t-4 border-black">
            <h2 class="text-4xl md:text-8xl font-heading font-black mb-24 text-center uppercase tracking-tight">
                SELECTED WORK
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                @forelse($projects as $project)
                    <a href="{{ route('portfolio.show', $project->slug) }}" class="group block h-full"> 
                        <article class="neo-card h-full flex flex-col p-0 overflow-hidden hover:rotate-1 transition-transform duration-300">
                            {{-- Image --}}
                            <div class="aspect-[4/3] border-b-2 border-black overflow-hidden relative bg-gray-100">
                                @if($project->image)
                                    <img src="{{ Storage::url($project->image) }}" 
                                         alt="{{ $project->title }}" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-400">
                                        <span class="font-heading font-bold text-xl">NO IMAGE</span>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-accent/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            
                            {{-- Content --}}
                            <div class="p-6 flex flex-col flex-grow bg-white">
                                <h3 class="text-2xl font-heading font-black mb-2 uppercase group-hover:text-accent transition-colors">
                                    {{ $project->title }}
                                </h3>
                                
                                @if($project->description)
                                    <p class="font-sans text-sm font-medium line-clamp-3 mb-4 flex-grow">
                                        {{ Str::limit($project->description, 100) }}
                                    </p>
                                @endif

                                <div class="flex items-center gap-2 mt-auto">
                                    <span class="font-bold border-b-2 border-black group-hover:border-accent group-hover:text-accent transition-colors">
                                        VIEW CASE
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-1 group-hover:text-accent transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </div>
                            </div>
                        </article>
                    </a>
                @empty
                    <div class="col-span-full text-center py-20 border-4 border-black border-dashed bg-gray-50">
                        <p class="font-heading text-3xl font-bold text-gray-400 uppercase">Coming Soon</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center">
                <a href="{{ route('portfolio.index') }}" class="neo-btn text-xl uppercase">
                    View All Work
                </a>
            </div>
        </section>

        {{-- CTA --}}
        <section class="bg-accent border-y-2 border-black py-24 text-center px-4">
             <h2 class="text-4xl md:text-7xl font-heading font-black mb-8 leading-tight">READY TO START<br>BUILDING?</h2>
             <a href="{{ route('contact') }}" class="neo-btn text-2xl px-12 py-4 bg-white text-black hover:bg-black hover:text-white">Let's Talk</a>
        </section>
    </div>
</x-layout>
