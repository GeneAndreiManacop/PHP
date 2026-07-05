<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// If no active session, user cannot access home.php
// They will be redirected to the login page
if (!isset($_SESSION['username'])) {
    header("Location: login_a.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Activity A</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container dashboard-box">
        <a href="logout_a.php" class="logout-link">Logout</a>
        <h2>Homepage</h2>
        <p>Welcome, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></p>
        <p class="page-note">Static validation session verified.</p>
    </main>
</body>

</html>