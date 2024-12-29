# Laravel API Project

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About My Project

I've created this Laravel API project as part of a coding challenge. It implements three main features:
- A Blog Post management system
- User registration functionality
- A Task management system

## Installation

I've made the setup process straightforward. Here's how you can get this project running:

1. First, clone my repository:
```bash
git clone <repository-url>
cd <project-directory>
```

2. Install the PHP dependencies:
```bash
composer install
```

3. Set up your environment file:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure your database connection in the `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=""
DB_USERNAME=""
DB_PASSWORD=""
```

5. Run my database migrations:
```bash
php artisan migrate
```

6. Start the local development server:
```bash
php artisan serve
```

## API Documentation

I've implemented the following endpoints:

### Blog Posts
- Create a new blog post:
  ```
  POST /api/posts
  {
    "title": "My First Post",
    "content": "This is my content."
  }
  ```
- Get all posts: `GET /api/posts`
- Get a specific post: `GET /api/posts/{id}`

### User Registration
- Register a new user:
  ```
  POST /api/register
  {
    "name": "Jane Doe",
    "email": "jane@example.com",
    "password": "password123"
  }
  ```

### Task Management
- Create a new task:
  ```
  POST /api/tasks
  {
    "title": "Finish Laravel test"
  }
  ```
- Mark a task as completed:
  ```
  PATCH /api/tasks/{id}
  {
    "is_completed": true
  }
  ```
- Get all pending tasks: `GET /api/tasks/pending`

## Project Structure

I've organized the code following Laravel best practices:

```
app/
├── Http/
│   └── Controllers/
│       └── API/
│           ├── PostController.php
│           ├── TaskController.php
│           └── UserController.php
├── Models/
│   ├── Post.php
│   ├── Task.php
│   └── User.php
database/
└── migrations/
    ├── 2024_12_29_000001_create_posts_table.php
    ├── 2024_12_29_000002_create_users_table.php
    └── 2024_12_29_000003_create_tasks_table.php
```

## Testing the APIs

I recommend using Postman or curl to test the APIs. Remember to set these headers:
```
Accept: application/json
Content-Type: application/json
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
