{{-- Fixed pill navigation --}}
<header class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
    <nav aria-label="Main Navigation"
        class="flex items-center gap-1 sm:gap-2 px-3 py-2 bg-brand-surface/90 backdrop-blur-md rounded-full border border-brand-slate shadow-glow-sm">

        <a class="px-4 py-1.5 text-xs font-semibold bg-brand-sage text-brand-main rounded-full hover:bg-brand-sand transition-colors"
            href="{{ route('home') }}#hero">
            Portfolio
        </a>

        <div class="flex items-center text-xs sm:text-sm font-medium text-brand-parchment/80">
            <a class="px-3 py-1.5 rounded-full hover:text-brand-sand transition-colors" href="{{ route('home') }}#hero">Home</a>
            <a class="px-3 py-1.5 rounded-full hover:text-brand-sand transition-colors" href="{{ route('home') }}#about">About</a>
            <a class="px-3 py-1.5 rounded-full hover:text-brand-sand transition-colors" href="{{ route('home') }}#skills">Skills</a>
            <a class="px-3 py-1.5 rounded-full hover:text-brand-sand transition-colors" href="{{ route('home') }}#projects">Projects</a>
            <a class="px-3 py-1.5 rounded-full hover:text-brand-sand transition-colors hidden sm:inline-block" href="{{ route('home') }}#journal">Journal</a>
            <a class="px-3 py-1.5 rounded-full hover:text-brand-sand transition-colors" href="{{ route('home') }}#contact">Contact</a>
        </div>

        <a class="hidden md:flex items-center px-3 py-1.5 text-xs font-medium border border-brand-slate rounded-full text-brand-sand hover:border-brand-sand transition-colors"
            href="{{ route('home') }}#contact">
            Hire Me
        </a>
    </nav>
</header>
