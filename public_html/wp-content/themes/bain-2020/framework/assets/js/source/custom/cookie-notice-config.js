jQuery(document).ready(function ($) {
  window.addEventListener("load", function () {
    window.cookieconsent.initialise({
      palette: {
        popup: {
          background: "#000000",
          text: "#ffffff",
        },
        button: {
          background: "#ffffff",
          text: "#000000",
        },
      },
      position: "bottom-right",
      content: {
        dismiss: "OK",
        // message: cookie_message,
        // dismiss: dismiss,
        // link: link_label,
        // href: href
      },
    });
  });
});
