<section id="about" class="py-20 sm:py-28">
    <div class="max-w-6xl mx-auto px-5 sm:px-8">
        <div class="grid lg:grid-cols-[1fr_1.1fr] gap-12 lg:gap-16 items-start">
            <div class="reveal">
                <p class="text-sm font-semibold uppercase tracking-widest text-brand-300">About Me</p>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-white">
                    Turning complex requirements into <span class="text-gradient">clean backend systems</span>
                </h2>
                <p class="mt-6 text-slate-300 leading-relaxed">
                    {{ $portfolio['summary'] }}
                </p>

                <div class="mt-8 grid sm:grid-cols-3 gap-4">
                    <a href="{{ $portfolio['links']['github'] }}" target="_blank" rel="noopener" class="group rounded-xl bg-white/5 border border-white/10 p-4 hover:border-brand-400/50 transition">
                        @include('partials.icon', ['name' => 'github', 'class' => 'w-6 h-6 text-brand-300'])
                        <p class="mt-2 text-sm font-semibold text-white">GitHub</p>
                        <p class="text-xs text-slate-400 group-hover:text-brand-300">View repositories</p>
                    </a>
                    <a href="{{ $portfolio['links']['api_docs'] }}" target="_blank" rel="noopener" class="group rounded-xl bg-white/5 border border-white/10 p-4 hover:border-brand-400/50 transition">
                        @include('partials.icon', ['name' => 'doc', 'class' => 'w-6 h-6 text-brand-300'])
                        <p class="mt-2 text-sm font-semibold text-white">API Docs</p>
                        <p class="text-xs text-slate-400 group-hover:text-brand-300">Postman collection</p>
                    </a>
                    <a href="#contact" class="group rounded-xl bg-white/5 border border-white/10 p-4 hover:border-brand-400/50 transition">
                        @include('partials.icon', ['name' => 'mail', 'class' => 'w-6 h-6 text-brand-300'])
                        <p class="mt-2 text-sm font-semibold text-white">Let's Talk</p>
                        <p class="text-xs text-slate-400 group-hover:text-brand-300">Start a project</p>
                    </a>
                </div>
            </div>

            <div class="reveal space-y-8">
                <div>
                    <h3 class="text-lg font-bold text-white flex items-center gap-2">
                        <span class="w-8 h-px bg-brand-400"></span> What I Do
                    </h3>
                    <ul class="mt-4 space-y-3">
                        @foreach ($portfolio['highlights'] as $highlight)
                            <li class="flex items-start gap-3 text-slate-300">
                                <span class="mt-0.5 grid place-items-center w-5 h-5 rounded-full bg-brand-500/20 text-brand-300 shrink-0">
                                    @include('partials.icon', ['name' => 'check', 'class' => 'w-3.5 h-3.5'])
                                </span>
                                <span>{{ $highlight }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-white flex items-center gap-2">
                        @include('partials.icon', ['name' => 'cap', 'class' => 'w-5 h-5 text-brand-300']) Education
                    </h3>
                    <div class="mt-4 space-y-3">
                        @foreach ($portfolio['education'] as $edu)
                            <div class="rounded-xl bg-white/5 border border-white/10 p-4">
                                <p class="font-semibold text-white">{{ $edu['degree'] }}</p>
                                <p class="text-sm text-slate-400">{{ $edu['org'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
