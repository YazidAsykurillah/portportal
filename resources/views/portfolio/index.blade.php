<x-layout :title="$title" :meta-description="$meta_description ?? null" :og-title="$og_title ?? null" :og-description="$og_description ?? null" :og-image="$og_image ?? null">
    <div class="space-y-12">
        <header class="text-center space-y-4">
            <h1 class="text-4xl md:text-7xl font-heading font-black tracking-tighter uppercase">
                SELECTED<br>WORK
            </h1>
            <p class="text-xl font-bold font-sans max-w-2xl mx-auto">
                Things I've built, broken, and fixed again.
            </p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="neo-card group relative h-full flex flex-col">
                    @if($project->images && count($project->images) > 0)
                        <div class="relative mb-6 border-2 border-black overflow-hidden h-64">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 md:grayscale group-hover:grayscale-0" src="{{ asset('storage/' . $project->images[0]) }}" alt="{{ $project->title }}">
                            <div class="absolute inset-0 bg-accent mix-blend-multiply opacity-0 group-hover:opacity-20 transition-opacity"></div>
                        </div>
                    @else
                        <div class="relative mb-6 border-2 border-black overflow-hidden h-64 bg-gray-100 flex items-center justify-center">
                            <span class="font-heading font-black text-4xl text-gray-300 uppercase">NO IMAGE</span>
                        </div>
                    @endif
                    
                    <div class="flex-1 flex flex-col">
                        <h3 class="text-2xl font-heading font-black uppercase mb-3 leading-none group-hover:text-accent transition-colors">
                            <a href="{{ route('portfolio.show', $project) }}" class="before:absolute before:inset-0">
                                {{ $project->title }}
                            </a>
                        </h3>
                        <p class="font-sans font-medium text-gray-600 mb-6 flex-grow">
                            {{ Str::limit(strip_tags($project->description), 100) }}
                        </p>
                        
                        <div class="flex justify-between items-end border-t-2 border-black pt-4 mt-auto">
                            <span class="font-bold text-sm uppercase tracking-widest">View Case Study</span>
                            <span class="text-2xl transform group-hover:translate-x-2 transition-transform">-></span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
