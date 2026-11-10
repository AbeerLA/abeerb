<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Journal</title>

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
                    <h1 class="text-3xl font-bold">Manage Journal</h1>
                    <p class="text-brand-sage mt-2">Manage your journal entries.</p>
                </div>

                <a href="{{ route('admin.journal.create') }}"
                    class="bg-brand-sage text-brand-main px-5 py-3 rounded-xl font-semibold hover:opacity-90 transition">
                    + Add Entry
                </a>

            </div>

        </div>

        @if (session('success'))
        <div class="bg-green-500/10 text-green-400 rounded-xl p-4 mb-6">
            {{ session('success') }}
        </div>
        @endif

        <div class="bg-brand-surface border border-brand-slate rounded-2xl overflow-hidden">

            <table class="w-full text-left">

                <thead class="border-b border-brand-slate">
                    <tr class="text-brand-sage text-sm">
                        <th class="p-4">Title</th>
                        <th class="p-4">Category</th>
                        <th class="p-4">Date</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($entries as $entry)

                    <tr class="border-b border-brand-slate last:border-0">

                        <td class="p-4 font-semibold">
                            {{ $entry->title }}
                        </td>

                        <td class="p-4 text-brand-sage">
                            {{ $entry->category }}
                        </td>

                        <td class="p-4 text-brand-sage">
                            {{ $entry->date }}
                        </td>

                        <td class="p-4 whitespace-nowrap">

                            <a href="{{ route('admin.journal.edit', $entry->id) }}"
                                class="text-brand-sand hover:underline mr-3">
                                Edit
                            </a>

                            <form action="{{ route('admin.journal.destroy', $entry->id) }}" method="POST" class="inline"
                                onsubmit="return confirm('Are you sure you want to delete this entry?')">

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
                            No journal entries found.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>