jQuery(document).ready(function($) {
    
    // paint api
    (async function () {
        if (CSS["paintWorklet"] === undefined) {
          await import("https://unpkg.com/css-paint-polyfill");
        }
      
        // The code for this worklet can be found here: https://github.com/georgedoescode/houdini-fleck-patterns/blob/main/fleck-worklet.js
        CSS.paintWorklet.addModule("https://unpkg.com/@georgedoescode/houdini-fleck");
      
        // Fix a weird Safari/Firefox polyfill issue...
        setTimeout(() => {
          document.querySelectorAll(".site-header").forEach((el) => {
              console.log(el)
            el.style.width = "100%";
          });
        }, 250);
      })();
      console.log(CSS["paintWorklet"])
    
      // End paint api
})