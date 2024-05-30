===================================
GitHub Repository
===================================

https://github.com/darkglobeinteractive/singular-theme


===================================
Singular Theme Installation Notes
===================================

# mmenu (v.9.3)

mmenu is used to handle the mobile menus in this theme. Documentation can be found here:
https://mmenujs.com/


# Add Main Menu

Admin > Appearance > Menus

1. [ ] Menu Name: "Main Menu"
2. [ ] Add something to the menu tree so it appears correctly on the front-end


# Create Pages / Modify Templates

1. [ ] Create search form page and update template file to reflect page ID
2. [ ] If you're not using Yoast SEO, create the sitemap page and update template file to reflect page ID
       [ ] If you ARE using Yoast SEO, delete the sitemap page template 
2. [ ] Create home page and use customizer to set this page to the front page
3. [ ] Delete existing widgets


# Login Page Customizations

1. [ ] Update the image located at /singular-theme/img/login-logo.png
2. [ ] Modify the styles at /singular-theme/css/login.css


# General Notes

1. The Settings > Reading blog listing is limited to 3 items for testing purposes. The custom WP_Query post limit must match this for the blog listing to display the desired number of items.
2. [ ] Disable admin-based Theme Editor (Appearance > Theme Editor)
       [ ] In wp-config.php file == define('DISALLOW_FILE_EDIT', true);
3. [ ] Double-check that commenting is completely turned-off


# Fixed Header Notes

1. The "Smooth Scrolling" functionality in the /js/global.js file contains a header_height variable. If a fixed header is used on the site, you'll want to change this from "0" to "$('#header').innerHeight()" and possibly adjust the scroll_top_padding variable as well.


# Custom Block Patterns

To enable custom block patterns:

1. [ ] Uncomment the following line:
       [ ] include( 'block-patterns/block-patterns.php' );


# GreenSock Animation Support

GreenSock is the animation library we'd like to focus on using:
https://greensock.com/docs/

To enable basic GreenSock animation:

1. [ ] Uncomment the following enqueued styles:
       [ ] wp_enqueue_style( 'animation-css', ... );
2. [ ] Uncomment the enqueued scripts in the if ( !is_admin() ) block:
       [ ] wp_enqueue_script( 'gsap_js', ... );
       [ ] wp_enqueue_script( 'gsap_scrolltrigger_js', ... );
       [ ] wp_enqueue_script( 'animations_js', ... );


# Required Plugin Installation Notes

Advanced Custom Fields PRO is required by this theme.

1. [ ] Install "Advanced Custom Fields PRO" and import the following JSON field into ACF PRO:
       [ ] /singular-theme/_configuration/acf-theme-fields.json
2. [ ] Install "Filebird" (https://wordpress.org/plugins/filebird/)


# Optional Plugin Installation Notes

1. [ ] Install "Redirection" (https://wordpress.org/plugins/redirection/): Useful for SEO and setting 301 redirects
2. [ ] Install "Widget Context" (https://wordpress.org/plugins/widget-context/): Allows you to decided where widgets are visible/hidden


# CLIENT 1 REQUESTS

1. [ ] Install "WPS Limit Login" (https://wordpress.org/plugins/wps-limit-login/)
       [ ] Limit login attempts
2. [ ] Install "Yoast SEO" (https://wordpress.org/plugins/wordpress-seo/)
       [ ] Change the default separator to a pipe so it matches the header.php title separator -or- change the header.php title separator to a hyphen
       [ ] Add site name and image to the Yoast SEO admin
       [ ] Remove sitemap page and template file if using Yoast SEO
3. [ ] Install "ACF Content Analysis for Yoast SEO" (https://wordpress.org/plugins/acf-content-analysis-for-yoast-seo/)
4. [ ] Install "Redirection" (https://wordpress.org/plugins/redirection/)
       [ ] Add redirect from /user to /wp-admin
5. [ ] Install "Wordfence"
       [ ] Send license information to hello@[clientaddress]


===================================
Singular Plugin Installation Notes
===================================

The Singular Plugin is included in the repository. It provides content-based functionality to the site.


# Installation

Advanced Custom Fields PRO (ACF PRO) is a requirement for this plugin's functionality to work. Install and activate the Singular Plugin, then install, activate and update ACF PRO.

1. [ ] After installing and activating ACF PRO, import the following JSON files into ACF PRO:
       [ ] /singular-plugin/_configuration/acf-singular-plugin-fields.json
2. [ ] Ensure that the "Singular Plugin: Accordion Block" field group has "Show this field group if: Block is equal to Accordion"


# Custom Gutenberg Blocks

The plugin adds a new Gutenberg block category titled "Singular Blocks" which contains the following custom blocks.

1. Accordion: Produces an animated accordion block composed of titles and WYSIWYG content blocks.


===================================
Available Libraries
===================================

There are a handful of libraries included in the theme directory in the /libs/ directory.

# Accessible Slick v.1.0.1
Git Location: https://github.com/Accessible360/accessible-slick.git
Website: https://accessible360.github.io/accessible-slick/
Notes: This is the accessible version of the slider we've been using for years.

# Colorbox v.1.6.4
Git Location: https://github.com/jackmoore/colorbox
Website: https://www.jacklmoore.com/colorbox/
Notes: We should begin phasing-out the use of this plugin because it's not maintained anymore and isn't 100% accessible.

# Modaal v.0.4.4
Git Location: https://github.com/humaan/Modaal
Notes: We're beginning to try-out this modal library because it's proven to be simpler to use and passes accessibility scans. The /libs/modaal/index.html demos are better than the github information.

