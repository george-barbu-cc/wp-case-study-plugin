import showCaseStudyPopUP, { submitCaseStudyPopup } from "./form.js";

// DOC IS READY
document.addEventListener("DOMContentLoaded", () => {
  submitCaseStudyPopup();
  window.onscroll = function () {
    showCaseStudyPopUP();
  };
}); // end doc ready
