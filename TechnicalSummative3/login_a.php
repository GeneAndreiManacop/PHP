<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Gatekeeping: If active session exists, redirect to dashboard
if (isset($_SESSION['username'])) {
    header("Location: home_a.php");
    exit();
}

// Static variables holding credentials
$static_user = "Gene";
$static_pass = "password123";
$error = "";

// Auto-fill form parameters if saved cookies exist
$cookie_user = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$cookie_pass = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $static_user && $password === $static_pass) {
        // Save cookies ONLY if the remember me checkbox is checked
        if (isset($_POST['remember_me'])) {
            setcookie("username", $username, time() + (86400 * 30), "/");
            setcookie("password", $password, time() + (86400 * 30), "/");
        } else {
            // Delete cookies if unchecked
            setcookie("username", "", time() - 3600, "/");
            setcookie("password", "", time() - 3600, "/");
        }

        // Using $_SESSION, redirect user to homepage
        $_SESSION['username'] = $username;
        header("Location: home_a.php");
        exit();
    } else {
        $error = "Invalid static credentials.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Activity A</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container login-box">
        <h2>Login - Activity A</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo htmlspecialchars($cookie_user); ?>" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo htmlspecialchars($cookie_pass); ?>" required>
            </div>
            <div class="inline-row">
                <label class="remember-label"><input type="checkbox" name="remember_me" <?php if (!empty($cookie_user)) echo "checked"; ?>> Remember Me</label>
                <button type="submit" class="btn-sub">Submit</button>
            </div>
        </form>
    </main>
</body>

</html>