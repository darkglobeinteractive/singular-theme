jQuery(document).ready(function($) {

  // https://www.w3schools.com/js/js_cookies.asp
  function setCookie(cname, cvalue, exhours = false) {

    // Default is no specified expiration date (the cookie is session-based)
    var expires = '';

    // If an expiration duration (in hours) has been set, create an expiration date
    if (exhours) {
      var d = new Date();
      // NOW + (Milliseconds * seconds * minutes * hours)
      d.setTime(d.getTime() + (1000 * 60 * 60 * exhours));
      expires = "expires=" + d.toUTCString() + ";";      
    }

    // Create the cookie
    document.cookie = cname + "=" + cvalue + ";" + expires + "path=/";

  }

  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    console.log(ca);
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return '';
  }

  function checkCookie(cname) {
    var cookiename = getCookie(cname);
    if (cookiename != "") {
      return true;
    } else {
      return false;
    }
  }

  $('#cookie-consent').each(function() {

    var $cpc = $(this);
    var $cpc_btn = $('button.btn', $cpc);

    if (checkCookie('cookie-consent-policy-accept')) {
      $('body').removeClass('show-cookie-consent');
    } else {
      $('body').addClass('show-cookie-consent');
    }

    $cpc_btn.on('click', function() {
      setCookie('cookie-consent-policy-accept', 'true', false);
      $('body').removeClass('show-cookie-consent');
    });

  });


});