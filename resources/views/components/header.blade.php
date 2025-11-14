<!-- Header -->
<header class="sticky top-0 z-40 w-full border-b border-border bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5 flex items-center">
                <img 
                    src="/images/tancare_logo.png" 
                    class="h-[100px] w-auto" 
                    alt="TanCare Logo"
                >
            </a>
        </div>

        <div class="flex lg:hidden">
            <button
                type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-foreground"
                onclick="openMobileMenu()"
            >
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div class="hidden lg:flex lg:gap-x-8">
            @php
                $navigation = [
                    ['name' => 'Home', 'href' => '/'],
                    ['name' => 'About Us', 'href' => '/#about'],
                    ['name' => 'Certification', 'href' => '/#certification'],
                    ['name' => 'For Facilities', 'href' => '/#facilities'],
                    ['name' => 'For Assessors', 'href' => '/#assessors'],
                    ['name' => 'For Advisors', 'href' => '/#advisors'],
                    ['name' => 'FAQ', 'href' => '/faq'],
                    ['name' => 'Contact', 'href' => '/contact'],
                    ['name' => 'App Policy', 'href' => '/app-policy'],
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
            <a href="/#app" class="bg-primary text-white px-4 py-2 rounded-md hover:bg-primary/90 transition-colors inline-block">
                Get the App
            </a>
        </div>
    </nav>
</header>

<!-- Mobile Menu - Placed OUTSIDE the header, at the root level -->
<div id="mobile-menu" class="fixed inset-0 z-50 hidden" role="dialog" aria-modal="true">
    <!-- Background overlay -->
    <div class="fixed inset-0 bg-black/50" onclick="closeMobileMenu()"></div>
    
    <!-- Menu panel - slides in from right -->
    <div class="fixed inset-y-0 right-0 w-full max-w-sm bg-background shadow-xl">
        <div class="flex h-full flex-col overflow-y-auto">
            <div class="flex items-center justify-between p-6 border-b border-border">
                <a href="/" class="-m-1.5 p-1.5 flex items-center" onclick="closeMobileMenu()">
                    <img 
                        src="/images/tancare_logo.png" 
                        class="h-[60px] w-auto" 
                        alt="TanCare Logo"
                    >
                </a>
                <button
                    type="button"
                    class="-m-2.5 rounded-md p-2.5 text-foreground"
                    onclick="closeMobileMenu()"
                >
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 px-6 py-6">
                <div class="space-y-2">
                    @foreach($navigation as $item)
                        <a
                            href="{{ $item['href'] }}"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-medium leading-7 text-foreground hover:bg-muted transition-colors"
                            onclick="closeMobileMenu()"
                        >
                            {{ $item['name'] }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="border-t border-border p-6">
                <a href="#app" 
                   class="bg-primary text-white px-4 py-3 rounded-md hover:bg-primary/90 transition-colors w-full block text-center"
                   onclick="closeMobileMenu()">
                    Get the App
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function openMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.remove('hidden');
    document.body.classList.add('menu-open');
    setTimeout(() => menu.classList.add('mobile-menu-enter-active'), 10);
}

function closeMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.remove('mobile-menu-enter-active');
    setTimeout(() => {
        menu.classList.add('hidden');
        document.body.classList.remove('menu-open');
    }, 300);
}

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeMobileMenu();
});

document.getElementById('mobile-menu')?.addEventListener('click', e => {
    if (e.target.classList.contains('bg-black/50')) closeMobileMenu();
});
</script>
