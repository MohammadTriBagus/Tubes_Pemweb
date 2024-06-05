<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page Kesehatan Mental</title>
    <link rel="stylesheet" href="styles/style_login.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<script>showAlert('{$_SESSION['error']}');</script>";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo "<script>showAlert('{$_SESSION['success']}');</script>";
        unset($_SESSION['success']);
    }
    ?>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="action/login_proses.php" method="POST">
                <h1>Create Account</h1>
                <span>or use your email for registration</span>
                <input type="text" name="name" placeholder="Username" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <div class="form-group">
                    <label for="role">Register as</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="dokter">Dokter</option>
                        <option value="pasien">Pasien</option>
                    </select>
                </div>
                <button type="submit" name="register">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="action/login_proses.php" method="POST">
                <h1>Sign In</h1>    
                <span>or use your account</span>
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <div class="form-group">
                    <label for="role">Register as</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="dokter">Dokter</option>
                        <option value="pasien">Pasien</option>
                    </select>
                </div>
                <button type="submit" name="login">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>
                        Register with your personal details to use all of site features
                    </p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/login.js"></script>
</body>
</html>
