<x-layout>
    <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">{{ $post->title }}</h1>
            <div class="mt-4 text-center text-gray-500">
                <span>{{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}</span>
                <span class="mx-1">&middot;</span>
                <span>{{ $post->author->name }}</span>
            </div>
            
            <div class="mt-8 prose prose-indigo prose-lg text-gray-500 mx-auto">
                {!! $post->content !!}
            </div>

            <div class="mt-10 border-t border-gray-200 pt-6 flex justify-between items-center">
                <a href="{{ route('blog.index') }}" class="text-indigo-600 hover:text-indigo-900 font-medium">
                    &larr; Back to Blog
                </a>
                @can('update', $post)
                    <a href="/admin/posts/{{ $post->id }}/edit" class="px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Edit This Post
                    </a>
                @endcan
            </div>
        </div>
    </div>
</x-layout>
