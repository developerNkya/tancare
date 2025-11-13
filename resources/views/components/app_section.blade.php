<section id="app" class="py-24 sm:py-32 bg-muted/30 overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center opacity-0 animate-on-scroll">
            <h2 class="text-3xl font-bold tracking-tight text-foreground sm:text-4xl">TanCare Mobile App</h2>
            <p class="mt-6 text-lg leading-8 text-muted-foreground">
                Access certification resources, track your progress, and manage assessments on the go with the TanCare
                mobile application.
            </p>
        </div>

        <div class="mx-auto mt-16 max-w-4xl opacity-0 animate-on-scroll">
            <div class="rounded-lg border border-border bg-card p-8 sm:p-12 shadow-sm">
                <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
                    <div class="flex flex-col justify-center space-y-6">
                        <div class="flex h-16 w-16 items-center justify-center rounded-lg bg-primary text-primary-foreground">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-foreground">Download the App</h3>
                        <p class="text-base leading-7 text-muted-foreground">
                            Get instant access to certification standards, assessment tools, and quality improvement resources.
                            Available for iOS and Android devices.
                        </p>
                        <div class="mt-4 flex flex-col gap-4 sm:flex-row">
                            <a href="#" class="inline-flex items-center justify-center rounded-md bg-primary px-6 py-3 text-sm font-medium text-primary-foreground shadow transition-all hover:bg-primary/90 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                                <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download App
                            </a>
                            <a href="#" class="inline-flex items-center justify-center rounded-md border border-input bg-transparent px-6 py-3 text-sm font-medium shadow-sm transition-all hover:bg-accent hover:text-accent-foreground hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                                <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                </svg>
                                Scan QR Code
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center opacity-0 animate-on-scroll">
                        <div class="relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="flex h-64 w-64 items-center justify-center rounded-2xl border-2 border-border bg-card p-4">
                                <img 
                                    src="{{ asset('images/tancare.jpeg') }}" 
                                    alt="TanCare App QR Code"
                                    class="h-full w-full object-contain rounded-xl"
                                >
                            </div>
                            <p class="mt-4 text-center text-sm text-muted-foreground">
                                Scan to download the TanCare app
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes fadeUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-up {
    animation: fadeUp 1s ease-out forwards;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-up');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
});
</script>
