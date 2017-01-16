# Multimotors

Custom WordPress Theme for used cars dealership based on [underscores](https://underscores.me/) starter theme.

## Refactor

Remove [foundation framework](http://foundation.zurb.com/) and replace it with [Susy](https://github.com/oddbird/susy) + [breakpoint sass](https://github.com/at-import/breakpoint) for layout. 

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

## Custom Post Types

With the [CPT UI](https://wordpress.org/plugins/custom-post-type-ui/) plugin I was able to create different custom post types for used cars, classic cars and motorcycles. And I was able to create custom taxonomies for the brands of the cars and motorcycles.

With the [Meta Box](https://wordpress.org/plugins/meta-box/) plugin I was able to create all the necessary meta box to add custom information about model, color, year, mileage and adding pictures for the gallery.

Using [Admin Columns](https://wordpress.org/plugins/codepress-admin-columns/) I was able to add custom columns in the admin area for each custom post type to have a better overview of the cars information.

To display and filter the cars and motorcycles list I use the paid version of [Search and replace pro](https://www.designsandcode.com/wordpress-plugins/search-filter-pro/) plugin and the free plugin [WP-PageNavi](https://wordpress.org/plugins/wp-pagenavi/) for the pagination.

## Tweaks

- [Contact Form 7](http://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/) loading javascript and stylesheet only when it is necessary.
- Remove emoji code from `<head>` section.
- Replace WordPress jQuery with external library hosted in Google.
- Security tweaks using techniques from  Lynda.com [WordPress: Developing Secure Sites](https://www.lynda.com/WordPress-tutorials/WordPress-Developing-Secure-Sites-2016-Q4-REVISION/504072-2.html).
