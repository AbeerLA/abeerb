@props(['project'])

<div
    class="bg-brand-surface rounded-2xl border border-brand-slate p-4 flex flex-col justify-between hover:border-brand-sand/80 transition-all shadow-glow-sm group">
    <div class="space-y-4">
        {{-- Project image: uses public/images/projects/<image> if set, else placeholder --}}
        @if (!empty($project['image']))
        <img src="{{ asset('images/projects/' . $project['image']) }}" alt="{{ $project['title'] }}"
            class="w-full aspect-video rounded-xl object-cover border border-brand-slate/80">
        @else
        <div
            class="w-full aspect-video rounded-xl bg-brand-main border border-dashed border-brand-slate/80 flex flex-col items-center justify-center text-center p-3 group-hover:border-brand-sand/50 transition-colors">
            <svg class="w-6 h-6 text-brand-slate mb-1" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path
                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                    stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span class="text-xs font-mono text-brand-sand">16:9 Project Mockup</span>
            <span class="text-[10px] text-brand-parchment/50">{{ $project['caption'] ?? $project['title'] }}</span>
        </div>
        @endif

        <div>
            <div class="flex items-center gap-2 mb-1.5">
                @foreach (($project['tags'] ?? []) as $tag)
                <span
                    class="px-2 py-0.5 rounded text-[10px] font-mono bg-brand-main {{ $loop->first ? 'text-brand-sage' : 'text-brand-sand' }} border border-brand-slate/60">{{ $tag }}</span>
                @endforeach
            </div>
            <h3 class="text-base font-semibold text-brand-parchment">{{ $project['title'] }}</h3>
            <p class="text-xs text-brand-parchment/70 mt-1 line-clamp-2">{{ $project['description'] }}</p>
        </div>
    </div>

    <div class="flex items-center gap-2 pt-4 mt-4 border-t border-brand-slate/40">

        {{-- Show Code button only if a GitHub link exists --}}
        @if (!empty($project['code']) && $project['code'] !== '#')
        <a href="{{ $project['code'] }}" target="_blank" rel="noopener noreferrer"
            class="flex-1 text-center py-1.5 text-xs font-medium rounded-full bg-brand-main border border-brand-slate text-brand-parchment hover:border-brand-sand hover:text-brand-sand transition-colors">
            Code
        </a>
        @endif

        {{-- Live Demo button --}}
        @if (!empty($project['demo']) && $project['demo'] !== '#')
        <a href="{{ $project['demo'] }}" target="_blank" rel="noopener noreferrer"
            class="flex-1 text-center py-1.5 text-xs font-medium rounded-full bg-brand-sage text-brand-main hover:bg-brand-sand transition-colors">
            Live Demo
        </a>
        @endif

    </div>
</div>