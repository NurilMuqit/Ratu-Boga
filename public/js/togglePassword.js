const passwordInput = document.getElementById("password");
const togglePassword = document.getElementById("togglePassword");
const togglePasswordHide = document.getElementById("togglePasswordHide");
console.log(passwordInput.value);
if (passwordInput.value.trim() === "") {
    togglePassword.classList.add("hidden");
} else {
    togglePassword.classList.remove("hidden");
}
passwordInput.addEventListener("input", function () {
    const inputValue = passwordInput.value;
    // Memeriksa panjang input
    if (inputValue.length > 0) {
        if (passwordInput.type == "text") {
            togglePassword.classList.add("hidden");
            togglePasswordHide.classList.remove("hidden");
        } else {
            togglePassword.classList.remove("hidden");
            togglePasswordHide.classList.add("hidden");
        }
    } else {
        togglePassword.classList.add("hidden");
        togglePasswordHide.classList.add("hidden");
    }
});
togglePassword.addEventListener("click", () => {
    passwordInput.type = "text";
    togglePassword.classList.add("hidden");
    togglePasswordHide.classList.remove("hidden");
});
togglePasswordHide.addEventListener("click", () => {
    passwordInput.type = "password";
    togglePassword.classList.remove("hidden");
    togglePasswordHide.classList.add("hidden");
});
