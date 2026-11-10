<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Journal Entry</title>

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

        <h1 class="text-3xl font-bold mt-6 mb-8">Edit Journal Entry</h1>

        @if ($errors->any())
            <div class="bg-red-500/10 text-red-400 rounded-xl p-4 mb-6">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.journal.update', $journal->id) }}"
            method="POST"
            enctype="multipart/form-data"
            class="bg-brand-surface border border-brand-slate rounded-2xl p-6 space-y-5">

            @csrf
            @method('PUT')

            <div>
                <label class="block mb-2">Title</label>
                <input type="text" name="title"
                    value="{{ old('title', $journal->title) }}"
                    class="w-full rounded-xl bg-brand-main border-brand-slate"
                    required>
            </div>

            <div>
                <label class="block mb-2">Category</label>
                <input type="text" name="category"
                    value="{{ old('category', $journal->category) }}"
                    class="w-full rounded-xl bg-brand-main border-brand-slate"
                    required>
            </div>

            <div>
                <label class="block mb-2">Date</label>
                <input type="text" name="date"
                    value="{{ old('date', $journal->date) }}"
                    class="w-full rounded-xl bg-brand-main border-brand-slate">
            </div>

            <div>
                <label class="block mb-2">Excerpt</label>
                <textarea name="excerpt" rows="5"
                    class="w-full rounded-xl bg-brand-main border-brand-slate"
                    required>{{ old('excerpt', $journal->excerpt) }}</textarea>
            </div>

            <div>
                <label class="block mb-2">Caption</label>
                <input type="text" name="caption"
                    value="{{ old('caption', $journal->caption) }}"
                    class="w-full rounded-xl bg-brand-main border-brand-slate">
            </div>

            <div>
                <label class="block mb-2">Current Image</label>

                @if ($journal->image)
                    <img src="{{ asset('images/journals/' . $journal->image) }}"
                        class="w-40 h-28 object-cover rounded-xl mb-3">
                @else
                    <p class="text-brand-sage text-sm mb-3">
                        No image uploaded.
                    </p>
                @endif

                <label class="block mb-2">Upload New Image (Optional)</label>
                <input type="file" name="image" accept="image/*">
            </div>

            <button type="submit"
                class="w-full bg-brand-sage text-brand-main font-semibold rounded-xl py-3 hover:bg-brand-sand transition">
                Update Journal Entry
            </button>

        </form>

    </div>

</body>
</html>