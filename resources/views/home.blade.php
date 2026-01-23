<x-layout title="Home">
    <div class="space-y-24">
        {{-- Hero Section --}}
        <section class="relative pt-20 pb-20 md:pt-32 md:pb-32 px-4 overflow-hidden">
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <h1 class="text-[8vw] leading-none font-heading font-black tracking-tighter mb-8 whitespace-nowrap">
                    WEB<br>
                    <span class="text-transparent stroke-black stroke-2" style="-webkit-text-stroke: 2px black; color: transparent;">APPLICATION</span><br>
                    DEVELOPER
                </h1>
                <p class="text-xl md:text-2xl font-sans font-medium max-w-2xl mx-auto mb-12 bg-white border-2 border-black p-4 shadow-neo inline-block rotate-1">
                    I build web applications that refuse to be ignored. Clean code, intuitive interface, and secure.
                </p>
                <div class="flex flex-col md:flex-row justify-center gap-6">
                    <a href="{{ route('portfolio.index') }}" class="neo-btn text-xl w-full md:w-auto text-center">View Work</a>
                    <a href="{{ route('about') }}" class="neo-btn-outline text-xl bg-white w-full md:w-auto text-center">More About Me</a>
                </div>
            </div>
            
            {{-- Decorative Elements --}}
            <div class="absolute top-10 left-10 w-24 h-24 bg-accent border-2 border-black rounded-full mix-blend-multiply opacity-50 animate-bounce"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 bg-purple-400 border-2 border-black rotate-12 shadow-neo z-0"></div>
        </section>

        {{-- Marquee / Transition --}}
        <div class="bg-black text-white py-6 overflow-hidden border-y-4 border-black rotate-[-2deg] scale-110">
            <div class="animate-marquee whitespace-nowrap font-heading font-bold text-4xl uppercase tracking-widest">
                Laravel • Tailwind • Vue.js • React • Design • Development • Security • Performance •
                Laravel • Tailwind • Vue.js • React • Design • Development • Security • Performance •
            </div>
        </div>

        {{-- Featured/Intro Section --}}
        <section class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="neo-card rotate-1">
                    <h2 class="text-4xl font-heading font-black mb-6">WHY ME?</h2>
                    <ul class="space-y-4 font-sans text-lg font-bold">
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-accent border-2 border-black flex-shrink-0"></span>
                            Obsessive Attention to Detail
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-purple-400 border-2 border-black flex-shrink-0"></span>
                            Performance First Approach
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-blue-400 border-2 border-black flex-shrink-0"></span>
                            Modern Tech Stack
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
        
        {{-- CTA --}}
        <section class="bg-accent border-y-2 border-black py-24 text-center px-4">
             <h2 class="text-5xl md:text-7xl font-heading font-black mb-8 leading-tight">READY TO START<br>BUILDING?</h2>
             <a href="{{ route('contact') }}" class="neo-btn text-2xl px-12 py-4 bg-white text-black hover:bg-black hover:text-white">Let's Talk</a>
        </section>
    </div>
</x-layout>
