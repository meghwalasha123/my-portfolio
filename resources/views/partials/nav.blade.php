@php
    $nav = [
        'about'    => 'About',
        'skills'   => 'Skills',
        'projects' => 'Projects',
        'work'     => 'Live Work',
        'contact'  => 'Contact',
    ];
@endphp
<header data-header class="fixed top-0 inset-x-0 z-50 border-b border-transparent transition-all duration-300">
    <nav class="max-w-6xl mx-auto px-5 sm:px-8 h-16 flex items-center justify-between">
        <a href="#home" class="flex items-center gap-2 font-extrabold text-lg tracking-tight text-white">
            <span class="grid place-items-center w-9 h-9 rounded-xl bg-gradient-to-br from-brand-500 to-cyan-400 text-white shadow-lg">
                {{ collect(explode(' ', $portfolio['name']))->map(fn ($w) => $w[0] ?? '')->take(2)->implode('') }}
            </span>
            <span>{{ $portfolio['short'] }}</span>
        </a>

        <ul data-nav-menu class="hidden md:flex items-center gap-1 text-sm font-medium">
            @foreach ($nav as $id => $label)
                <li>
                    <a data-nav-link href="#{{ $id }}"
                       class="px-3 py-2 rounded-lg text-slate-400 hover:text-white hover:bg-white/5 transition">
                        {{ $label }}
                    </a>
                </li>
            @endforeach
            <li class="ml-2">
                <a href="mailto:{{ $portfolio['email'] }}"
                   class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gradient-to-r from-brand-600 to-brand-500 text-white font-semibold shadow-lg shadow-brand-600/30 hover:from-brand-500 hover:to-brand-400 transition">
                    Hire Me
                </a>
            </li>
        </ul>

        <button data-nav-toggle class="md:hidden grid place-items-center w-10 h-10 rounded-lg text-white hover:bg-white/10" aria-label="Toggle menu">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </nav>

    {{-- Mobile dropdown --}}
    <div class="md:hidden">
        <ul data-nav-menu class="hidden flex-col gap-1 px-5 pb-4 bg-ink-900/95 backdrop-blur border-b border-white/10">
            @foreach ($nav as $id => $label)
                <li>
                    <a href="#{{ $id }}" class="block px-3 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-white/5">{{ $label }}</a>
                </li>
            @endforeach
            <li>
                <a href="mailto:{{ $portfolio['email'] }}" class="block px-3 py-2.5 rounded-lg text-center bg-brand-600 text-white font-semibold mt-1">Hire Me</a>
            </li>
        </ul>
    </div>
</header>
