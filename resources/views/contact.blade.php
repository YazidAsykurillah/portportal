<x-layout>
    <div class="max-w-4xl mx-auto space-y-16">
        
        {{-- Intro --}}
        <section class="text-center space-y-6">
            <h1 class="text-6xl md:text-7xl font-heading font-black tracking-tighter uppercase">
                GET IN TOUCH
            </h1>
            <p class="text-xl font-bold font-sans max-w-2xl mx-auto">
                Have a project in mind? Let's build something awesome together.
            </p>
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
