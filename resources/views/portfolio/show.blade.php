<x-layout title="{{ $project->title }}">
    <div class="max-w-7xl mx-auto space-y-12">
        <div class="border-b-4 border-black pb-8">
            <a href="{{ route('portfolio.index') }}" class="font-bold text-xl hover:text-accent mb-4 inline-block"><- BACK TO PROJECTS</a>
            <h1 class="text-3xl md:text-7xl font-heading font-black tracking-tighter uppercase leading-none">
                {{ $project->title }}
            </h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-8 space-y-8">
                @if($project->image)
                    <div class="border-4 border-black shadow-neo-lg bg-black">
                        <img class="w-full h-auto block" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                    </div>
                @endif
                
                <div class="prose prose-xl prose-headings:font-heading prose-headings:font-bold prose-headings:uppercase max-w-none font-sans">
                    {{ $project->description }}
                </div>
            </div>

            <div class="lg:col-span-4 space-y-8">
                <div class="neo-card sticky top-24">
                    <h3 class="text-2xl font-heading font-black uppercase mb-6 border-b-2 border-black pb-2">Project Details</h3>
                    
                   <dl class="space-y-4 font-sans text-lg mb-8">
                        <div>
                            <dt class="font-bold uppercase text-sm text-gray-500">Client</dt>
                            <dd class="font-bold">Confidential / Self-Initiated</dd>
                        </div>
                        <div>
                            <dt class="font-bold uppercase text-sm text-gray-500">My Role</dt>
                            <dd class="font-bold">Design & Development</dd>
                        </div>
                   </dl>

                    @if($project->url)
                        <a href="{{ $project->url }}" target="_blank" class="neo-btn w-full text-center mb-4">
                            VISIT LIVE SITE ->
                        </a>
                    @endif
                    
                    @can('update', $project)
                        <a href="/admin/projects/{{ $project->id }}/edit" class="neo-btn-outline w-full text-center text-sm">
                            Edit Project
                        </a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-layout>
