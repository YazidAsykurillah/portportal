<x-layout>
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Latest Updates</h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Insights and stories.
                </p>
            </div>
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-2 lg:max-w-none">
                @foreach($posts as $post)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-indigo-600">
                                    Article
                                </p>
                                <a href="{{ route('blog.show', $post) }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        {{ $post->title }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        {{ Str::limit(strip_tags($post->content), 100) }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="sr-only">{{ $post->author->name }}</span>
                                    <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold">
                                        {{ substr($post->author->name, 0, 1) }}
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        {{ $post->author->name }}
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="{{ $post->published_at }}">
                                            {{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}
                                        </time>
                                    </div>
                                </div>
                            </div>
                            @can('update', $post)
                                <div class="mt-4 border-t pt-4">
                                    <a href="/admin/posts/{{ $post->id }}/edit" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Edit Post</a>
                                </div>
                            @endcan
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
