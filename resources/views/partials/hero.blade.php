<section id="home" class="relative overflow-hidden bg-grid pt-28 pb-20 sm:pt-36 sm:pb-28">
    {{-- Ambient gradient blobs --}}
    <div class="pointer-events-none absolute -top-24 -left-24 w-96 h-96 rounded-full bg-brand-600/25 blur-3xl"></div>
    <div class="pointer-events-none absolute top-40 -right-24 w-96 h-96 rounded-full bg-cyan-500/20 blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto px-5 sm:px-8">
        <div class="grid lg:grid-cols-[1.2fr_.8fr] gap-12 items-center">
            <div class="reveal">
                <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs font-medium text-brand-200">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Available for backend / API roles
                </span>

                <h1 class="mt-6 text-4xl sm:text-6xl font-extrabold tracking-tight text-white leading-[1.05]">
                    Hi, I'm {{ $portfolio['short'] }}.<br>
                    <span class="text-gradient">{{ $portfolio['title'] }}</span>
                </h1>

                <p class="mt-6 text-lg text-slate-300 max-w-xl leading-relaxed">
                    {{ $portfolio['tagline'] }} I craft
                    <span class="text-white font-semibold">RESTful APIs</span>,
                    <span class="text-white font-semibold">AI integrations</span> &
                    <span class="text-white font-semibold">payment systems</span>
                    with Laravel, PHP & MySQL.
                </p>

                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="#projects" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-gradient-to-r from-brand-600 to-brand-500 text-white font-semibold shadow-lg shadow-brand-600/30 hover:from-brand-500 hover:to-brand-400 transition">
                        View My Work
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </a>
                    <a href="#contact" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-semibold hover:bg-white/10 transition">
                        @include('partials.icon', ['name' => 'mail', 'class' => 'w-4 h-4'])
                        Contact Me
                    </a>
                    <a href="{{ $portfolio['links']['github'] }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-semibold hover:bg-white/10 transition">
                        @include('partials.icon', ['name' => 'github', 'class' => 'w-4 h-4'])
                        GitHub
                    </a>
                </div>

                <div class="mt-6 flex flex-wrap gap-x-6 gap-y-2 text-sm text-slate-400">
                    <span class="inline-flex items-center gap-2">@include('partials.icon', ['name' => 'pin', 'class' => 'w-4 h-4 text-brand-300']) {{ $portfolio['location'] }}</span>
                    <a href="mailto:{{ $portfolio['email'] }}" class="inline-flex items-center gap-2 hover:text-white">@include('partials.icon', ['name' => 'mail', 'class' => 'w-4 h-4 text-brand-300']) {{ $portfolio['email'] }}</a>
                    <a href="tel:+{{ $portfolio['phone_raw'] }}" class="inline-flex items-center gap-2 hover:text-white">@include('partials.icon', ['name' => 'phone', 'class' => 'w-4 h-4 text-brand-300']) {{ $portfolio['phone'] }}</a>
                </div>
            </div>

            {{-- Code card --}}
            <div class="reveal">
                <div class="relative animate-float">
                    <div class="rounded-2xl bg-ink-800/80 border border-white/10 card-glow overflow-hidden">
                        <div class="flex items-center gap-2 px-4 py-3 border-b border-white/10 bg-white/5">
                            <span class="w-3 h-3 rounded-full bg-red-400/80"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-400/80"></span>
                            <span class="w-3 h-3 rounded-full bg-green-400/80"></span>
                            <span class="ml-2 text-xs text-slate-400">Developer.php</span>
                        </div>
                        <pre class="p-5 text-[13px] leading-relaxed overflow-x-auto"><code><span class="text-fuchsia-400">class</span> <span class="text-cyan-300">Developer</span> {
    <span class="text-fuchsia-400">public</span> <span class="text-emerald-300">$name</span>  = <span class="text-amber-300">'{{ $portfolio['short'] }}'</span>;
    <span class="text-fuchsia-400">public</span> <span class="text-emerald-300">$role</span>  = <span class="text-amber-300">'Laravel Backend'</span>;
    <span class="text-fuchsia-400">public</span> <span class="text-emerald-300">$stack</span> = [
        <span class="text-amber-300">'PHP'</span>, <span class="text-amber-300">'Laravel'</span>, <span class="text-amber-300">'MySQL'</span>,
        <span class="text-amber-300">'REST API'</span>, <span class="text-amber-300">'OpenAI'</span>,
    ];

    <span class="text-fuchsia-400">public function</span> <span class="text-cyan-300">build</span>() {
        <span class="text-fuchsia-400">return</span> <span class="text-amber-300">'scalable + secure'</span>;
    }
}</code></pre>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stats --}}
        <div class="reveal mt-16 grid grid-cols-2 sm:grid-cols-4 gap-4">
            @foreach ($portfolio['stats'] as $stat)
                <div class="rounded-2xl bg-white/5 border border-white/10 p-5 text-center hover:border-brand-400/40 transition">
                    <div class="text-3xl sm:text-4xl font-extrabold text-gradient">{{ $stat['value'] }}</div>
                    <div class="mt-1 text-sm text-slate-400">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
