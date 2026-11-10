<section class="max-w-6xl mx-auto px-6" id="journal">
    <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
        <div>
            <span class="text-xs font-mono uppercase tracking-widest text-brand-sand">Articles &amp; Insights</span>
            <h2 class="text-3xl font-bold tracking-tight text-brand-parchment mt-1">Featured Journal</h2>
        </div>
        <a class="text-xs font-medium text-brand-sand hover:underline flex items-center gap-1" href="#journal">
            Read all articles →
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($journal as $entry)
            <x-journal-card :entry="$entry" />
        @endforeach
    </div>
</section>
