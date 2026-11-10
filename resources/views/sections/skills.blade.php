<section class="max-w-6xl mx-auto px-6" id="skills">
    <div class="text-center space-y-3 mb-12">
        <div class="inline-flex items-center justify-center gap-2 text-brand-sand">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0L14.6 9.4L24 12L14.6 14.6L12 24L9.4 14.6L0 12L9.4 9.4L12 0Z"></path></svg>
            <span class="text-xs font-mono uppercase tracking-widest text-brand-sand">Core Competencies</span>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0L14.6 9.4L24 12L14.6 14.6L12 24L9.4 14.6L0 12L9.4 9.4L12 0Z"></path></svg>
        </div>
        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-brand-parchment">My Skills</h2>
        <p class="text-xs sm:text-sm text-brand-parchment/60 max-w-md mx-auto">
            Solid logic and tool stack built to create scalable applications and performant user experiences.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        @foreach ($skills as $skill)
            <x-skill-card :skill="$skill" />
        @endforeach
    </div>
</section>
