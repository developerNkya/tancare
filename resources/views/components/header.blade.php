<header class="sticky top-0 z-50 w-full border-b border-border bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="text-2xl font-bold text-primary">TanCare</span>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button
                type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-foreground"
                onclick="document.getElementById('mobile-menu').classList.remove('hidden')"
            >
                <span class="sr-only">Open main menu</span>
                <!-- Menu Icon - You'll need to replace this with an actual icon or SVG -->
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-8">
            @php
                $navigation = [
                    ['name' => 'About Us', 'href' => '#about'],
                    ['name' => 'Certification', 'href' => '#certification'],
                    ['name' => 'For Facilities', 'href' => '#facilities'],
                    ['name' => 'For Assessors', 'href' => '#assessors'],
                    ['name' => 'For Advisors', 'href' => '#advisors'],
                    ['name' => 'FAQ', 'href' => '/faq'],
                    ['name' => 'Contact', 'href' => '/contact'],
                ];
            @endphp
            
            @foreach($navigation as $item)
                <a
                    href="{{ $item['href'] }}"
                    class="text-sm font-medium leading-6 text-foreground hover:text-primary transition-colors"
                >
                    {{ $item['name'] }}
                </a>
            @endforeach
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <button class="bg-primary text-white px-4 py-2 rounded-md hover:bg-primary/90 transition-colors">
                <a href="#app">Get the App</a>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-background px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-border">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="text-2xl font-bold text-primary">TanCare</span>
                </a>
                <button
                    type="button"
                    class="-m-2.5 rounded-md p-2.5 text-foreground"
                    onclick="document.getElementById('mobile-menu').classList.add('hidden')"
                >
                    <span class="sr-only">Close menu</span>
                    <!-- Close Icon -->
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-border">
                    <div class="space-y-2 py-6">
                        @foreach($navigation as $item)
                            <a
                                href="{{ $item['href'] }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-medium leading-7 text-foreground hover:bg-muted"
                                onclick="document.getElementById('mobile-menu').classList.add('hidden')"
                            >
                                {{ $item['name'] }}
                            </a>
                        @endforeach
                    </div>
                    <div class="py-6">
                        <button class="bg-primary text-white px-4 py-2 rounded-md hover:bg-primary/90 transition-colors w-full">
                            <a href="#app" onclick="document.getElementById('mobile-menu').classList.add('hidden')">
                                Get the App
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
// Optional: Add smooth closing functionality with escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        document.getElementById('mobile-menu').classList.add('hidden');
    }
});

// Close mobile menu when clicking outside
document.getElementById('mobile-menu')?.addEventListener('click', function(e) {
    if (e.target === this) {
        this.classList.add('hidden');
    }
});
</script>