# Database Structure and Models for Blogging Platform (Version 1)

## Database Tables

### 1. `users`
- **Fields**:
  - `id`: bigint unsigned, primary key, auto-increment
  - `name`: string
  - `email`: string, unique
  - `email_verified_at`: timestamp, nullable
  - `password`: string
  - `remember_token`: string, nullable
  - `is_author`: boolean, default false
  - `profile_pic`: string, nullable
  - `created_at`: timestamp, nullable
  - `updated_at`: timestamp, nullable

### 2. `authors`
- **Fields**:
  - `id`: bigint unsigned, primary key, auto-increment  
  - `user_id`: bigint unsigned, foreign key → `users(id)`, cascade on delete  
  - `author_bio`: string, nullable  
  - `username`: string, nullable  
  - `author_website`: string, nullable  
  - `author_facebook`: string, nullable  
  - `author_instagram`: string, nullable  
  - `author_linkedin`: string, nullable  
  - `author_youtube`: string, nullable  
  - `author_x`: string, nullable  
  - `author_telegram`: string, nullable  
  - `author_whatsapp`: string (length 20), nullable  
  - `author_discord`: string, nullable  
  - `created_at`: timestamp, nullable  
  - `updated_at`: timestamp, nullable  


### 3. `categories`
- **Fields**:
  - `id`: bigint unsigned, primary key, auto-increment
  - `name`: string
  - `created_at`: timestamp, nullable
  - `updated_at`: timestamp, nullable

### 4. `blogs`
- **Fields**:
  - `id`: bigint unsigned, primary key, auto-increment
  - `title`: string
  - `slug`: string, unique
  - `content`: text
  - `excerpt`: text, nullable
  - `published_at`: timestamp, nullable
  - `author_id`: bigint unsigned, foreign key references `users(id)`
  - `category_id`: bigint unsigned, foreign key references `categories(id)`
  - `created_at`: timestamp, nullable
  - `updated_at`: timestamp, nullable

## Laravel Models

### `User.php`
- **Relationships**:
  - `hasMany(Blog::class, 'author_id')`
  - `hasMany(Comment::class)`
- **Notes**: Extend Laravel’s default `Authenticatable` model.

### `Category.php`
- **Relationships**:
  - `hasMany(Blog::class)`
- **Notes**: Simple model for blog organization.

### `Blog.php`
- **Relationships**:
  - `belongsTo(User::class, 'author_id')`
  - `belongsTo(Category::class)`
  - `hasMany(Comment::class)`
- **Notes**: Core model for blog posts.
