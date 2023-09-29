const keySequenceListener = (keySequence, callback) => {
  let keys = "";

  return (e) => {
    keys += e.key;
    if (keys === keySequence) {
      callback();
      keys = "";
    } else if (!keySequence.startsWith(keys)) {
      keys = "";
    }
  };
};

const listener = keySequenceListener("EscapeEscape", () => {
  if (document.querySelector("#wpadminbar")) {
    document.querySelector("#wp-admin-bar-logout").firstChild.click();
  } else {
    window.open("/wp-login.php?redirect_to=" + window.location.href, "_self");
  }
});

document.addEventListener("keyup", listener);
