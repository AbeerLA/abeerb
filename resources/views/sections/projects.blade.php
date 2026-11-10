<section class="max-w-6xl mx-auto px-6" id="projects">
    <div class="text-center space-y-2 mb-12">
        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-brand-parchment">My Projects</h2>
        <p class="text-xs sm:text-sm text-brand-parchment/60">
            A showcase of recent enterprise applications &amp; open source tools.
        </p>
    </div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($projects as $project)
            <x-project-card :project="$project" />
        @endforeach
    </div>

    <div class="text-center mt-12">
        <a href="#projects"
            class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-brand-surface border border-brand-slate text-brand-parchment hover:border-brand-sand hover:text-brand-sand transition-all text-xs font-semibold shadow-glow-sm">
            <span>View All Projects</span>
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </a>
    </div>
</section>

     {{-- jobzy + food delevery pp + music recomendation --}}
     