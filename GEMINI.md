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
* **Configuration:** `.env`, and files within the `config/` directory.

## 6. Development & Testing Workflow

### Running Application Locally
The project uses Laravel Sail, a Docker-based development environment. The `docker-compose.yml` file defines the services used: `laravel.test` (the application container), `mysql`, and `redis`. To run the project locally, you have to use the `./vendor/bin/sail up` command.
* **Running Sail**: Use the command `./vendor/bin/sail up` to run the docker container locally.
* **Running Vite**: First, you have to go to `sail shell` and then apply `npm run dev` to run the vite server and bundle the assets. Also, don't ever try to run `npm run dev` without sail, as all the packages and dependencies for npm are inside my docker container.
* **Running Migrations and other commands related to artisan**: Always use `sail` instead of `php` when it comes to executing an `artisan` command. Such as, `sail artisan migrate`.
* **Testing:** Tests are run using Pest, a testing framework for PHP. The `composer.json` file includes a `test` script that runs the tests using `sail artisan test`. New code should be accompanied by corresponding unit or feature tests in the `tests/` directory.

## 7. Specific Instructions for AI Collaboration

* **Security:** Be mindful of security best practices. Do not hardcode secrets or keys. Sanitize user input to prevent XSS and SQL injection attacks.
* **Dependencies:** When adding a new dependency, use `composer require` for PHP packages and `npm install` for JavaScript packages.
* **Commit Messages:** Do not commit or stage changes ever on your own, unless the user orders himself. If user asks to commit a bunch of files, use the following rules: `Feature/Bug Fix/ (UI/Backend) Enhancement/Optimization: [A very short explanation of the code] -AI`. Make sure to follow this rule to commit and always make a new branch and then commit in that branch. Do not ever try to commit in the main branch.

### Project Documentation and Context

For further context and project's documentation, see the files inside the `docs/` directory.
I have put all my **next plans** for this project and my database structure in the docs folder. So, to find more context about this project, see the files in that folder.


## 8. Frontend Design Instructions

**Icons:** Always use Flux's Lucide icons. And to install a specific icon, run the following command:
`php artisan flux:icon ICON_NAME (According to Lucide's official icon names)`
**Components and Partials:** Always use reusable components or partials for the design. Like, if you have to mae a navbar, make the `nav-link` component or the `App-logo` component to use it again and again without having to hardcode.
**Flux:** Always use Flux's components in design.
Use Livewire + Blade + Flux icon + Flux components + Reusable components in the design of the website.
