# Multimotors

## Plugins

- Custom Post Type UI
- Meta box Api Key: f66eceba2972bfe6775e5afbbe54ba8a
- Search and Filter [link](https://www.designsandcode.com/wordpress-plugins/search-filter/) Documentation [link](https://www.designsandcode.com/documentation/search-filter-pro/getting-started/display-search-form/)

## Custom Post Types

### Post types

- Autos Usados
- Autos Clásicos
- Motos

Each CPT have *the title* and *featured image* enabled.

### Post taxonomies

- marca
- marcasclasicos
- marcasmotos

### Meta boxes

- Marca
- Color
- Modelo
- Kilometraje
- Año
- Vendido
- Información
- Galeria de fotos

### External services

- Facebook Like Box
- Google Analytics

### Search and Filter

- Created 3 search forms
- Each one use a different taxonomy for brand (marca, marcasclasicos, marcasmotos)
- `results.php` is used to customize the search results and used a conditional to change the taxonomy depending on the page
- Use `get_the_terms()` function to display the taxonomy as a text

### Single page

- Use `get_the_terms()` function to display the taxonomy as a text
- Use a conditional to show/hide the *is sold* label
- Use a conditional to show/hide the form when the car *is sold* or not

## TO DO

- ~~Add slick slider for carousels~~
- ~~Customize css for carousel~~
- Fix image attachments for galleries
- Populate marcas, marcasclasicos, marcasmotos taxonomy
- Create new documentation for client
- Remove unused files and templates
- Add back-end buttons in the front-end
- Add lightbox to single gallery
- Migrate CSS to Susy and ITCSS
- Adminimize Editor
- Add vendidos taxonomy (?)

## TO DO Live Site

- Edit `wp-config.php` language settings, file editor and debug / error log.
- Remove security plugin
- Add `Better Search and replace` plugin
- Move files and folders
- Edit site url in `wp-config.php`
- Update database
- Add new security plugins, update .htaccess and review file permissions
- Change theme
- Deactivate old plugins
- Add and setup new plugins
- Add marcas
- Add Search Forms
- Select page template for pages
- Removed old pages
- Review form and plugins, wp smtp and contact form db
- Fix Menu Contacto Footer
- Customize admin area