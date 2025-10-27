<section id="certification" class="py-24 sm:py-32 bg-muted/30">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-foreground sm:text-4xl">
                Tanzania National Certification
            </h2>
            <p class="mt-6 text-lg leading-8 text-muted-foreground">
                Recognized by the Ministry of Health and PHAB, TanCare certification demonstrates your commitment to
                healthcare excellence and patient safety.
            </p>
        </div>
        <div class="mx-auto mt-16 grid max-w-6xl grid-cols-1 gap-8 sm:grid-cols-2">
            @php
                $features = [
                    [
                        'icon' => 'shield',
                        'title' => 'Nationally Recognized',
                        'description' => 'TanCare certification is officially recognized by the Tanzania Ministry of Health and PHAB for hospitals and health facilities.',
                    ],
                    [
                        'icon' => 'file-check',
                        'title' => 'Comprehensive Standards',
                        'description' => 'Our certification process evaluates all aspects of healthcare delivery, from patient safety to clinical excellence.',
                    ],
                    [
                        'icon' => 'trending-up',
                        'title' => 'Continuous Improvement',
                        'description' => 'Stepwise methodology supports facilities on their quality journey, with ongoing assessment and guidance.',
                    ],
                    [
                        'icon' => 'check-circle',
                        'title' => 'International Best Practices',
                        'description' => 'Aligned with global healthcare quality standards through partnerships with PHAB, SafeCare, and international bodies.',
                    ],
                ];
            @endphp

            @foreach($features as $feature)
                <div class="rounded-lg border border-border bg-card p-6 shadow-sm">
                    <div class="flex flex-col">
                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary text-primary-foreground">
                            @if($feature['icon'] === 'shield')
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            @elseif($feature['icon'] === 'file-check')
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            @elseif($feature['icon'] === 'trending-up')
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            @elseif($feature['icon'] === 'check-circle')
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            @endif
                        </div>
                        <h3 class="mt-4 text-xl font-semibold text-foreground">{{ $feature['title'] }}</h3>
                    </div>
                    <div class="mt-4">
                        <p class="text-muted-foreground">{{ $feature['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>