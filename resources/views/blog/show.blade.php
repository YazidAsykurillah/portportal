<x-layout title="{{ $post->title }}">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12 border-b-4 border-black pb-12 text-center">
            <div class="flex justify-center items-center gap-4 text-sm font-bold uppercase tracking-widest text-gray-500 mb-4">
                <a href="{{ route('blog.index') }}" class="hover:text-black hover:underline"><- Back to Blog</a>
                <span>/</span>
                <time datetime="{{ $post->published_at }}">{{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}</time>
                <span>/</span>
                <span>{{ $post->author->name }}</span>
            </div>
            
            <h1 class="text-4xl md:text-6xl font-heading font-black tracking-tighter uppercase leading-tight">
                {{ $post->title }}
            </h1>
        </header>

        <article class="bg-white border-x-4 border-black p-4 md:p-12 mb-12 shadow-neo-lg relative">
             <div class="prose prose-xl prose-headings:font-heading prose-headings:font-black prose-headings:uppercase prose-blockquote:border-l-4 prose-blockquote:border-black prose-blockquote:bg-gray-100 prose-blockquote:p-4 prose-blockquote:not-italic font-sans max-w-none text-black">
                {!! $post->content !!}
            </div>
        </article>

        @can('update', $post)
            <div class="text-center pb-12">
                <a href="/admin/posts/{{ $post->id }}/edit" class="neo-btn-outline text-sm">
                    EDIT POST
                </a>
            </div>
        @endcan
    </div>
</x-layout>
