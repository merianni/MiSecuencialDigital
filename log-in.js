// password visibility toggle
const passwordField = document.querySelector("#password-field");
const eyeIcon = document.querySelector("#eye");

eye.addEventListener("click", function() {
    this.classList.toggle("bi-eye-slash-fill");
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password" ;
    passwordField.setAttribute("type", type);
})