<x-layout>
    <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="lg:col-span-8">
                    @if($project->image)
                        <img class="w-full rounded-lg shadow-lg mb-8" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                    @endif
                    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ $project->title }}</h1>
                    <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
                        {{ $project->description }}
                    </div>
                    @if($project->url)
                        <div class="mt-8">
                            <a href="{{ $project->url }}" target="_blank" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                                Visit Project
                            </a>
                        </div>
                    @endif
                </div>
                <div class="lg:col-span-4 mt-8 lg:mt-0">
                    <div class="bg-gray-50 rounded-lg p-6">
                        @can('update', $project)
                            <a href="/admin/projects/{{ $project->id }}/edit" class="block w-full text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 mb-4">
                                Edit Project
                            </a>
                        @endcan
                        <a href="{{ route('portfolio.index') }}" class="block w-full text-center text-indigo-600 hover:text-indigo-900 font-medium">
                            &larr; Back to Portfolio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
