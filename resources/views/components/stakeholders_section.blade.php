<section class="py-24 sm:py-32 bg-background overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center opacity-0 animate-on-scroll">
            <h2 class="text-3xl font-bold tracking-tight text-foreground sm:text-4xl">Join the TanCare Network</h2>
            <p class="mt-6 text-lg leading-8 text-muted-foreground">
                Whether you're a healthcare facility, assessor, or quality advisor, TanCare provides the tools and support
                you need to excel.
            </p>
        </div>

        <div class="mx-auto mt-16 grid max-w-6xl grid-cols-1 gap-8 lg:grid-cols-3">
            @php
                $stakeholders = [
                    [
                        'id' => 'facilities',
                        'icon' => 'hospital',
                        'title' => 'For Health Facilities',
                        'description' => 'Ready to elevate your healthcare quality standards? Begin your certification journey with TanCare.',
                        'benefits' => [
                            'Nationally recognized certification',
                            'Systematic quality improvement',
                            'Enhanced patient trust and safety',
                            'Access to quality advisors',
                        ],
                        'cta' => 'Start Assessment',
                    ],
                    [
                        'id' => 'assessors',
                        'icon' => 'clipboard-check',
                        'title' => 'For Assessors & External Evaluators',
                        'description' => 'Join our network of certified healthcare quality assessors and contribute to improving healthcare across Tanzania.',
                        'benefits' => [
                            'Comprehensive training program',
                            'Professional certification',
                            'Ongoing support and resources',
                            'Network of quality professionals',
                        ],
                        'cta' => 'Become an Assessor',
                    ],
                    [
                        'id' => 'advisors',
                        'icon' => 'graduation-cap',
                        'title' => 'For Quality Advisors',
                        'description' => 'Support healthcare facilities in their quality improvement journey as a certified TanCare quality advisor.',
                        'benefits' => [
                            'Expert training and certification',
                            'Access to proven methodologies',
                            'Collaborative network',
                            'Make lasting impact',
                        ],
                        'cta' => 'Become an Advisor',
                    ],
                ];
            @endphp

            @foreach($stakeholders as $index => $stakeholder)
                <div id="{{ $stakeholder['id'] }}" class="rounded-lg border border-border bg-card p-6 shadow-sm flex flex-col h-full transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg opacity-0 transform translate-y-8 animate-on-scroll" style="animation-delay: {{ $index * 0.2 }}s;">
                    <div class="flex flex-col">
                        <div class="flex h-14 w-14 items-center justify-center rounded-lg bg-accent text-accent-foreground">
                            @if($stakeholder['icon'] === 'hospital')
                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            @elseif($stakeholder['icon'] === 'clipboard-check')
                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                            @elseif($stakeholder['icon'] === 'graduation-cap')
                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                            @endif
                        </div>
                        <h3 class="mt-4 text-xl font-semibold text-foreground">{{ $stakeholder['title'] }}</h3>
                        <p class="mt-2 text-muted-foreground">{{ $stakeholder['description'] }}</p>
                    </div>
                    <div class="mt-6 flex-1 flex flex-col">
                        <ul class="space-y-3 flex-1">
                            @foreach($stakeholder['benefits'] as $benefit)
                                <li class="flex items-start gap-3">
                                    <div class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-primary/10">
                                        <div class="h-2 w-2 rounded-full bg-primary"></div>
                                    </div>
                                    <span class="text-sm text-muted-foreground">{{ $benefit }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="/contact" class="mt-6 w-full inline-flex items-center justify-center rounded-md bg-primary px-4 py-3 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
                            {{ $stakeholder['cta'] }}
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
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
