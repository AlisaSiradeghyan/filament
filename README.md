# 🧪 Filament – Laravel 11

This project is a small Laravel 11 app. It uses **Filament 3** for the admin panel and includes a simple public-facing page styled with Tailwind CSS.

The goal was to manage two models — **CharacteristicCategory** and **Characteristic** — and display them both in the admin area and on a clean frontend page.

---

## 🛠 Tech Used

- Laravel 11
- Filament 3 (admin panel)
- Tailwind CSS (via Vite)
- SQLite (for simplicity)

---

## ✨ What It Does

### 🔐 Admin Panel (`/admin`)
- You can create, edit, and delete **categories**
- You can create, edit, and delete **characteristics**
- Each characteristic stores a small **JSON metadata object** with:
    - `description`
    - `type` (e.g. `boolean`, `integer`)

### 🌍 Public Page (`/characteristics`)
- Lists all categories and their characteristics
- Fully responsive using Tailwind CSS
- Shows type and description for each characteristic
- Simple “Admin Login” button at the top

---

## 🚀 Getting Started

### 1. Clone & install dependencies
    ```bash
    git clone https://github.com/yourusername/filament-task.git
    cd filament-task
    composer install
    npm install

### 2. Set Up the Database
Create an empty SQLite database file:
touch database/database.sqlite
Then update your .env file:
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

### 3. Run Migrations
php artisan migrate

### 4. Create an Admin User
php artisan make:filament-user
Use this account to log in at /admin

### 5. Compile Frontend Assets & Start the App
In one terminal:
    npm run dev

In another:
    php artisan serve

Then visit:

http://localhost:8000 - redirects to /characteristics

http://localhost:8000/admin - Filament admin panel
