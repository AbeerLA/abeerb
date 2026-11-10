<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Portfolio</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @include('partials.tailwind-config')
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body class="min-h-screen bg-brand-main flex items-center justify-center p-6">

    <div class="w-full max-w-md bg-brand-surface border border-brand-slate rounded-3xl p-8 shadow-glow-sm">

        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-brand-parchment">
                Welcome Back
            </h1>

            <p class="text-brand-sage mt-2">
                Sign in to manage your portfolio
            </p>
        </div>

        @if ($errors->any())
        <div class="bg-red-500/10 border border-red-500/30 text-red-400 rounded-xl p-3 mb-5 text-sm">
            {{ $errors->first() }}
        </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">

            @csrf

            <div>
                <label for="email" class="block text-sm text-brand-parchment mb-2">
                    Email Address
                </label>

                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="w-full bg-brand-main border border-brand-slate rounded-xl px-4 py-3 text-brand-parchment outline-none focus:border-brand-sand"
                    placeholder="Enter your email">
            </div>

            <div>
                <label for="password" class="block text-sm text-brand-parchment mb-2">
                    Password
                </label>

                <input type="password" id="password" name="password" required
                    class="w-full bg-brand-main border border-brand-slate rounded-xl px-4 py-3 text-brand-parchment outline-none focus:border-brand-sand"
                    placeholder="Enter your password">
            </div>

            <button type="submit"
                class="w-full bg-brand-sage text-brand-main font-semibold rounded-xl py-3 hover:bg-brand-sand transition-colors">
                Sign In
            </button>

        </form>

        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-sm text-brand-sage hover:text-brand-sand">
                ← Back to Portfolio
            </a>
        </div>

    </div>

</body>

</html>