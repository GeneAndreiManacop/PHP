<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home_a.php");
    exit();
}

$static_user = "Gene";
$static_pass = "password123";
$error = "";
$remembered_username = "";
$remembered_password = "";

// Check if cookies exist. If it does, populate forms
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $remembered_username = $_COOKIE['username'];
    $remembered_password = $_COOKIE['password'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $static_user && $password === $static_pass) {
        $_SESSION['username'] = $username;
        
        // Set cookies if "Remember Me" is checked
        if (isset($_POST['remember_me'])) {
            setcookie("username", $username, time() + (86400 * 30), "/");
            setcookie("password", $password, time() + (86400 * 30), "/");
        }
        
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
                <input type="text" name="username" value="<?php echo $remembered_username; ?>" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $remembered_password; ?>" required>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember_me"> Remember Me
                </label>
            </div>
            <div class="inline-row">
                <button type="submit" class="btn-sub">Submit</button>
            </div>
        </form>
    </main>
</body>

</html>