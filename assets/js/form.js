import * as Cookies from "./cookies.js";

// email validate
const validateEmail = ($this) => {
  const $emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
    $emailToValidate = $this.value,
    $emailErrorMessage = document.querySelector(`[data-error='${$this.id}']`);

  console.log("$emailErrorMessage", $emailErrorMessage);
  if (!$emailReg.test($emailToValidate) || $emailToValidate == "") {
    $this.classList.add("error");
    $emailErrorMessage.classList.add("error");
    return false;
  } else {
    $this.classList.remove("error");
    $emailErrorMessage.classList.remove("error");
    return true;
  }
};

const submitCaseStudyPopup = () => {
  const $formContainer = document.getElementById("formContainer");

  $formContainer.addEventListener("submit", (e) => {
    e.preventDefault();
    const $email = document.querySelector("#caseStudyPopup-email");

    // validate email
    if ($email) {
      if (validateEmail($email)) {
        document.querySelector(".formPopup").style.display = "none";
        document.querySelector(".successPopup").style.display = "flex";
      }
    }
    return false;
  }); // onSubmit
};

//function for open/close the pop-up
const toogleForm = (status) => {
  const $form = document.getElementById("caseStudyPopup");
  if (status) {
    $form.style.display = "block";
    //we set the cookie and the reason
    Cookies.setCookie("showCaseStudyPopup", "email submited", 31);
  } else {
    $form.style.display = "none";
    //we set the cookie and the reason
    Cookies.setCookie("showCaseStudyPopup", "close", 31);
  }
};
export default function showCaseStudyPopUP() {
  //we can check if the cookie is set, if not show the pop-up
  // if (!Cookies.checkCookieExists("showCaseStudyPopup")) {
  if (document.documentElement.scrollTop >= window.innerHeight / 2) {
    toogleForm(true);
  }
  // }
}

//on close icon we close the pop-up
document.querySelectorAll("[data-cancel]").forEach(function (button) {
  button.addEventListener(
    "click",
    function (e) {
      toogleForm(false);
    },
    false
  );
});

export { submitCaseStudyPopup, validateEmail };
