# Multimotors

Custom WordPress Theme for used cars dealership based on [underscores](https://underscores.me/) starter theme.

## Refactor

Remove [foundation framework](http://foundation.zurb.com/) and replace it with [Susy](https://github.com/oddbird/susy) + [breakpoint sass](https://github.com/oddbird/susy) for layout. 

Use of [ITCSS](http://www.creativebloq.com/web-design/manage-large-css-projects-itcss-101517528) principles for scalable and maintanble CSS Architecture.

- Before: `app.css` 100 KB
- After: `app.css` 14KB

Responsive theme using:

- Gulp Sass
- Autoprefixer
- Sourcemaps
- Bourbon

## Translation ready

Created new language file for Spanish translation using [Poedit](https://poedit.net/).

## Forms

Using [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) I was able to collect user information (name, email and message) with the post title and page url when a user submit an inquiry about a car.