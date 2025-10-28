@props([
    'title' => 'Elevating Healthcare Quality Standards in Tanzania',
    'description' => 'TanCare provides nationally recognized healthcare certification, empowering facilities to deliver safe, high-quality care through systematic assessment and continuous improvement.',
    'primaryButton' => [
        'text' => 'Learn About Certification',
        'url' => '#certification',
        'icon' => true
    ],
    'secondaryButton' => [
        'text' => 'Get Assessed',
        'url' => '#facilities'
    ],
    'backgroundImage' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'
])

<section {{ $attributes->merge(['class' => 'relative overflow-hidden py-20 sm:py-32']) }}>
    <!-- Background with Green Gradient Overlay -->
    <div class="absolute inset-0 -z-10">
        <!-- Background Image -->
        <img 
            src="{{ $backgroundImage }}" 
            alt="Healthcare background" 
            class="w-full h-full object-cover"
        />
        <!-- Green Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-green-900/80 via-green-800/70 to-emerald-900/80"></div>
        <!-- Additional Dark Overlay for Better Text Readability -->
        <div class="absolute inset-0 bg-black/30"></div>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl text-balance drop-shadow-lg">
                {{ $title }}
            </h1>
            <p class="mt-6 text-lg leading-8 text-white/90 text-pretty drop-shadow-md">
                {{ $description }}
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ $primaryButton['url'] }}" 
                   class="inline-flex items-center justify-center rounded-md bg-white px-6 py-3 text-sm font-medium text-green-900 shadow-lg transition-all hover:bg-white/90 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-green-900 transform hover:-translate-y-0.5">
                    {{ $primaryButton['text'] }}
                    @if($primaryButton['icon'] ?? false)
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    @endif
                </a>
                <a href="{{ $secondaryButton['url'] }}"
                   class="inline-flex items-center justify-center rounded-md border border-white/30 bg-white/10 backdrop-blur-sm px-6 py-3 text-sm font-medium text-white shadow-lg transition-all hover:bg-white/20 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-green-900 transform hover:-translate-y-0.5">
                    {{ $secondaryButton['text'] }}
                </a>
            </div>
        </div>
    </div>
    
    <!-- Optional: Additional Green Gradient Elements -->
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
        <div
            class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-green-500 to-emerald-400 opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
        ></div>
    </div>
</section>