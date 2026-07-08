<section id="projects" class="py-20 sm:py-28">
    <div class="max-w-6xl mx-auto px-5 sm:px-8">
        <div class="reveal max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-brand-300">Portfolio</p>
            <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-white">Major Projects</h2>
            <p class="mt-4 text-slate-400">A selection of production systems I've architected and built end-to-end.</p>
        </div>

        <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($portfolio['projects'] as $project)
                <article class="reveal group relative rounded-2xl bg-gradient-to-b from-white/[0.07] to-white/[0.02] border border-white/10 p-6 hover:border-brand-400/50 transition duration-300 flex flex-col">
                    <span class="grid place-items-center w-12 h-12 rounded-xl bg-gradient-to-br from-brand-600/30 to-cyan-500/20 text-brand-200 group-hover:scale-110 transition">
                        @include('partials.icon', ['name' => $project['icon'], 'class' => 'w-6 h-6'])
                    </span>
                    <h3 class="mt-5 text-lg font-bold text-white group-hover:text-brand-200 transition">{{ $project['title'] }}</h3>
                    <p class="mt-2 text-sm text-slate-400 leading-relaxed flex-1">{{ $project['desc'] }}</p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        @foreach ($project['tags'] as $tag)
                            <span class="px-2.5 py-1 rounded-md bg-brand-500/10 border border-brand-400/20 text-xs font-medium text-brand-200">{{ $tag }}</span>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
