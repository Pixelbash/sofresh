## Powerhouse Theme for Wordpress
===
Powerhouse is a killer theme for creating websites like a demon with a minimum of fuss.

Some standout features:
- Twig Templating courtesy of Timber
- SimpleImage (GD) based image resizer with image caching
- Automagic php library management using git submodules
- Automagic Bower Javascript library management
- RequireJS scripting framework
- All theme options as json in header (for use with scripts)
- Powerful Less framework with a fully customisable grid system
- Automatic less->css compilation and caching
- Powerful custom post type generator
- Powerful custom metabox generator
- Custom pagination generator (optional)
- Grid system shortcodes (optional)
- Post view count functions (optional)


### Todo
----
- Automatically include bower scripts with RequireJS


### Installation
----
1. Download into wp-content/themes folder
2. Run bower install to include the latest javascript libraries
3. Set as your theme in wordpress
4. Get to it


### Requirements
----
- Timber Wordpress Plugin (theming)
- Bower (installing js libraries)
- Git   (optional)


### Recommended Wordpress plugins
----
- SEO by Yoast
- Total Cache
- Better WP Security


### 21-01-2014
----
- Use bower to manage javascript libraries
- RequireJS for javascript modularity
- Use Timber for Twig themes
- Added sub-libraries as git submodules for easy version management
- Uses wp-less framework
- Changed name to powerhouse

	
### 17-09-13
----
- Added: Theme now uses less.js for simpler development
- Added: Nice pagination function
- Updated: Switched out options framework
- Updated: Moved little used /php/ files into their own folder
- Updated: Tidied up header.php
- Updated: Tidied up scripts.php
- Removed: Leftover icons
- Removed: Javascripts, they should be updated on load anyway
- Removed: Bootstrap
- Removed: Compiled style.css