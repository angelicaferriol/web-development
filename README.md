# Laravel Web Development Portfolio & Playground

A web application showcasing core Laravel features, database relationships, CRUD workflows, layout templating, and modern asset integration. This project is built using Laravel 12 and Bootstrap 5.

---

## Key Features

*   **User Management (CRUD)**
    *   **Create**: Form validation, customized error messages, password hashing, and logging.
    *   **Read**: View registered users with a left-join query displaying user roles (Admin, Manager, Regular User).
    *   **Update**: Edit existing user attributes, emails, and types.
*   **Post Management**
    *   **Creation & List**: Create posts associated with status types and list them with status badges.
    *   **Edit**: Modify title, description, and status of existing posts.
*   **Calculation Engine**
    *   Compute route `/compute/{num1}/{num2}` providing automated mathematical operations.
*   **Interactive Pricing Page**
    *   A Bootstrap-styled user interface displaying features and billing options.
*   **Routing & Flow**
    *   Uses route grouping, named routes, fallback handling (custom page for missing links), and Blade layouts.

---

## Tech Stack & Dependencies

*   **Backend**: PHP 8.2+, Laravel 12.x, Laravel UI
*   **Database**: SQLite (default setup configuration)
*   **Frontend**: Vite 7.x, Tailwind CSS v4, Bootstrap 5, Sass, Bootstrap Icons
*   **Process Manager**: `concurrently` (runs Vite and PHP Artisan server in parallel)

---

## Setup & Installation

Follow these steps to set up the project locally:

### 1. Prerequisites
Ensure you have the following installed on your machine:
*   [PHP 8.2 or higher](https://www.php.net/downloads.php)
*   [Composer](https://getcomposer.org/)
*   [Node.js & npm](https://nodejs.org/)

### 2. Quick Setup
Run the pre-configured setup command in your terminal. This will install dependencies, generate application keys, run migrations, and build initial assets:
```bash
composer run setup
```

*Alternatively, manually execute the following commands:*
```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
npm install
npm run build
```

---

## Running the Application

To start the development server, asset bundler (Vite), queue listener, and log watcher in a single command, run:

```bash
composer run dev
```
---

## Testing

To run automated PHPUnit tests:
```bash
composer run test
```
