<section id="contact" class="py-20 sm:py-28">
    <div class="max-w-6xl mx-auto px-5 sm:px-8">
        <div class="grid lg:grid-cols-[1fr_1.1fr] gap-12 items-start">
            <div class="reveal">
                <p class="text-sm font-semibold uppercase tracking-widest text-brand-300">Get In Touch</p>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-white">Let's build something <span class="text-gradient">great</span></h2>
                <p class="mt-4 text-slate-300 leading-relaxed">
                    Looking for a Laravel backend developer for your next project or full-time role?
                    Send a message and I'll respond as soon as possible.
                </p>

                <div class="mt-8 space-y-3">
                    <a href="mailto:{{ $portfolio['email'] }}" class="group flex items-center gap-4 rounded-xl bg-white/5 border border-white/10 p-4 hover:border-brand-400/50 transition">
                        <span class="grid place-items-center w-11 h-11 rounded-xl bg-brand-500/15 text-brand-200">@include('partials.icon', ['name' => 'mail', 'class' => 'w-5 h-5'])</span>
                        <span><span class="block text-xs text-slate-400">Email</span><span class="font-semibold text-white group-hover:text-brand-200">{{ $portfolio['email'] }}</span></span>
                    </a>
                    <a href="tel:+{{ $portfolio['phone_raw'] }}" class="group flex items-center gap-4 rounded-xl bg-white/5 border border-white/10 p-4 hover:border-brand-400/50 transition">
                        <span class="grid place-items-center w-11 h-11 rounded-xl bg-brand-500/15 text-brand-200">@include('partials.icon', ['name' => 'phone', 'class' => 'w-5 h-5'])</span>
                        <span><span class="block text-xs text-slate-400">Phone</span><span class="font-semibold text-white group-hover:text-brand-200">{{ $portfolio['phone'] }}</span></span>
                    </a>
                    <div class="flex items-center gap-4 rounded-xl bg-white/5 border border-white/10 p-4">
                        <span class="grid place-items-center w-11 h-11 rounded-xl bg-brand-500/15 text-brand-200">@include('partials.icon', ['name' => 'pin', 'class' => 'w-5 h-5'])</span>
                        <span><span class="block text-xs text-slate-400">Location</span><span class="font-semibold text-white">{{ $portfolio['location'] }}</span></span>
                    </div>
                </div>
            </div>

            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6 sm:p-8 card-glow">
                @if (session('status'))
                    <div class="mb-6 flex items-start gap-3 rounded-xl bg-emerald-500/10 border border-emerald-400/30 p-4 text-emerald-200">
                        @include('partials.icon', ['name' => 'check', 'class' => 'w-5 h-5 mt-0.5 shrink-0'])
                        <p class="text-sm">{{ session('status') }}</p>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-300 mb-1.5">Name</label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" required
                                   class="w-full rounded-xl bg-ink-900/60 border border-white/10 px-4 py-3 text-white placeholder-slate-500 focus:border-brand-400 focus:ring-2 focus:ring-brand-500/30 outline-none transition"
                                   placeholder="Your name">
                            @error('name') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-300 mb-1.5">Email</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required
                                   class="w-full rounded-xl bg-ink-900/60 border border-white/10 px-4 py-3 text-white placeholder-slate-500 focus:border-brand-400 focus:ring-2 focus:ring-brand-500/30 outline-none transition"
                                   placeholder="you@example.com">
                            @error('email') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-slate-300 mb-1.5">Subject <span class="text-slate-500">(optional)</span></label>
                        <input id="subject" name="subject" type="text" value="{{ old('subject') }}"
                               class="w-full rounded-xl bg-ink-900/60 border border-white/10 px-4 py-3 text-white placeholder-slate-500 focus:border-brand-400 focus:ring-2 focus:ring-brand-500/30 outline-none transition"
                               placeholder="Project inquiry / Job opportunity">
                        @error('subject') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-300 mb-1.5">Message</label>
                        <textarea id="message" name="message" rows="5" required
                                  class="w-full rounded-xl bg-ink-900/60 border border-white/10 px-4 py-3 text-white placeholder-slate-500 focus:border-brand-400 focus:ring-2 focus:ring-brand-500/30 outline-none transition resize-none"
                                  placeholder="Tell me about your project or role...">{{ old('message') }}</textarea>
                        @error('message') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit"
                            class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-gradient-to-r from-brand-600 to-brand-500 text-white font-semibold shadow-lg shadow-brand-600/30 hover:from-brand-500 hover:to-brand-400 transition">
                        Send Message
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
