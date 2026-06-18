# SalonOS Enterprise Marketing Website

A Laravel 12 + React + Tailwind marketing website for a B2B salon management SaaS platform positioned as the complete operating system for modern salon businesses.

## Includes

- Dynamic database-backed marketing pages for Home, Features, Pricing, Enterprise, Franchise Management, Mobile Apps, Integrations, Customers, Case Studies, Blog, About Us, Contact Us, Help Center, and FAQ.
- SEO metadata, OpenGraph, Twitter Cards, and SoftwareApplication structured data.
- Premium enterprise SaaS UI with sticky navigation, hero dashboard mockup, feature cards, role solutions, product gallery, pricing, FAQs, exit-intent popup, newsletter capture, and live chat CTA.
- Migrations and seeders for marketing content and lead capture storage.

## Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
npm run build
php artisan serve
```
