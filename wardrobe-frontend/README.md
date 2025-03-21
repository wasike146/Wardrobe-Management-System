# Wardrobe Management System

The Wardrobe Management System is a web application built with Vue 3 (frontend) and Laravel 11 (backend). It allows users to manage their clothing items, categorize them, and filter/search through their wardrobe. The system also includes user authentication (login/registration) and a responsive, user-friendly interface.

![Wardrobe Management System](images/wardrobe_system.png)

## Features

### User Authentication:
- Login and registration functionality.
- Token-based authentication using Laravel Sanctum.

### Clothing Item Management:
- Add, edit, and delete clothing items.
- Categorize items (e.g., tops, bottoms, shoes).

### Filter and Search:
- Filter clothing items by category.
- Search for specific items by name or description.

## Setup Instructions

### Backend

1. Navigate to the backend directory:
   ```sh
   cd backend
   ```

2. Install the dependencies:
   ```sh
   composer install
   ```

3. Copy the environment file and generate the application key:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. Set up your database in the `.env` file.

5. Run the database migrations:
   ```sh
   php artisan migrate
   ```

6. Start the Laravel development server:
   ```sh
   php artisan serve
   ```

### Frontend

1. Navigate to the frontend directory:
   ```sh
   cd frontend
   ```

2. Install the dependencies:
   ```sh
   npm install
   ```

3. Start the Vue development server:
   ```sh
   npm run serve
   ```

## Usage

- Open your browser and navigate to [http://localhost:8080](http://localhost:8080) for the frontend.
- Use [http://localhost:8000](http://localhost:8000) for the backend API.

![Frontend Screenshot](images/login_register.png)
![Frontend Screenshot](images/login_page.png)
![Frontend Screenshot](images/register_page.png)
