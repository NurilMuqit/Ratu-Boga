const password_confirmation = document.getElementById("password_confirmation");
const togglePasswordConfirmation = document.getElementById(
    "togglePasswordConfirmation"
);
const togglePasswordConfirmationHide = document.getElementById(
    "togglePasswordConfirmationHide"
);

if (password_confirmation.value.trim() === "") {
    togglePasswordConfirmation.classList.add("hidden");
} else {
    togglePasswordConfirmation.classList.remove("hidden");
}
password_confirmation.addEventListener("input", function () {
    const inputValue = password_confirmation.value;
    // Memeriksa panjang input
    if (inputValue.length > 0) {
        if (password_confirmation.type == "text") {
            togglePasswordConfirmation.classList.add("hidden");
            togglePasswordConfirmationHide.classList.remove("hidden");
        } else {
            togglePasswordConfirmation.classList.remove("hidden");
            togglePasswordConfirmationHide.classList.add("hidden");
        }
    } else {
        togglePasswordConfirmation.classList.add("hidden");
        togglePasswordConfirmationHide.classList.add("hidden");
    }
});
togglePasswordConfirmation.addEventListener("click", () => {
    password_confirmation.type = "text";
    togglePasswordConfirmation.classList.add("hidden");
    togglePasswordConfirmationHide.classList.remove("hidden");
});
togglePasswordConfirmationHide.addEventListener("click", () => {
    password_confirmation.type = "password";
    togglePasswordConfirmation.classList.remove("hidden");
    togglePasswordConfirmationHide.classList.add("hidden");
});
