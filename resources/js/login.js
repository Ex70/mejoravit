window.addEventListener("load", function () {
    document.getElementById("loader").style.display = "none";
    document.getElementById("content").classList.remove("hidden");
});

function togglePassword() {
    let passwordField = document.getElementById("password");
    let toggleIcon = document.getElementById("toggleIcon");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}