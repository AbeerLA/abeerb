@php
$input = 'w-full px-4 py-2.5 rounded-xl bg-brand-main border border-brand-slate text-brand-parchment
placeholder-brand-parchment/30 text-xs focus:ring-1 focus:ring-brand-sand focus:border-brand-sand transition-all
outline-none';
@endphp

<section class="max-w-6xl mx-auto px-6 pb-16" id="contact">
    <div class="text-center space-y-2 mb-12">
        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-brand-parchment">Get in Touch</h2>
        <p class="text-xs sm:text-sm text-brand-parchment/60">Let's discuss your next project, architecture, or idea.
        </p>
    </div>

    <div
        class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-brand-surface/40 p-6 sm:p-10 rounded-3xl border border-brand-slate shadow-glow-sm">

        {{-- Left: picture + email --}}
        <div class="lg:col-span-5 flex flex-col items-center justify-center text-center">
            <div class="relative w-48 h-48 sm:w-60 sm:h-60 flex items-center justify-center">
                <img src="{{ asset('images/profile3.png') }}" alt="Abeer" class="w-full h-full object-contain" />
            </div>

            <div class="mt-4 text-center">
                <span class="text-xs font-mono text-brand-sand">contact@abeeralbaqi.com</span>
                <p class="text-[11px] text-brand-parchment/60">Typical response time: &lt; 24 hours</p>
            </div>
        </div>
        {{-- Right: form --}}
        <div class="lg:col-span-7">

            @if (session('success'))
            <div class="mb-4 px-4 py-3 rounded-xl bg-brand-sage/20 border border-brand-sage text-brand-sand text-xs">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="mb-4 px-4 py-3 rounded-xl bg-red-500/10 border border-red-400/60 text-red-200 text-xs">
                <ul class="list-disc pl-4 space-y-0.5">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form class="space-y-4" method="POST" action="{{ route('contact.store') }}">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-brand-parchment/80 mb-1.5" for="first_name">First
                            Name</label>
                        <input class="{{ $input }}" id="first_name" name="first_name" value="{{ old('first_name') }}"
                            placeholder="Alex" required type="text" />
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-brand-parchment/80 mb-1.5" for="last_name">Last
                            Name</label>
                        <input class="{{ $input }}" id="last_name" name="last_name" value="{{ old('last_name') }}"
                            placeholder="Morgan" required type="text" />
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-medium text-brand-parchment/80 mb-1.5" for="email">Email
                        Address</label>
                    <input class="{{ $input }}" id="email" name="email" value="{{ old('email') }}"
                        placeholder="alex@company.com" required type="email" />
                </div>

                <div>
                    <label class="block text-xs font-medium text-brand-parchment/80 mb-1.5" for="phone">Phone
                        Number</label>
                    <input class="{{ $input }}" id="phone" name="phone" value="{{ old('phone') }}"
                        placeholder="+62 812 0000 0000" type="tel" />
                </div>

                <div>
                    <label class="block text-xs font-medium text-brand-parchment/80 mb-1.5" for="message">Your
                        Message</label>
                    <textarea class="{{ $input }} resize-none" id="message" name="message" rows="4" required
                        placeholder="Tell me about your project goals and timeline...">{{ old('message') }}</textarea>
                </div>

                <button type="submit"
                    class="w-full py-3 px-6 rounded-full bg-brand-sage text-brand-main font-semibold text-xs tracking-wide hover:bg-brand-sand transition-all shadow-glow-sm">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>