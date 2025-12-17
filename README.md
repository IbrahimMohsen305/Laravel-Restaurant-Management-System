# 🍽️ Laravel Restaurant Management System

A Laravel web application for managing a restaurant: a public-facing website for customers and an admin dashboard for staff to manage categories and meals.

---

## Features

- Public website to browse meals with images, descriptions, and prices
- Filter meals by category
- Responsive UI using Bootstrap 5
- Admin dashboard (Laravel Breeze) to manage categories and meals
- Meal attributes: name, description, price, category, image upload
- Protected admin routes and flash notifications

---

## Installation

1. Clone the repository:

```bash
git clone https://github.com/yourusername/restaurant.git
cd restaurant
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install Node dependencies and build assets:

```bash
npm install
npm run dev
```

4. Copy and configure environment:

```bash
cp .env.example .env
# Edit .env and set DB_* values, then:
php artisan key:generate
```

Example DB settings in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=restaurant
DB_USERNAME=root
DB_PASSWORD=
```

5. Run migrations and link storage:

```bash
php artisan migrate
php artisan storage:link
```

6. Start the local server:

```bash
php artisan serve
```

Visit http://localhost:8000

---

## Usage

- Admin access: register a new user or use an admin account.
- Dashboard: http://localhost:8000/dashboard
- Manage categories at the Categories section.
- Manage meals at the Meals section (upload images stored at `storage/app/public/meals`).

---

## Technologies

- Backend: Laravel 12, PHP 8+
- Frontend: Blade + Bootstrap 5
- Auth: Laravel Breeze
- Database: MySQL
- Asset tooling: Vite + npm

---

## Project Structure (key files)

- `app/Http/Controllers/` — controllers such as `HomeController`, `CategoryController`, `MealController`
- `database/migrations/` — table definitions
- `resources/views/` — Blade templates (home, dashboard, categories, meals)
- `routes/web.php` — web routes

---

## Notes

- Ensure MySQL is running and the `restaurant` database exists before running migrations.
- If `npm install` fails, try disabling antivirus or running with elevated privileges.

---

## License

This project is open-source and free to use for learning purposes.