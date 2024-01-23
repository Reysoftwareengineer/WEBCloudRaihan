<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2>Login</h2>
            <form id="loginForm" action="login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" required>

                <label for="password">Password:</label>
                <input type="password" name="password" id="passwordInput" required>

                <!-- Tambahkan checkbox untuk "Show Password" -->
                <input type="checkbox" id="showPasswordCheckbox" onclick="showPassword()"> 
                <label for="showPasswordCheckbox">Show Password</label>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
