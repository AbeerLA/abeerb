<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @include('partials.tailwind-config')
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body class="min-h-screen bg-brand-main text-brand-parchment p-8">

    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold mb-3">Admin Dashboard</h1>

        <p class="text-brand-sage mb-8">
            Welcome back, {{ Auth::user()->name }}!
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <a href="{{ route('admin.projects.index') }}"
                class="bg-brand-surface border border-brand-slate rounded-2xl p-6 hover:border-brand-sand transition">

                <h2 class="text-xl font-semibold mb-2">📁 Manage Projects</h2>

                <p class="text-brand-sage">
                    Add, edit, and delete your portfolio projects.
                </p>

            </a>

            <a href="{{ route('admin.journal.index') }}"
                class="bg-brand-surface border border-brand-slate rounded-2xl p-6 hover:border-brand-sand transition">

                <h2 class="text-xl font-semibold mb-2">📝 Manage Journal</h2>

                <p class="text-brand-sage">
                    Add, edit, and delete your journal entries.
                </p>

            </a>

        </div>

        <form action="{{ route('admin.logout') }}" method="POST" class="mt-8">
            @csrf
            <button type="submit" class="bg-red-500/10 text-red-400 px-5 py-3 rounded-xl">
                Logout
            </button>
        </form>
    </div>

</body>

</html>