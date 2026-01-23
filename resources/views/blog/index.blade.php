<x-layout title="Blog">
    <div class="max-w-5xl mx-auto space-y-12">
        <header class="text-center border-b-4 border-black pb-12">
            <h1 class="text-4xl md:text-7xl font-heading font-black tracking-tighter uppercase">
                THOUGHTS<br>& WORDS
            </h1>
        </header>

        <div class="space-y-8">
            @foreach($posts as $post)
                <article class="neo-card group relative hover:bg-black hover:text-white transition-colors duration-300">
                    <div class="flex flex-col md:flex-row gap-6 md:items-center">
                        <div class="md:w-1/4 shrink-0">
                            <time datetime="{{ $post->published_at }}" class="block font-heading font-bold text-4xl leading-none md:text-right group-hover:text-accent">
                                {{ \Carbon\Carbon::parse($post->published_at)->format('d') }}<br>
                                <span class="text-lg uppercase text-gray-400 group-hover:text-gray-300">
                                    {{ \Carbon\Carbon::parse($post->published_at)->format('M Y') }}
                                </span>
                            </time>
                        </div>
                        
                        <div class="md:w-3/4 space-y-3">
                            <h2 class="text-3xl font-heading font-bold leading-tight uppercase group-hover:text-accent">
                                <a href="{{ route('blog.show', $post) }}" class="before:absolute before:inset-0">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p class="font-sans font-medium text-gray-600 group-hover:text-gray-300 text-lg">
                                {{ Str::limit(strip_tags($post->content), 150) }}
                            </p>
                            
                            <div class="flex items-center gap-2 text-sm font-bold uppercase tracking-widest pt-2">
                                <span class="w-2 h-2 bg-accent rounded-full inline-block"></span>
                                {{ $post->author->name }}
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
