# GEMINI.MD: AI Collaboration Guide

This document provides essential context for AI models interacting with this project. Adhering to these guidelines will ensure consistency and maintain code quality.

## 1. Project Overview & Purpose

* **Primary Goal:** This project is a web application built with the Laravel framework. It is a blogging platform or a publishing system, where users can read other's blogs and can also write their own blogs. And they can grow their auience by doing so. This platform is similar to **Medium**
* **Business Domain:** Content Management, Publishing, or Blogging.

## 2. Core Technologies & Stack

* **Languages:** PHP 8.4.8
* **Frameworks & Runtimes:** Laravel 12, Livewire 3, Node.js (for frontend asset bundling)
* **Databases:** MySQL (as per `docker-compose.yml`). Redis is also used for caching.
* **Key Libraries/Dependencies:**
    * **Backend:** `livewire/volt`, `livewire/flux`, `barryvdh/laravel-debugbar`
    * **Frontend:** `alpinejs`, `axios`, `tailwindcss`, `vite`
* **Package Manager(s):** Composer for PHP, npm for JavaScript.

## 3. Architectural Patterns

* **Overall Architecture:** Model-View-Controller (MVC), which is the standard for Laravel applications. The use of Livewire components indicates a shift towards a more component-based architecture for the frontend, reducing the need for a separate JavaScript framework like Vue or React.
* **Directory Structure Philosophy:** The project follows the standard Laravel directory structure:
    * `app/`: Contains the core application code, including Models, Controllers, and Livewire components.
    * `config/`: Holds application configuration files.
    * `database/`: Contains database migrations, seeders, and factories.
    * `public/`: The web server's document root and the application's entry point.
    * `resources/`: Contains frontend assets (CSS, JS) and Blade templates (views).
    * `routes/`: Defines the application's routes.
    * `storage/`: For compiled Blade templates, file-based sessions, file caches, and logs.
    * `tests/`: Contains all unit and feature tests.
    * `vendor/`: Composer dependencies.
    * `node_modules/`: npm dependencies.

## 4. Coding Conventions & Style Guide

* **Formatting:** Follows Laravel's default coding style, which is based on PSR-2 and PSR-12. The presence of `laravel/pint` in `composer.json` suggests that code formatting is automated.
* **Naming Conventions:**
    * `variables`, `functions`: camelCase (`myVariable`)
    * `classes`, `components`: PascalCase (`MyClass`)
    * `files`: kebab-case for views and assets (e.g., `authors.blade.php`), and PascalCase for PHP classes (e.g., `AuthorsData.php`).
* **API Design:** While not explicitly a REST API, the application follows RESTful principles for its web routes.
* **Error Handling:** Uses Laravel's default error handling mechanisms.

## 5. Key Files & Entrypoints

* **Main Entrypoint(s):** `public/index.php` for web requests, and `artisan` for command-line tasks.
* **Configuration:** `.env` (not present, but `.env.example` is), and files within the `config/` directory.
* **CI/CD Pipeline:** There is no CI/CD pipeline configuration file present in the project.

## 6. Development & Testing Workflow

* **Local Development Environment:** The project uses Laravel Sail, a Docker-based development environment. The `docker-compose.yml` file defines the services used: `laravel.test` (the application container), `mysql`, and `redis`. To run the project locally, one would typically use the `./vendor/bin/sail up` command. The `composer.json` also includes a `dev` script that runs the server, queue, logs, and vite using `concurrently`.
* **Testing:** Tests are run using Pest, a testing framework for PHP. The `composer.json` file includes a `test` script that runs the tests using `php artisan test`. New code should be accompanied by corresponding unit or feature tests in the `tests/` directory.
* **CI/CD Process:** Not defined.

## 7. Specific Instructions for AI Collaboration

* **Contribution Guidelines:** There is no `CONTRIBUTING.md` file.
* **Infrastructure (IaC):** There is no Infrastructure as Code directory.
* **Security:** Be mindful of security best practices. Do not hardcode secrets or keys. Sanitize user input to prevent XSS and SQL injection attacks.
* **Dependencies:** When adding a new dependency, use `composer require` for PHP packages and `npm install` for JavaScript packages.
* **Commit Messages:** Do not commit or stage changes ever on your own, unless the user orders himself. If user asks to commit a bunch of files, use the following rules: `Feature/Bug Fix/ (UI/Backend) Enhancement/Optimization: [A very brief explanation of the code] -AI`. Make sure to follow this rule to commit and always make a new branch and then commit in that branch. Do not ever try to commit in the main branch.
