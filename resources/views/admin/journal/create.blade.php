<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Journal Entry</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @include('partials.tailwind-config')
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body class="min-h-screen bg-brand-main text-brand-parchment p-8">

    <div class="max-w-3xl mx-auto">

        <a href="{{ route('admin.journal.index') }}"
            class="text-brand-sage hover:text-brand-sand">
            ← Back to Journal
        </a>

        <h1 class="text-3xl font-bold mt-6 mb-2">Add Journal Entry</h1>

        <p class="text-brand-sage mb-8">
            Share a new experience or achievement.
        </p>

        @if ($errors->any())
            <div class="bg-red-500/10 text-red-400 rounded-xl p-4 mb-6">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.journal.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="bg-brand-surface border border-brand-slate rounded-2xl p-6 space-y-5">

            @csrf

            <div>
                <label class="block mb-2">Title</label>
                <input type="text" name="title"
                    value="{{ old('title') }}"
                    class="w-full rounded-xl bg-brand-main border-brand-slate"
                    required>
            </div>

            <div>
                <label class="block mb-2">Category</label>
                <input type="text" name="category"
                    value="{{ old('category') }}"
                    placeholder="Education, Experience, Achievement..."
                    class="w-full rounded-xl bg-brand-main border-brand-slate"
                    required>
            </div>

            <div>
                <label class="block mb-2">Date</label>
                <input type="text" name="date"
                    value="{{ old('date') }}"
                    placeholder="November 2026"
                    class="w-full rounded-xl bg-brand-main border-brand-slate">
            </div>

            <div>
                <label class="block mb-2">Excerpt</label>
                <textarea name="excerpt" rows="5"
                    class="w-full rounded-xl bg-brand-main border-brand-slate"
                    required>{{ old('excerpt') }}</textarea>
            </div>

            <div>
                <label class="block mb-2">Caption</label>
                <input type="text" name="caption"
                    value="{{ old('caption') }}"
                    placeholder="A short image caption..."
                    class="w-full rounded-xl bg-brand-main border-brand-slate">
            </div>

            <div>
                <label class="block mb-2">Image</label>
                <input type="file" name="image" accept="image/*"
                    class="w-full text-brand-sage">
                <p class="text-xs text-brand-sage mt-1">
                    Maximum image size: 2 MB.
                </p>
            </div>

            <button type="submit"
                class="w-full bg-brand-sage text-brand-main font-semibold rounded-xl py-3 hover:bg-brand-sand transition">
                Save Journal Entry
            </button>

        </form>

    </div>

</body>
</html>