<section id="about" class="py-24 sm:py-32 bg-background overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center opacity-0 animate-on-scroll">
            <h2 class="text-3xl font-bold tracking-tight text-foreground sm:text-4xl">
                About Us
            </h2>
            <p class="mt-6 text-lg leading-8 text-muted-foreground">
                TanCare works in partnership with leading healthcare quality organizations to bring world-class
                certification standards to Tanzania.
            </p>
        </div>

        <div class="mx-auto mt-16 grid max-w-5xl grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @php
                $partners = [
                    [
                        'icon' => 'building',
                        'title' => 'TanCare',
                        'description' => 'Tanzania\'s national healthcare certification body, dedicated to improving quality standards across all health facilities in the country.',
                    ],
                    [
                        'icon' => 'award',
                        'title' => 'PHAB',
                        'description' => 'Public Health Accreditation Board partnership ensures international standards and best practices in healthcare quality assessment.',
                    ],
                    [
                        'icon' => 'users',
                        'title' => 'PharmAccess/SafeCare',
                        'description' => 'Collaboration with SafeCare brings proven methodologies for systematic healthcare quality improvement to Tanzanian facilities.',
                    ],
                ];
            @endphp

            @foreach($partners as $index => $partner)
                <div class="rounded-lg border border-border bg-card p-6 shadow-sm opacity-0 transform translate-y-8 animate-on-scroll" style="animation-delay: {{ $index * 0.2 }}s;">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10">
                        @if($partner['icon'] === 'building')
                            <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        @elseif($partner['icon'] === 'award')
                            <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        @elseif($partner['icon'] === 'users')
                            <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                            </svg>
                        @endif
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-foreground">{{ $partner['title'] }}</h3>
                    <p class="mt-4 text-base leading-7 text-muted-foreground">{{ $partner['description'] }}</p>
                </div>
            @endforeach
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
