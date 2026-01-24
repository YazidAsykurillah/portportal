<x-layout :title="$title" :meta-description="$meta_description ?? null" :og-title="$og_title ?? null" :og-description="$og_description ?? null" :og-image="$og_image ?? null">
    <div class="max-w-4xl mx-auto space-y-16">
        
        {{-- Intro --}}
        <section class="text-center space-y-6">
            <h1 class="text-4xl md:text-7xl font-heading font-black tracking-tighter uppercase">
                Who I Am
            </h1>
            <div class="neo-card bg-accent rotate-[-1deg] mx-auto max-w-2xl transform hover:rotate-0 transition-transform">
                <p class="text-xl font-bold font-sans">
                    Hey! I'm Yazid Asykurillah, a developer who actually enjoys solving complex problems.
                    I build websites that work as good as they look, no fluff, just clean code and real results.
                </p>
            </div>
            <!-- <div class="prose prose-lg mx-auto font-medium text-gray-800">
                <p>[Your Bio Here] - Specialized in Laravel, Filament, and creating high-performance applications that scale.</p>
            </div> -->
        </section>



        {{-- Service Grid --}}
        <section>
            <h2 class="text-4xl font-heading font-black mb-8 border-b-4 border-black inline-block">WHAT I CAN DO FOR YOU</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Website Design -->
                <div class="neo-card p-6 hover:bg-black hover:text-white transition-colors group">
                    <h3 class="font-heading font-black text-2xl uppercase mb-2">Website Design</h3>
                    <p class="font-sans font-medium text-gray-600 group-hover:text-gray-300">
                        I design websites that don't just look good, they feel premium and conversion oriented.
                    </p>
                </div>

                <!-- Website Development -->
                <div class="neo-card p-6 hover:bg-black hover:text-white transition-colors group">
                    <h3 class="font-heading font-black text-2xl uppercase mb-2">Web App Development</h3>
                    <p class="font-sans font-medium text-gray-600 group-hover:text-gray-300">
                        High performance and scalable web application to run your business smoothly.
                    </p>
                </div>

                <!-- UI/UX -->
                <div class="neo-card p-6 hover:bg-black hover:text-white transition-colors group">
                    <h3 class="font-heading font-black text-2xl uppercase mb-2">UI/UX</h3>
                    <p class="font-sans font-medium text-gray-600 group-hover:text-gray-300">
                        Creating seamless user journeys where nobody has to guess what happens next.
                    </p>
                </div>

                <!-- SEO -->
                <div class="neo-card p-6 hover:bg-black hover:text-white transition-colors group">
                    <h3 class="font-heading font-black text-2xl uppercase mb-2">SEO</h3>
                    <p class="font-sans font-medium text-gray-600 group-hover:text-gray-300">
                        Helping your content get found by the people who actually need it, without the voodoo magic.
                    </p>
                </div>
            </div>
        </section>

        {{-- CTA Link to Contact --}}
        <section class="text-center py-12">
            <a href="{{ route('contact') }}" class="neo-btn text-xl">Let's Work Together -></a>
        </section>

    </div>
</x-layout>
