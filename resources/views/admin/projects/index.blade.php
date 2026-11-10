<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Projects</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @include('partials.tailwind-config')
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body class="min-h-screen bg-brand-main text-brand-parchment p-8">

    <div class="max-w-6xl mx-auto">



        <div class="mb-8">

            {{-- Back to Dashboard --}}
            <a href="{{ route('admin.dashboard') }}" class="text-brand-sage hover:text-brand-sand text-sm">
                ← Dashboard
            </a>

            <div class="flex justify-between items-center mt-5">

                <div>
                    <h1 class="text-3xl font-bold">Manage Projects</h1>
                    <p class="text-brand-sage mt-2">Manage your portfolio projects.</p>
                </div>

                <a href="{{ route('admin.projects.create') }}"
                    class="bg-brand-sage text-brand-main font-semibold px-5 py-3 rounded-xl hover:opacity-90 transition">
                    + Add Project
                </a>

            </div>

        </div>

        <div class="bg-brand-surface border border-brand-slate rounded-2xl overflow-hidden">

            <table class="w-full text-left">

                <thead class="border-b border-brand-slate">
                    <tr class="text-brand-sage text-sm">
                        <th class="p-4">Project</th>
                        <th class="p-4">Description</th>
                        <th class="p-4">Tags</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($projects as $project)

                    <tr class="border-b border-brand-slate last:border-0">

                        {{-- Project title --}}
                        <td class="p-4 font-semibold">
                            {{ $project->title }}
                        </td>

                        {{-- Description --}}
                        <td class="p-4 text-brand-sage">
                            {{ Str::limit($project->description, 70) }}
                        </td>

                        {{-- Tags --}}
                        <td class="p-4">
                            @foreach ($project->tags ?? [] as $tag)
                            <span
                                class="inline-block bg-brand-main text-brand-sand text-xs px-2 py-1 rounded-lg mr-1 mb-1">
                                {{ $tag }}
                            </span>
                            @endforeach
                        </td>

                        {{-- Actions --}}
                        <td class="p-4 whitespace-nowrap">

                            <a href="{{ route('admin.projects.edit', $project->id) }}"
                                class="text-brand-sand hover:underline mr-3">
                                Edit
                            </a>

                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
                                class="inline"
                                onsubmit="return confirm('Are you sure you want to delete this project?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="text-red-400 hover:underline">
                                    Delete
                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="4" class="p-6 text-center text-brand-sage">
                            No projects found.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>