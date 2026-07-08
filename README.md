# Asha Kumari Meghwal — Developer Portfolio

A modern, fully responsive **developer portfolio website** built with **Laravel 12**, **Blade**, and **Tailwind CSS 4** — showcasing my work as a **Laravel Backend Developer** with 3+ years of experience building scalable web applications, REST APIs, AI integrations, and payment systems.

> **Laravel Backend Developer · PHP · REST APIs · MySQL** — Kota, Rajasthan, India

---

## Highlights

- **Single-page portfolio** with Hero, About, Skills, Projects, Live Work, and a working Contact form
- **Config-driven content** — all portfolio data lives in [`config/portfolio.php`](config/portfolio.php), so content updates never touch the views
- **Server-side contact form** with validation (Laravel FormRequest-style validation + CSRF protection)
- **Clean, component-based Blade** structure using partials
- **Modern UI** — dark theme, gradient accents, scroll animations, mobile navigation, and SEO meta tags
- **Production-ready asset pipeline** with Vite

---

## Tech Stack

| Layer        | Technologies                                              |
|--------------|-----------------------------------------------------------|
| Backend      | PHP 8.2, Laravel 12, MVC, Routing, Validation             |
| Frontend     | Blade, Tailwind CSS 4, Vanilla JS (IntersectionObserver)  |
| Build Tools  | Vite, npm                                                 |
| Tooling      | Composer, Git                                             |

---

## Project Structure

```
config/portfolio.php                     # All portfolio content (single source of truth)
app/Http/Controllers/PortfolioController  # Home page + contact form handling
routes/web.php                            # Routes (home, contact)
resources/views/
├── layouts/app.blade.php                 # Base layout (SEO, fonts, Vite)
├── portfolio/index.blade.php             # Page assembly
└── partials/                             # nav, hero, about, skills, projects, work, contact, footer, icon
resources/css/app.css                     # Tailwind theme + custom utilities
resources/js/app.js                       # Mobile menu, scroll reveal, active-nav highlighting
```

---

## Getting Started

### Requirements
- PHP >= 8.2
- Composer
- Node.js >= 18 & npm

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/meghwalasha123/my-portfolio.git
cd my-portfolio

# 2. Install PHP dependencies
composer install

# 3. Environment setup
cp .env.example .env
php artisan key:generate

# 4. Install & build front-end assets
npm install
npm run build

# 5. Run the application
php artisan serve
```

Then open **http://127.0.0.1:8000** in your browser.

For local development with hot-reloading assets:

```bash
composer run dev
```

---

## Customizing Content

All content (name, contact details, skills, projects, live sites, education) is stored in a single file:

```
config/portfolio.php
```

Update the arrays there and the entire site updates automatically — no need to edit any Blade views.

---

## Contact

- **Email:** akmeghwal.cool@gmail.com
- **Location:** Kota, Rajasthan, India
- **GitHub:** [@meghwalasha123](https://github.com/meghwalasha123)

---

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).
