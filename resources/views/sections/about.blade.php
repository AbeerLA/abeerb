<section class="max-w-6xl mx-auto px-6" id="about">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

        {{-- Left: star silhouette placeholder (swap for an <img> when you have one) --}}
        <div class="lg:col-span-5 flex justify-center order-2 lg:order-1">
    <div class="relative w-72 h-72 sm:w-80 sm:h-80 lg:w-[420px] lg:h-[420px] flex items-center justify-center">
        <div class="absolute inset-0 bg-brand-surface/40 border border-brand-slate star-shape shadow-glow-sand opacity-70"></div>

        <img
            src="{{ asset('images/profile2.png') }}"
            alt="Abeer"
            class="relative z-10 w-full h-full object-contain"
        />
    </div>
</div>

        {{-- Right: bio & metrics --}}
        <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
            <div class="space-y-2">
                <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-brand-parchment">About Me</h2>
                <div class="w-12 h-1 bg-brand-sage rounded-full"></div>
            </div>
            <p class="text-brand-parchment/80 text-sm sm:text-base leading-relaxed">
                I am a full-stack engineer with a passion for building robust digital ecosystems. With deep
                foundations in modern frontend architecture and clean microservices, I bridge the gap between
                design vision and software engineering precision.
            </p>

            <div class="grid grid-cols-3 gap-4 pt-4 border-t border-brand-slate/40">
                @foreach ($metrics as $metric)
                    <div class="p-4 rounded-2xl bg-brand-surface/80 border border-brand-slate/60 text-center">
                        <span class="block text-2xl sm:text-3xl font-extrabold text-brand-sand font-mono">{{ $metric['value'] }}</span>
                        <span class="text-xs text-brand-parchment/70 font-medium mt-1 block">{{ $metric['label'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="pt-2">
                <a href="#projects"
                    class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-brand-surface border border-brand-slate text-brand-parchment text-xs font-semibold hover:border-brand-sand hover:text-brand-sand transition-all">
                    Learn More
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
