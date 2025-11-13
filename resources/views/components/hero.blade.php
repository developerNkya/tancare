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
    'backgroundImage' =>  asset('images/tancare_header_bg.jpg')
])

<section {{ $attributes->merge(['class' => 'relative overflow-hidden py-20 sm:py-32']) }}>
    <!-- Background with Animated Overlay -->
    <div class="absolute inset-0 -z-10 animate-slow-pan">
        <img 
            src="{{ $backgroundImage }}" 
            alt="Healthcare background" 
            class="w-full h-full object-cover scale-110 transition-transform duration-[4000ms] ease-in-out"
        />
        <div class="absolute inset-0 bg-gradient-to-r from-green-900/80 via-green-800/70 to-emerald-900/80 animate-fade-in"></div>
        <div class="absolute inset-0 bg-black/30"></div>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10 text-center">
        <div class="mx-auto max-w-3xl">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl text-balance drop-shadow-lg opacity-0 animate-fade-up">
                {{ $title }}
            </h1>
            <p class="mt-6 text-lg leading-8 text-white/90 text-pretty drop-shadow-md opacity-0 animate-fade-up [animation-delay:0.3s]">
                {{ $description }}
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6 opacity-0 animate-fade-up [animation-delay:0.6s]">
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

    <!-- Animated Gradient Decoration -->
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)] opacity-0 animate-fade-in [animation-delay:1s]">
        <div
            class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-green-500 to-emerald-400 opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
        ></div>
    </div>
</section>

<style>
@keyframes fade-up {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}
@keyframes fade-in {
    0% { opacity: 0; }
    100% { opacity: 1; }
}
@keyframes slow-pan {
    0% { transform: scale(1.05) translateX(0); }
    50% { transform: scale(1.08) translateX(-2%); }
    100% { transform: scale(1.05) translateX(0); }
}

.animate-fade-up {
    animation: fade-up 1s ease-out forwards;
}
.animate-fade-in {
    animation: fade-in 1.5s ease-out forwards;
}
.animate-slow-pan img {
    animation: slow-pan 20s ease-in-out infinite alternate;
}
</style>
