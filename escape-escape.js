Mousetrap.bind("escape escape", function () {
    if (document.querySelector("#wpadminbar")) {
      document.querySelector("#wp-admin-bar-logout").firstChild.click();
    } else {
      window.open(
        window.location.origin +
          "/wp-login.php?redirect_to=" +
          window.location.href,
        "_self"
      );
    }
    return false;
  });
  