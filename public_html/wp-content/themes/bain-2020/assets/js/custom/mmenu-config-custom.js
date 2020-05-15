// See:
// https://mmenujs.com/docs/core/options.html
// https://mmenujs.com/docs/core/configuration.html

document.addEventListener("DOMContentLoaded", () => {
  new Mmenu(
    "#offcanvas-main-nav",
    {
      // Options
      wrappers: ["wordpress"],
      extensions: [
        "pagedim-white", 
        "popup",
        // "fullscreen",
        "listview-justify"
      ],
      navbar: [{ add: "false" }],
    },
    {
      // Configuration
    }
  );
});
