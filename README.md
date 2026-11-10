# Abeer Al-Baqi — Personal Portfolio

A personal portfolio built with Laravel, PHP, MySQL, HTML, CSS, and JavaScript.

## Features
- Responsive personal portfolio
- Projects showcase
- Personal journal
- Skills section
- Contact form with Telegram integration
- Admin dashboard with authentication
- Project and journal CRUD management

## Tech Stack
- Laravel 13
- PHP 8.4
- MySQL
- HTML, CSS, JavaScript
- Tailwind CSS
- GSAP

## Local Setup

1. Clone the repository.
2. Install PHP dependencies:

   composer install

3. Install JavaScript dependencies:

   npm install

4. Copy `.env.example` to `.env` and configure your database.

5. Generate the application key:

   php artisan key:generate

6. Run migrations:

   php artisan migrate --seed

7. Start the Laravel server:

   php artisan serve