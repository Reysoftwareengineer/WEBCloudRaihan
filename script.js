// Fungsi untuk menampilkan atau menyembunyikan password
function showPassword() {
    var passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

// Fungsi untuk menangani submit formulir
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Periksa apakah username dan password adalah "raihan"
    if (username === "raihan" && password === "softwaredeveloper") {
        alert("Login berhasil!");
        // Redirect ke halaman setelah login (ganti URL sesuai kebutuhan)
        window.location.href = "welcome.html?username=" + encodeURIComponent(username);
    } else {
        alert("Login gagal. Silakan coba lagi.");
    }
});

document.getElementById("changeForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var newUsername = document.getElementById("newUsername").value;
    var newPassword = document.getElementById("newPassword").value;

    // Validasi (contoh sederhana)
    if (newUsername.trim() === "" || newPassword.trim() === "") {
        document.getElementById("errorMessage").innerText = "Username dan password harus diisi.";
        return;
    }

    // Lakukan proses ganti username dan password sesuai kebutuhan
    var usernameElement = document.getElementById("username");
    var passwordElement = document.getElementById("password");

    usernameElement.value = newUsername;
    passwordElement.value = newPassword;

    alert("Username dan password berhasil diganti!");

    // Reset pesan kesalahan
    document.getElementById("errorMessage").innerText = "";
});
