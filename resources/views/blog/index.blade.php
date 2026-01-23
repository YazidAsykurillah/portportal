<x-layout :title="$title" :meta-description="$meta_description ?? null" :og-title="$og_title ?? null" :og-description="$og_description ?? null" :og-image="$og_image ?? null">
    <div class="max-w-5xl mx-auto space-y-12">
        <header class="text-center border-b-4 border-black pb-12">
            <h1 class="text-4xl md:text-7xl font-heading font-black tracking-tighter uppercase">
                THOUGHTS<br>& WORDS
            </h1>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($posts as $post)
                <article class="neo-card flex flex-col h-full group relative hover:-translate-y-2 transition-transform duration-300">
                    <div class="border-b-4 border-black p-6 bg-accent flex justify-between items-center">
                        <time datetime="{{ $post->published_at }}" class="font-heading font-black text-2xl">
                            {{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}
                        </time>
                        <span class="w-3 h-3 bg-black rounded-full animate-pulse"></span>
                    </div>

                    <div class="p-6 flex flex-col flex-grow bg-white">
                        <h2 class="text-xl font-heading font-black leading-tight uppercase mb-4 group-hover:text-accent transition-colors break-words">
                            <a href="{{ route('blog.show', $post) }}" class="before:absolute before:inset-0">
                                {{ $post->title }}
                            </a>
                        </h2>
                        
                        <p class="font-sans font-medium text-gray-600 mb-6 flex-grow line-clamp-3">
                            {{ Str::limit(strip_tags($post->content), 120) }}
                        </p>

                        <div class="flex items-center gap-3 pt-4 border-t-2 border-dashed border-gray-300 mt-auto">
                            <div class="w-8 h-8 bg-black rounded-full flex items-center justify-center text-white font-bold text-xs uppercase">
                                {{ substr($post->author->name, 0, 1) }}
                            </div>
                            <span class="font-bold text-sm uppercase tracking-wider">
                                {{ $post->author->name }}
                            </span>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
