<x-layout :title="$title" :meta-description="$meta_description ?? null" :og-title="$og_title ?? null" :og-description="$og_description ?? null" :og-image="$og_image ?? null">
    <div class="max-w-4xl mx-auto space-y-16">
        
        {{-- Intro --}}
        <section class="text-center space-y-6">
            <h1 class="text-6xl md:text-7xl font-heading font-black tracking-tighter uppercase">
                GET IN TOUCH
            </h1>
            <p class="text-xl font-bold font-sans max-w-2xl mx-auto">
                Got a project in mind or just want to say hi? Choose your preferred way to reach me below.
            </p>
        </section>

        {{-- Contact Options --}}
        <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <a href="mailto:yasykurillah@gmail.com" class="group neo-card bg-accent text-white hover:bg-black hover:text-white flex flex-col items-center justify-center p-8 gap-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <div>
                    <span class="block font-heading font-black text-2xl mb-1 uppercase">Email Me</span>
                    <span class="font-sans font-bold text-lg underline decoration-2 underline-offset-4">yasykurillah@gmail.com</span>
                </div>
            </a>

            <a href="tel:+6281291513745" class="group neo-card bg-white text-black hover:bg-black hover:text-white flex flex-col items-center justify-center p-8 gap-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <div>
                    <span class="block font-heading font-black text-2xl mb-1 uppercase">Call Me</span>
                    <span class="font-sans font-bold text-lg underline decoration-2 underline-offset-4">+62 812 9151 3745</span>
                </div>
            </a>
        </section>

        {{-- Contact Form --}}
        <section class="relative">
            <div class="bg-white border-2 border-black p-8 md:p-12 shadow-neo-lg relative z-10">
                <div class="absolute -top-6 -left-6 bg-black text-white px-4 py-2 font-heading font-bold text-xl border-2 border-white shadow-neo">
                    SEND A MESSAGE
                </div>
                
                @if(session('success'))
                    <div class="mb-8 bg-accent border-2 border-black p-4 font-bold shadow-neo">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div style="display: none;">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="Your username">
                        </div>
                        <div>
                            <label for="name" class="block font-heading font-bold mb-2 uppercase">Name</label>
                            <input type="text" name="name" id="name" required class="neo-input" placeholder="JOHN DOE">
                        </div>
                        <div>
                            <label for="email" class="block font-heading font-bold mb-2 uppercase">Email</label>
                            <input type="email" name="email" id="email" required class="neo-input" placeholder="JOHN@EXAMPLE.COM">
                        </div>
                    </div>
                    
                    <div>
                        <label for="phone" class="block font-heading font-bold mb-2 uppercase">Phone Number (Optional)</label>
                        <input type="text" name="phone" id="phone" class="neo-input" placeholder="+1 234 567 890">
                    </div>

                    <div>
                        <label for="subject" class="block font-heading font-bold mb-2 uppercase">Subject</label>
                        <input type="text" name="subject" id="subject" required class="neo-input" placeholder="PROJECT INQUIRY">
                    </div>

                    <div>
                        <label for="message" class="block font-heading font-bold mb-2 uppercase">Message</label>
                        <textarea id="message" name="message" rows="5" required class="neo-input" placeholder="TELL ME ABOUT YOUR PROJECT..."></textarea>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="neo-btn text-lg w-full md:w-auto">
                            SEND MESSAGE ->
                        </button>
                    </div>
                </form>
            </div>
            <div class="absolute top-4 left-4 w-full h-full bg-black border-2 border-black -z-10 bg-opacity-10"></div>
        </section>

    </div>
</x-layout>
