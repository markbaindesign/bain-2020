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
         dismiss: "Sounds AWESOME, I'm in!",
         message: "I am going to infect your machine with my cookie germs & stalk you forever via the Internet, OK?",
         link: "Not really. Your privacy is important to me.",
         href: "/privacy"
       },
     });
   });
 });