@extends('layouts.app')

@section('title', 'Contact Us - TanCare')

@section('content')
<div class="py-24 sm:py-32 overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center opacity-0 animate-on-scroll">
            <h1 class="text-4xl font-bold tracking-tight text-foreground sm:text-5xl">Contact Us</h1>
            <p class="mt-6 text-lg leading-8 text-muted-foreground">
                Get in touch with TanCare for certification inquiries, support, or partnership opportunities.
            </p>
        </div>

        <div class="mx-auto mt-16 grid max-w-6xl grid-cols-1 gap-8 lg:grid-cols-3 opacity-0 animate-on-scroll">
            <div class="lg:col-span-2 space-y-6">
                <div class="rounded-lg border border-border bg-card p-6 shadow-sm hover:shadow-lg transition-shadow">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-foreground">Send us a message</h2>
                        <p class="mt-2 text-muted-foreground">
                            Fill out the form below and we'll get back to you as soon as possible.
                        </p>
                    </div>
                    <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6" id="contactForm">
                        @csrf <!-- Make sure this is present -->
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="space-y-2">
                                <label for="name" class="text-sm font-medium">Full Name *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                    placeholder="John Doe"
                                    class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2" />
                                @error('name')<p class="text-sm text-destructive">{{ $message }}</p>@enderror
                            </div>
                            <div class="space-y-2">
                                <label for="email" class="text-sm font-medium">Email Address *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                    placeholder="john@example.com"
                                    class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2" />
                                @error('email')<p class="text-sm text-destructive">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="organization" class="text-sm font-medium">Organization</label>
                            <input type="text" id="organization" name="organization" value="{{ old('organization') }}"
                                placeholder="Your healthcare facility or organization"
                                class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2" />
                            @error('organization')<p class="text-sm text-destructive">{{ $message }}</p>@enderror
                        </div>

                        <div class="space-y-2">
                            <label for="subject" class="text-sm font-medium">Subject *</label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                                placeholder="What is this regarding?"
                                class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2" />
                            @error('subject')<p class="text-sm text-destructive">{{ $message }}</p>@enderror
                        </div>

                        <div class="space-y-2">
                            <label for="message" class="text-sm font-medium">Message *</label>
                            <textarea id="message" name="message" required rows="6"
                                placeholder="Tell us more about your inquiry..."
                                class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">{{ old('message') }}</textarea>
                            @error('message')<p class="text-sm text-destructive">{{ $message }}</p>@enderror
                        </div>

                        <button type="submit" id="submitBtn"
                            class="inline-flex items-center justify-center rounded-md bg-primary px-6 py-3 text-sm font-medium text-primary-foreground shadow transition-all hover:bg-primary/90 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 w-full sm:w-auto">
                            <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Rest of your contact information remains the same -->
            <div class="space-y-6">
                <div class="rounded-lg border border-border bg-card p-6 shadow-sm hover:shadow-lg transition-shadow">
                    <h2 class="text-2xl font-semibold text-foreground mb-6">Contact Information</h2>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                                <svg class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Email</p>
                                <p class="mt-1 text-sm text-muted-foreground">info@tancare.tz</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                                <svg class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Phone</p>
                                <p class="mt-1 text-sm text-muted-foreground">+255 XX XXX XXXX</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                                <svg class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Address</p>
                                <p class="mt-1 text-sm text-muted-foreground">
                                    Ministry of Health Building<br />
                                    Dar es Salaam, Tanzania
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg border border-border bg-card p-6 shadow-sm hover:shadow-lg transition-shadow">
                    <h2 class="text-2xl font-semibold text-foreground mb-6">Office Hours</h2>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-muted-foreground">Monday - Friday</span><span class="font-medium">8:00 AM - 5:00 PM</span></div>
                        <div class="flex justify-between"><span class="text-muted-foreground">Saturday</span><span class="font-medium">9:00 AM - 1:00 PM</span></div>
                        <div class="flex justify-between"><span class="text-muted-foreground">Sunday</span><span class="font-medium">Closed</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Simple Toast Messages -->
@if(session('success'))
<div class="fixed top-24 right-6 z-50 max-w-sm w-full bg-green-500 text-white rounded-lg shadow-lg p-4">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="font-medium">Success!</span>
        </div>
        <button type="button" onclick="this.parentElement.parentElement.remove()" class="text-white/70 hover:text-white">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
    <p class="mt-1 text-sm text-white/90">{{ session('success') }}</p>
</div>

<script>
    // Auto-hide success message after 4 seconds
    setTimeout(() => {
        const successMsg = document.querySelector('.fixed.bg-green-500');
        if (successMsg) successMsg.remove();
    }, 4000);
</script>
@endif

@if(session('error'))
<div class="fixed top-24 right-6 z-50 max-w-sm w-full bg-red-500 text-white rounded-lg shadow-lg p-4">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
            <span class="font-medium">Error</span>
        </div>
        <button type="button" onclick="this.parentElement.parentElement.remove()" class="text-white/70 hover:text-white">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
    <p class="mt-1 text-sm text-white/90">{{ session('error') }}</p>
</div>

<script>
    // Auto-hide error message after 4 seconds
    setTimeout(() => {
        const errorMsg = document.querySelector('.fixed.bg-red-500');
        if (errorMsg) errorMsg.remove();
    }, 4000);
</script>
@endif

<style>
@keyframes fadeUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}
.animate-fade-up { animation: fadeUp 1s ease-out forwards; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll animations
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-up');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

    // Simple form loading state
    const contactForm = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');

    if (contactForm && submitBtn) {
        contactForm.addEventListener('submit', function() {
            // Simple loading state - just disable the button
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Sending...
            `;
        });
    }
});
</script>
@endsection