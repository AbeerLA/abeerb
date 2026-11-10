<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @include('partials.tailwind-config')
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body class="bg-brand-main text-brand-parchment min-h-screen">

    <div class="max-w-3xl mx-auto px-6 py-10">

        <a href="{{ route('admin.projects.index') }}"
            class="text-brand-sage hover:text-brand-sand text-sm">
            ← Back to Projects
        </a>

        <h1 class="text-3xl font-bold mt-6 mb-2">Add New Project</h1>
        <p class="text-brand-sage mb-8">Add a new project to your portfolio.</p>

        @if ($errors->any())
            <div class="bg-red-500/10 border border-red-500 text-red-300 rounded-xl p-4 mb-6">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST"
            enctype="multipart/form-data"
            class="bg-brand-surface border border-brand-slate rounded-2xl p-6 space-y-5">

            @csrf

            <div>
                <label class="block mb-2 text-sm font-medium">Project Title *</label>
                <input type="text" name="title" value="{{ old('title') }}" required
                    class="w-full rounded-xl bg-brand-main border-brand-slate text-brand-parchment">
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium">Short Caption *</label>
                <input type="text" name="caption" value="{{ old('caption') }}" required
                    class="w-full rounded-xl bg-brand-main border-brand-slate text-brand-parchment">
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium">Description *</label>
                <textarea name="description" rows="4" required
                    class="w-full rounded-xl bg-brand-main border-brand-slate text-brand-parchment">{{ old('description') }}</textarea>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium">Technologies *</label>
                <input type="text" name="tags" value="{{ old('tags') }}" required
                    placeholder="Laravel, PHP, MySQL, Tailwind CSS"
                    class="w-full rounded-xl bg-brand-main border-brand-slate text-brand-parchment">
                <p class="text-xs text-brand-sage mt-1">Separate technologies with commas.</p>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium">Project Image</label>
                <input type="file" name="image" accept="image/*"
                    class="w-full rounded-xl bg-brand-main border border-brand-slate text-brand-parchment p-2">
                <p class="text-xs text-brand-sage mt-1">Maximum image size: 2 MB.</p>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium">GitHub URL</label>
                <input type="url" name="code" value="{{ old('code') }}"
                    placeholder="https://github.com/username/project"
                    class="w-full rounded-xl bg-brand-main border-brand-slate text-brand-parchment">
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium">Live Demo URL</label>
                <input type="url" name="demo" value="{{ old('demo') }}"
                    placeholder="https://example.com"
                    class="w-full rounded-xl bg-brand-main border-brand-slate text-brand-parchment">
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit"
                    class="bg-brand-sage text-brand-main font-semibold px-6 py-3 rounded-xl hover:opacity-90 transition">
                    Add Project
                </button>

                <a href="{{ route('admin.projects.index') }}"
                    class="border border-brand-slate px-6 py-3 rounded-xl hover:bg-brand-main transition">
                    Cancel
                </a>
            </div>

        </form>
    </div>

</body>
</html>
