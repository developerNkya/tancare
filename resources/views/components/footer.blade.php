<footer class="bg-accent text-accent-foreground" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8">
                <div>
                    <span class="text-3xl font-bold">TanCare</span>
                    <p class="mt-4 text-sm leading-6 text-accent-foreground/80">
                        Elevating healthcare quality standards across Tanzania through nationally recognized certification.
                    </p>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>info@tancare.tz</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>+255 XX XXX XXXX</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Dar es Salaam, Tanzania</span>
                    </div>
                </div>
            </div>
            <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6">Navigation</h3>
                        <ul class="mt-6 space-y-4">
                            @php
                                $mainNav = [
                                    ['name' => 'About Us', 'href' => '#about'],
                                    ['name' => 'Certification', 'href' => '#certification'],
                                    ['name' => 'FAQ', 'href' => '/faq'],
                                    ['name' => 'Contact', 'href' => '/contact'],
                                ];
                            @endphp
                            @foreach($mainNav as $item)
                                <li>
                                    <a
                                        href="{{ $item['href'] }}"
                                        class="text-sm leading-6 text-accent-foreground/80 hover:text-accent-foreground"
                                    >
                                        {{ $item['name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6">Stakeholders</h3>
                        <ul class="mt-6 space-y-4">
                            @php
                                $stakeholdersNav = [
                                    ['name' => 'For Health Facilities', 'href' => '#facilities'],
                                    ['name' => 'For Assessors', 'href' => '#assessors'],
                                    ['name' => 'For Quality Advisors', 'href' => '#advisors'],
                                ];
                            @endphp
                            @foreach($stakeholdersNav as $item)
                                <li>
                                    <a
                                        href="{{ $item['href'] }}"
                                        class="text-sm leading-6 text-accent-foreground/80 hover:text-accent-foreground"
                                    >
                                        {{ $item['name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-semibold leading-6">Partners</h3>
                    <ul class="mt-6 space-y-4">
                        @php
                            $partners = [
                                ['name' => 'SafeCare', 'href' => 'https://www.safe-care.org/license-partners/'],
                                ['name' => 'PHAB', 'href' => 'http://41.59.227.94:9099/'],
                                ['name' => 'JCI', 'href' => 'https://www.jointcommission.org/en/accreditation'],
                            ];
                        @endphp
                        @foreach($partners as $item)
                            <li>
                                <a
                                    href="{{ $item['href'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-sm leading-6 text-accent-foreground/80 hover:text-accent-foreground"
                                >
                                    {{ $item['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="mt-16 border-t border-accent-foreground/10 pt-8 sm:mt-20 lg:mt-24">
            <p class="text-xs leading-5 text-accent-foreground/60">
                &copy; {{ date('Y') }} TanCare. All rights reserved. Recognized by the Tanzania Ministry of
                Health and PHAB.
            </p>
        </div>
    </div>
</footer>