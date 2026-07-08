<section id="skills" class="py-20 sm:py-28 bg-ink-800/40 border-y border-white/5">
    <div class="max-w-6xl mx-auto px-5 sm:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-brand-300">Tech Stack</p>
            <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-white">Technical Skills</h2>
            <p class="mt-4 text-slate-400">The tools and technologies I use to design, build and ship production backend systems.</p>
        </div>

        <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($portfolio['skills'] as $skill)
                <div class="reveal group rounded-2xl bg-white/5 border border-white/10 p-6 hover:border-brand-400/50 hover:-translate-y-1 transition duration-300">
                    <div class="flex items-center gap-3">
                        <span class="grid place-items-center w-11 h-11 rounded-xl bg-gradient-to-br from-brand-500/25 to-cyan-400/20 text-brand-200 group-hover:scale-110 transition">
                            @include('partials.icon', ['name' => $skill['icon'], 'class' => 'w-6 h-6'])
                        </span>
                        <h3 class="text-lg font-bold text-white">{{ $skill['group'] }}</h3>
                    </div>
                    <div class="mt-5 flex flex-wrap gap-2">
                        @foreach ($skill['items'] as $item)
                            <span class="px-3 py-1.5 rounded-lg bg-ink-900/60 border border-white/10 text-sm text-slate-300">{{ $item }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
