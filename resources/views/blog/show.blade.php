<x-layout title="{{ $post->title }}">
    <div class="max-w-4xl mx-auto relative">
        {{-- Decorative Header --}}
        <div class="bg-accent border-4 border-black p-8 md:p-12 mb-12 text-center relative z-10 shadow-neo">
            <div class="flex justify-center items-center gap-4 text-sm font-bold uppercase tracking-widest mb-6">
                <a href="{{ route('blog.index') }}" class="flex items-center gap-2 hover:bg-black hover:text-white px-2 py-1 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Blog
                </a>
                <span>//</span>
                <time datetime="{{ $post->published_at }}">{{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}</time>
                <span>//</span>
                <span>{{ $post->author->name }}</span>
            </div>
            
            <h1 class="text-4xl md:text-6xl font-heading font-black tracking-tighter uppercase leading-none break-words">
                {{ $post->title }}
            </h1>
        </div>

        {{-- Main Content --}}
        <article class="bg-white border-4 border-black p-6 md:p-16 mb-12 shadow-neo-lg relative z-0">
             <div class="prose prose-xl prose-headings:font-heading prose-headings:font-black prose-headings:uppercase prose-p:font-sans prose-p:font-medium prose-blockquote:border-l-8 prose-blockquote:border-accent prose-blockquote:bg-gray-100 prose-blockquote:p-8 prose-blockquote:not-italic prose-blockquote:font-heading prose-blockquote:font-bold prose-img:border-4 prose-img:border-black prose-img:shadow-neo font-sans max-w-none text-black">
                {!! $post->content !!}
            </div>

            {{-- Decorative Corner --}}
            <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-black border-2 border-white"></div>
            <div class="absolute -top-4 -left-4 w-8 h-8 bg-accent border-2 border-black rounded-full"></div>
        </article>

        {{-- Share Section --}}
        <div class="mb-12 text-center">
            <h3 class="text-2xl font-heading font-black uppercase mb-6">Share this Post</h3>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}" 
                   target="_blank"
                   class="neo-btn bg-black text-white hover:bg-accent hover:text-black py-2 px-6 flex items-center gap-2 text-sm">
                    TWITTER
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" 
                   target="_blank"
                   class="neo-btn bg-[#0077b5] text-white hover:bg-black hover:text-white py-2 px-6 flex items-center gap-2 text-sm">
                    LINKEDIN
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                   target="_blank"
                   class="neo-btn bg-[#1877f2] text-white hover:bg-black hover:text-white py-2 px-6 flex items-center gap-2 text-sm">
                    FACEBOOK
                </a>
                <button onclick="copyToClipboard('{{ request()->url() }}')" 
                        class="neo-btn bg-white text-black hover:bg-gray-200 py-2 px-6 flex items-center gap-2 text-sm">
                    COPY LINK
                </button>
            </div>
        </div>

        @can('update', $post)
            <div class="text-center pb-24">
                <a href="/admin/posts/{{ $post->id }}/edit" class="neo-btn-outline text-lg inline-block bg-white">
                    EDIT POST
                </a>
            </div>
        @endcan
    </div>

    <script>
        function copyToClipboard(text) {
            if (navigator.clipboard && window.isSecureContext) {
                // Secure context (HTTPS or localhost)
                navigator.clipboard.writeText(text).then(() => {
                    alert('Link copied to clipboard!');
                }).catch(() => {
                    fallbackCopyTextToClipboard(text);
                });
            } else {
                // Non-secure context (e.g. mobile LAN)
                fallbackCopyTextToClipboard(text);
            }
        }

        function fallbackCopyTextToClipboard(text) {
            var textArea = document.createElement("textarea");
            textArea.value = text;
            textArea.style.top = "0";
            textArea.style.left = "0";
            textArea.style.position = "fixed";
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();

            try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'Link copied to clipboard!' : 'Failed to copy link.';
                alert(msg);
            } catch (err) {
                console.error('Fallback: Oops, unable to copy', err);
                alert('Failed to copy link. Please copy manually.');
            }

            document.body.removeChild(textArea);
        }
    </script>
</x-layout>
