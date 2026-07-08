import './bootstrap';

// ---- Mobile navigation toggle ----
const navToggle = document.querySelector('[data-nav-toggle]');
const navMenu = document.querySelector('[data-nav-menu]');

if (navToggle && navMenu) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
    });

    navMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                navMenu.classList.add('hidden');
            }
        });
    });
}

// ---- Navbar background on scroll ----
const header = document.querySelector('[data-header]');
if (header) {
    const onScroll = () => {
        if (window.scrollY > 20) {
            header.classList.add('bg-ink-900/90', 'backdrop-blur', 'border-white/10', 'shadow-lg');
            header.classList.remove('border-transparent');
        } else {
            header.classList.remove('bg-ink-900/90', 'backdrop-blur', 'border-white/10', 'shadow-lg');
            header.classList.add('border-transparent');
        }
    };
    window.addEventListener('scroll', onScroll);
    onScroll();
}

// ---- Reveal on scroll ----
const revealEls = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window && revealEls.length) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12 }
    );
    revealEls.forEach((el) => observer.observe(el));
} else {
    revealEls.forEach((el) => el.classList.add('is-visible'));
}

// ---- Active section highlight in nav ----
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('[data-nav-link]');
if ('IntersectionObserver' in window && sections.length) {
    const spy = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach((link) => {
                        const active = link.getAttribute('href') === `#${id}`;
                        link.classList.toggle('text-white', active);
                        link.classList.toggle('text-slate-400', !active);
                    });
                }
            });
        },
        { rootMargin: '-45% 0px -50% 0px' }
    );
    sections.forEach((s) => spy.observe(s));
}
