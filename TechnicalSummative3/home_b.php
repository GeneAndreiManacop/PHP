<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header("Location: login_b.php");
    exit();
}

include 'db.php';
$user = $_SESSION['username'];
$message = "";

// User-Side Retrieval of Record
$stmt = $conn->prepare("SELECT first_name, middle_name, last_name, birthday, email, contact_number, password FROM users WHERE username = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();
$userData = $result->fetch_assoc();
$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reset_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];

    // Validation matching checks
    if ($current_password !== $userData['password']) {
        $message = "Current password is not the same with the old password";
    } elseif ($new_password !== $confirm_new_password) {
        $message = "New password and Re-Enter new password should be the same.";
    } else {
        // Update operational query execution
        $update_stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
        $update_stmt->bind_param("ss", $new_password, $user);
        $update_stmt->execute();
        $update_stmt->close();

        $message = "Password updated successfully.";
        $userData['password'] = $new_password;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container box">
        <a href="logout_b.php" class="logout">Log-out</a>
        <h2>User Information Form</h2>

        <p><strong>Welcome</strong> <?php echo htmlspecialchars($userData['first_name'] . ' ' . $userData['middle_name'] . ' ' . $userData['last_name']); ?></p>
        <p><strong>Birthday:</strong> <?php echo htmlspecialchars($userData['birthday']); ?></p>
        <p><strong>Contact Details</strong></p>
        <p style="margin-left: 20px;"><strong>Email:</strong> <?php echo htmlspecialchars($userData['email']); ?></p>
        <p style="margin-left: 20px;"><strong>Contact:</strong> <?php echo htmlspecialchars($userData['contact_number']); ?></p>

        <div class="reset-section">
            <h5>RESET PASSWORD</h5>
            <?php if (!empty($message)) echo "<p class='alert'>$message</p>"; ?>
            <form action="home_b.php" method="POST">
                <div class="row"><label>Enter Current Password:</label><input type="password" name="current_password" required></div>
                <div class="row"><label>Enter New Password:</label><input type="password" name="new_password" required></div>
                <div class="row"><label>Re-Enter New Password:</label><input type="password" name="confirm_new_password" required></div>
                <button type="submit" name="reset_password" class="btn-sub">Reset Password</button>
            </form>
        </div>
        <div class="footer-text">&copy; Crix Brix</div>
    </main>
</body>

</html>