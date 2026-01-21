<x-layout>
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Portfolio</h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Check out my latest projects.
                </p>
            </div>
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach($projects as $project)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        @if($project->image)
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover" src="{{ asset('storage/' . $project->image) }}" alt="">
                            </div>
                        @else
                            <div class="flex-shrink-0 h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-400">No Image</span>
                            </div>
                        @endif
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="{{ route('portfolio.show', $project) }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        {{ $project->title }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        {{ Str::limit($project->description, 100) }}
                                    </p>
                                </a>
                            </div>
                            @can('update', $project)
                                <div class="mt-4">
                                    <a href="/admin/projects/{{ $project->id }}/edit" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Edit Project</a>
                                </div>
                            @endcan
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
