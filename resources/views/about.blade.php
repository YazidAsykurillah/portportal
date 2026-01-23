<x-layout>
    <div class="max-w-4xl mx-auto space-y-16">
        
        {{-- Intro --}}
        <section class="text-center space-y-6">
            <h1 class="text-4xl md:text-7xl font-heading font-black tracking-tighter uppercase">
                Who I Am
            </h1>
            <div class="neo-card bg-accent rotate-[-1deg] mx-auto max-w-2xl transform hover:rotate-0 transition-transform">
                <p class="text-xl font-bold font-sans">
                    I'm a full-stack developer who believes in bold choices and solid code. I don't just write functions; I craft experiences.
                </p>
            </div>
            <!-- <div class="prose prose-lg mx-auto font-medium text-gray-800">
                <p>[Your Bio Here] - Specialized in Laravel, Filament, and creating high-performance applications that scale.</p>
            </div> -->
        </section>

        {{-- Skills Grid --}}
        <section>
            <h2 class="text-4xl font-heading font-black mb-8 border-b-4 border-black inline-block">SKILLSET</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach(['Laravel', 'Vue.js', 'Tailwind', 'Filament', 'PHP', 'MySQL', 'Docker', 'AWS'] as $skill)
                <div class="neo-card text-center py-4 font-bold uppercase tracking-wider hover:bg-black hover:text-white cursor-default">
                    {{ $skill }}
                </div>
                @endforeach
            </div>
        </section>

        {{-- CTA Link to Contact --}}
        <section class="text-center py-12">
            <a href="{{ route('contact') }}" class="neo-btn text-xl">Let's Work Together -></a>
        </section>

    </div>
</x-layout>
