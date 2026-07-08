<footer class="border-t border-white/10 bg-ink-900">
    <div class="max-w-6xl mx-auto px-5 sm:px-8 py-10">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="text-center sm:text-left">
                <p class="font-extrabold text-white text-lg">{{ $portfolio['name'] }}</p>
                <p class="text-sm text-slate-400">{{ $portfolio['title'] }} · {{ $portfolio['location'] }}</p>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ $portfolio['links']['github'] }}" target="_blank" rel="noopener" aria-label="GitHub"
                   class="grid place-items-center w-10 h-10 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:border-brand-400/50 transition">
                    @include('partials.icon', ['name' => 'github', 'class' => 'w-5 h-5'])
                </a>
                <a href="mailto:{{ $portfolio['email'] }}" aria-label="Email"
                   class="grid place-items-center w-10 h-10 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:border-brand-400/50 transition">
                    @include('partials.icon', ['name' => 'mail', 'class' => 'w-5 h-5'])
                </a>
                <a href="tel:+{{ $portfolio['phone_raw'] }}" aria-label="Phone"
                   class="grid place-items-center w-10 h-10 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:border-brand-400/50 transition">
                    @include('partials.icon', ['name' => 'phone', 'class' => 'w-5 h-5'])
                </a>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-3 text-sm text-slate-500">
            <p>&copy; {{ date('Y') }} {{ $portfolio['name'] }}. All rights reserved.</p>
            <p>Built with <span class="text-brand-300">Laravel</span> &amp; <span class="text-cyan-300">Tailwind CSS</span></p>
        </div>
    </div>
</footer>
