===================================
Bitbucket Repository
===================================

https://bitbucket.org/0degreesk/wordpress-starter/

===================================
Singular Theme Installation Notes
===================================

# mmenu (v.7.3.3)

Based-on the documentation (https://mmenujs.com/documentation/) as of August 6, 2019, we are using mmenu Version 7 here due to Version 8 only supporting ES6 compliant browsers. This would not be fully supportive of IE 10 and 11. As much as I would like to stop considering those browsers, this theme is used for freelance development, so it's something I don't want to have to "fix" down the road. For documentation on mmenu Version 7, see http://mmenu.frebsite.nl.


# Add Main Menu

Admin > Appearance > Menus

1. [ ] Menu Name: "Main Menu"
2. [ ] Add something to the menu tree so it appears correctly on the front-end


# Create Pages / Modify Templates

1. [ ] Create sitemap page and update template file to reflect page ID
2. [ ] Create search form page and update template file to reflect page ID


# Login Page Customizations

1. [ ] Update the image located at /singular-theme/img/login-logo.png
2. [ ] Modify the styles at /singular-theme/css/login.css


# General Notes

1. The Settings > Reading blog listing is limited to 3 items for testing purposes. The custom WP_Query post limit must match this for the blog listing to display the desired number of items.
2. [ ] Disable admin-based Theme Editor (Appearance > Theme Editor)
  - [ ] In wp-config.php file == define('DISALLOW_FILE_EDIT', true);


# Required Plugin Installation Notes

1. [ ] Install "Custom Post Type UI" (https://github.com/WebDevStudios/custom-post-type-ui/)
2. [ ] Install "Advanced Custom Fields PRO" via uploaded zip
  - Import the "Custom Title" ACF field group
2. [ ] Install "Filebird" (https://wordpress.org/plugins/filebird/)


# Optional Plugin Installation Notes

1. [ ] Install "Redirection" (https://wordpress.org/plugins/redirection/): Useful for SEO and
2. [ ] Install "Widget Context" (https://wordpress.org/plugins/widget-context/): Allows you to decided where widgets are visible/hidden


# CLIENT 1 REQUESTS

1. [ ] Install "WPS Hide Login" (https://wordpress.org/plugins/wps-hide-login/)
  - [ ] Rename login page to /user
2. [ ] Install "WPS Limit Login" (https://wordpress.org/plugins/wps-limit-login/)
  - [ ] Limit login attempts
3. [ ] Install "reCaptcha" (https://wordpress.org/plugins/google-captcha/)
  - [ ] Add captcha to login and other forms
4. [ ] Install "Yoast SEO" (https://wordpress.org/plugins/wordpress-seo/)
  - [ ] Change the default separator to a pipe so it matches the header.php title separator -or- change the header.php title separator to a hyphen
  - [ ] Add site name and image to the Yoast SEO admin
5. [ ] Install "ACF Content Analysis for Yoast SEO" (https://wordpress.org/plugins/acf-content-analysis-for-yoast-seo/)
6. [ ] Remove 'root' user if necessary
