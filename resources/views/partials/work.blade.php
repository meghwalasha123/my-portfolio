<section id="work" class="py-20 sm:py-28 bg-ink-800/40 border-y border-white/5">
    <div class="max-w-6xl mx-auto px-5 sm:px-8">
        <div class="reveal flex flex-wrap items-end justify-between gap-4">
            <div class="max-w-2xl">
                <p class="text-sm font-semibold uppercase tracking-widest text-brand-300">Live &amp; Shipped</p>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-white">Live Work</h2>
                <p class="mt-4 text-slate-400">Real products currently running in production that I contributed to.</p>
            </div>
            <a href="{{ $portfolio['links']['api_docs'] }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white/5 border border-white/10 text-sm font-semibold text-white hover:bg-white/10 transition">
                @include('partials.icon', ['name' => 'doc', 'class' => 'w-4 h-4']) View API Documentation
            </a>
        </div>

        <div class="mt-12 grid sm:grid-cols-2 gap-4">
            @foreach ($portfolio['live_sites'] as $site)
                <a href="{{ $site['url'] }}" target="_blank" rel="noopener"
                   class="reveal group flex items-center justify-between gap-4 rounded-2xl bg-white/5 border border-white/10 p-5 hover:border-brand-400/50 hover:bg-white/[0.08] transition">
                    <div class="min-w-0">
                        <p class="font-semibold text-white group-hover:text-brand-200 transition">{{ $site['label'] }}</p>
                        <p class="text-sm text-slate-400 truncate">{{ preg_replace('#^https?://#', '', $site['url']) }}</p>
                    </div>
                    <span class="grid place-items-center w-10 h-10 rounded-xl bg-brand-500/15 text-brand-200 shrink-0 group-hover:scale-110 transition">
                        @include('partials.icon', ['name' => 'external', 'class' => 'w-5 h-5'])
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</section>
