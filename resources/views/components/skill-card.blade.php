@props(['skill'])

@php
    $bar = ($skill['accent'] ?? 'sage') === 'sand'
        ? 'bg-brand-sand'
        : 'bg-brand-sage';
@endphp

<div class="p-5 rounded-2xl bg-brand-surface border border-brand-slate hover:border-brand-sand transition-all duration-300 shadow-glow-sm">

    <div class="flex items-center justify-between mb-4">

        <div class="flex items-center gap-3">

            {{-- Skill Icon --}}
            <div class="w-10 h-10 rounded-lg bg-brand-main border border-brand-slate/80 flex items-center justify-center">
                <i class="{{ $skill['icon'] }} text-2xl"></i>
            </div>

            {{-- Skill Name --}}
            <h3 class="text-sm font-semibold text-brand-parchment">
                {{ $skill['name'] }}
            </h3>

        </div>

        {{-- Skill Level --}}
        <span class="text-xs font-mono text-brand-sand">
            {{ $skill['level'] }}%
        </span>

    </div>

    {{-- Proficiency Bar --}}
    <div class="space-y-1.5">

        <div class="flex justify-between text-[11px] text-brand-parchment/60">
            <span>Proficiency</span>
        </div>

        <div class="w-full h-2 bg-brand-main rounded-full overflow-hidden p-0.5 border border-brand-slate/50">
            <div
                class="h-full {{ $bar }} rounded-full"
                style="width: {{ $skill['level'] }}%;">
            </div>
        </div>

    </div>

</div>