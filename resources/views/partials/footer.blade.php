<footer class="border-t border-brand-slate/40 bg-brand-main relative z-10 py-12">
    <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">

        <div class="space-y-1">
            <a class="text-lg font-bold text-brand-parchment tracking-tight" href="{{ route('home') }}#hero">
                AbeerLA
            </a>
            <p class="text-xs text-brand-parchment/50">
                &copy; {{ date('Y') }} AbeerLA Portfolio.
            </p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-6 text-xs text-brand-parchment/70">
            <a class="hover:text-brand-sand transition-colors" href="{{ route('home') }}#hero">Home</a>
            <a class="hover:text-brand-sand transition-colors" href="{{ route('home') }}#about">About</a>
            <a class="hover:text-brand-sand transition-colors" href="{{ route('home') }}#skills">Skills</a>
            <a class="hover:text-brand-sand transition-colors" href="{{ route('home') }}#projects">Projects</a>
            <a class="hover:text-brand-sand transition-colors" href="{{ route('home') }}#journal">Journal</a>
            <a class="hover:text-brand-sand transition-colors" href="{{ route('home') }}#contact">Contact</a>
        </div>

        <div class="flex items-center gap-3 text-brand-parchment/60">
            <a aria-label="GitHub" href="https://github.com/AbeerLA" target="_blank" rel="noreferrer"
                class="p-2 rounded-full bg-brand-surface border border-brand-slate/50 hover:text-brand-sand hover:border-brand-sand transition-colors">
                <x-icons.github class="w-3.5 h-3.5" />
            </a>
            <a aria-label="LinkedIn" href="https://linkedin.com/in/abeerb" target="_blank" rel="noreferrer"
                class="p-2 rounded-full bg-brand-surface border border-brand-slate/50 hover:text-brand-sand hover:border-brand-sand transition-colors">
                <x-icons.linkedin class="w-3.5 h-3.5" />
            </a>
        </div>
    </div>
</footer>
