@props(['entry'])

<article class="bg-brand-surface/70 rounded-2xl border border-brand-slate p-4 space-y-4 hover:border-brand-sand/60 transition-all">

    {{-- Journal Image --}}
    @if (!empty($entry['image']))
        <img
            src="{{ asset('images/journals/' . $entry['image']) }}"
            alt="{{ $entry['caption'] ?? $entry['title'] }}"
            class="w-full h-40 rounded-xl object-cover border border-brand-slate"
        >
    @else
        <div class="w-full h-40 rounded-xl bg-brand-main border border-dashed border-brand-slate flex flex-col items-center justify-center text-center p-3">
            <span class="text-xs font-mono text-brand-sand">
                {{ $entry['placeholder'] ?? 'Photo Placeholder' }}
            </span>
            <span class="text-[10px] text-brand-parchment/50">
                {{ $entry['caption'] ?? '' }}
            </span>
        </div>
    @endif

    {{-- Journal Details --}}
    <div>
        <span class="text-[10px] font-mono text-brand-sage uppercase">
            {{ $entry['category'] }} • {{ $entry['date'] }}
        </span>

        <h3 class="text-sm font-semibold text-brand-parchment mt-1">
            {{ $entry['title'] }}
        </h3>

        <p class="text-xs text-brand-parchment/70 mt-1 line-clamp-2">
            {{ $entry['excerpt'] }}
        </p>
    </div>

</article>