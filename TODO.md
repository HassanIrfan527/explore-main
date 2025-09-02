1. For now, don't make the database structure much complex. But in future, to add the functionality for users to add "Other Social Media" profiles in their accounts, you have to use a separate table for true 1‑to‑many flexibility, with the following structure:
- id, user_id, platform_name, url/username, timestamps
2. A page where users (either authenticated or non-authenticated) can see all the authors which have been a part of my blogging platform, or have written at least 1 post. Just like this:![Image](public/images/image.png)
3.  Use Laravel Scout (with Algolia or Meilisearch driver for learning).
## Version 1 Tasks

### Pages to Create
- [x] Welcome Page
- [x] Blogs Page
- [x] "Write for us" page
- [x] About Page

### Welcome Page Components
- [x] Navbar (Logo, "Our Authors", "About", "Blogs", "Write for Us" button)
- [x] Hero Section (Content + "Start Reading" CTA)
- [x] Footer

### Blogs Page Components
- [x] Display all blogs (Title, Summary, Thumbnail)

### "Write for Us" Page Components
- [x] A static form
- [x] Footer and Header

### About Page Components
- [x] Simple About Page Content

### Testing
- [x] Add Pest tests

## Version 2 Tasks

### Pages to Create
- [ ] Single Post Page: Detailed view with full content, author info, and share buttons.


### Backend Tasks
- [ ] Role-based access for "reader" and "author". Make middlewares for that.
- [ ] Categories/Tags: Implement the categories/tags functionality.

### Frontend Tasks
- [ ] Add (Livewire + Alpine) Search functionality for Authors as well as Blogs page.
- [ ] Infinite Scroll on Blogs Page: Via Livewire's pagination.
- [ ] Authors Page Enhancements: Paginate authors, show post counts, link to profiles, send email icon.
- [ ] Add icons for other social media platforms too

### Performance
- [ ] Implement Redis' functionality (It doesn't have to be complex, just at least 1 simple Redis functionality)
- [ ] SEO: Add meta tags, sitemap via packages like spatie/laravel-sitemap.

### Testing
- [ ] Enhance existing tests
- [ ] Add new Pest tests for new functionalities
(Use `laravel/prompts` to enhance testing)
