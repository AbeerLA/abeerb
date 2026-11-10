<section class="max-w-6xl mx-auto px-6 pt-8 md:pt-16" id="hero">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

        {{-- Left column: text & actions --}}
        <div class="lg:col-span-7 flex flex-col items-start space-y-6">

            {{-- Social pill strip --}}
            <div class="flex items-center gap-2 p-1.5 bg-brand-surface rounded-full border border-brand-slate/60 shadow-sm">
                <a aria-label="GitHub" href="https://github.com/AbeerLA" target="_blank" rel="noreferrer"
                    class="p-2 text-brand-parchment/70 hover:text-brand-sand hover:bg-brand-main/60 rounded-full transition-all">
                    <x-icons.github class="w-4 h-4" />
                </a>
                <a aria-label="LinkedIn" href="https://linkedin.com/in/abeerb" target="_blank" rel="noreferrer"
                    class="p-2 text-brand-parchment/70 hover:text-brand-sand hover:bg-brand-main/60 rounded-full transition-all">
                    <x-icons.linkedin class="w-4 h-4" />
                </a>
                <!-- <a aria-label="Twitter" href="https://twitter.com" target="_blank" rel="noreferrer"
                    class="p-2 text-brand-parchment/70 hover:text-brand-sand hover:bg-brand-main/60 rounded-full transition-all">
                    <x-icons.twitter class="w-4 h-4" />
                </a> -->
                <span class="text-xs px-2 font-mono text-brand-sand/80">@@AbeerLA</span>
            </div>

            <div class="space-y-5">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-mono bg-brand-surface border border-brand-slate text-brand-sand">
                    <span class="w-2 h-2 rounded-full bg-brand-sage animate-ping"></span>
                    Available for Full-Time &amp; Contracts
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-brand-parchment leading-tight">
                    Hi, I'm <span class="text-brand-sand">Abeer</span>
                </h1>
                <p class="text-brand-parchment/75 text-base sm:text-lg max-w-xl font-normal leading-relaxed">
                    Full-Stack Developer &amp; Interface Engineer. Crafting high-performance web applications,
                    resilient backend architectures, and human-centric design systems.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-4 pt-2">
                {{-- Put your CV at public/files/cv.pdf --}}
                <a href="{{ asset('files/Abeer_Albaqi_ATS_CV.pdf') }}" download
                    class="flex items-center gap-2 px-6 py-3 rounded-full bg-brand-sage text-brand-main font-semibold text-sm hover:bg-brand-sand transition-all shadow-glow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>Download CV</span>
                </a>
                <a href="#contact"
                    class="flex items-center gap-2 px-6 py-3 rounded-full bg-brand-surface border border-brand-slate text-brand-parchment font-medium text-sm hover:border-brand-sand hover:text-brand-sand transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>Contact Me</span>
                </a>
            </div>
        </div>

        {{-- Right column: avatar (public/images/profile.png) --}}
        <div class="lg:col-span-5 flex justify-center">
            <img src="{{ asset('images/profile1.png') }}" alt="Abeer's 3D avatar"
                class="w-full max-w-sm h-[420px] object-contain" />
        </div>
    </div>
</section>
