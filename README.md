## Powerhouse Theme for Wordpress
===
Do you like wordpress but hate coding like it's 2005? Then this might be for you.

- Browser sync
- ES6
- Bower
- SCSS
- Image optimisation
- On the fly image resizing

### Please note
----
This is a theme that reflects my current workflow, which evolves steadily over time. This should be used as the base for a theme and not something to base child themes off.

If you like the theme the way it is and would rather it doesn't spontaneously do something like switch out gulp for webpack or radio for react down the line, forking might be a good idea!

### Installation
----
1. cd wp-content/themes;
2. git clone https://github.com/Pixelbash/powerhouse.git;
3. cd powerhouse;
4. rm -rf .git
5. git init;
6. composer install; # To install php libraries
7. npm install;      # To install required npm packages for gulp
8. bower install;    # To include javascript libraries
9. nano config.js;   # settings for gulp
10. Set powerhouse as your theme
11. Enable the recommended plugins
12. gulp # to compile the dist folder for the first time

Note: gulp now minifies by default, set env var ENV="dev" to show full source


### Requirements
----
- Composer (php/wordpress dependency management)
- Bower    (js dependency management)
- Gulp     (Asset precompiling, >= 3.9.0)
- Git      (repository management)
- NPM      (installing deps for gulp)


### Recommended Wordpress plugins
----
- SEO by Yoast
- Total Cache
- Better WP Security


### 26/09/2016
----
- Gulp now minified JS/CSS *unless* an environment variable is set
- Page size diet. 
  - Init.js 103kb -> 24kb (compressed)
  - Plugins.js 584kb -> 63kb (compressed)
  - Remove Jquery dep from header.
  - Use lodash core
  - Use sizzle
  - Slim down es6/utils
  - Started removing jQuery deps from init.js

### 11/08/2016
----
- Redone example styling/templates
  - Header 
  - Home (slideshow) template/styling/javascript
  - Contact page template/styling/functionality
  - Archive page
  - Single post page
- Switched out underscore for lodash
- New responsive system for scss
- New body selector in scss
- Theme plugins are now installed using TGM-Plugin-Activation
- Timber now *works* on theme install
- Jquery included in html-header.twig with cdn
- Cleanup on unused scss
- Many more minor changes

### 19-11-2015
----
- Replaced less with scss
- Added ES6 base framework
- Added underscore js to bower
- Simpler font inclusion
- Replaced meta-box with acf
- Using gulp to compile assets
- Gulp browsersync functionality
- Tidied up php functions


### 17-11-2014
----
- Replaced git submodules with composer
- Updated readme.md
- Added screenshot and other details for style.css
- Added example code to demonstrate styling framework
- Numerous small fixes and tweaks


### 26-05-2014
----
- Replaced LESS structure with something more organised
- Moved JS libraries into separate sub folder
- Added social icons
- Added a paginated image gallery function
- Added an ajax example
- Added an example of featured image validation
- Added Page specific metaboxes
- Tweaked requireJS framework
- Tweaked default post settings


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
