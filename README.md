===================================
Singular Theme Installation Notes
===================================

mmenu (v.7.3.3)
-----------------------------------
Based-on the documentation (https://mmenujs.com/documentation/) as of August 6, 2019, we are using mmenu Version 7 here due to Version 8 only supporting ES6 compliant browsers. This would not be fully supportive of IE 10 and 11. As much as I would like to stop considering those browsers, this theme is used for freelance development, so it's something I don't want to have to "fix" down the road. For documentation on mmenu Version 7, see http://mmenu.frebsite.nl.

Add Main Menu
-----------------------------------
Admin > Appearance > Menus
1) [ ] Menu Name: "Main Menu"
2) [ ] Add something to the menu tree so it appears correctly on the front-end


===================================
General Notes
===================================
1) The Settings > Reading blog listing is limited to 3 items for testing purposes. The custom WP_Query post limit must match this for the blog listing to display the desired number of items.


===================================
Plugin Installation Notes
===================================
1) [ ] Install "Classic Editor"
2) [ ] Install "Custom Post Type UI" (https://github.com/WebDevStudios/custom-post-type-ui/)
3) [ ] Install "Widget Context" (https://wordpress.org/plugins/widget-context/)
4) [ ] Install "Enhanced Media Library" (https://wordpress.org/plugins/enhanced-media-library/)
5) [ ] Install "Redirection" (https://wordpress.org/plugins/redirection/) -- Optional


===================================
Third-Party Plugin Notes
===================================
1) [ ] Install "Advanced Custom Fields PRO" via uploaded zip.
       [ ] Import the "Custom Title" ACF field group


===================================
CLIENT 1 REQUESTS
===================================
1) [ ] Install "WPS Hide Login" (https://wordpress.org/plugins/wps-hide-login/)
       [ ] Rename login page to /user
2) [ ] Install "WPS Limit Login" (https://wordpress.org/plugins/wps-limit-login/)
       [ ] Limit login attempts
3) [ ] Install "reCaptcha" (https://wordpress.org/plugins/google-captcha/)
       [ ] Add captcha to login and other forms
4) [ ] Remove 'root' user if necessary
5) [ ] Disable browser-based theme editing ability
