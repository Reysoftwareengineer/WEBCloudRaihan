document.getElementById("loginForm").addEventListener("submit", function() {
    document.querySelector(".login-container").classList.add("logged-in");
});

function showPassword() {
    var passwordInput = document.getElementById("passwordInput");
    var showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

    // Ganti jenis input password menjadi teks jika checkbox dicentang
    if (showPasswordCheckbox.checked) {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
