<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Gatekeeping: If a session is active, user cannot open the registration page
if (isset($_SESSION['username'])) {
    header("Location: home_a.php");
    exit();
}

$error = "";
$show_result = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Password and Confirm Password check before showing result
    if ($_POST['password'] !== $_POST['confirm_password']) {
        $error = "password and confirm password are not the same";
    } else {
        $show_result = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Activity A</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container form-container">
        <h2>My Personal Information</h2>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group"><label>First Name</label><input type="text" name="first_name" required></div>
            <div class="form-group"><label>Middle Name</label><input type="text" name="middle_name"></div>
            <div class="form-group"><label>Last Name</label><input type="text" name="last_name" required></div>
            <div class="form-group"><label>Username</label><input type="text" name="username" required></div>
            <div class="form-group"><label>Password</label><input type="password" name="password" required></div>
            <div class="form-group"><label>Confirm Password</label><input type="password" name="confirm_password" required></div>
            <div class="form-group"><label>Birthday</label><input type="text" name="birthday" placeholder="January 30 1993"></div>
            <div class="form-group"><label>Email</label><input type="email" name="email" required></div>
            <div class="form-group"><label>Contact Number</label><input type="text" name="contact_num" required></div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </main>

    <?php if ($show_result): ?>
        <div class="result-box">
            <p><strong>Full Name:</strong> <?php echo htmlspecialchars($_POST['first_name'] . ' ' . $_POST['middle_name'] . ' ' . $_POST['last_name']); ?></p>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($_POST['username']); ?></p>
            <p><strong>Password:</strong> <?php echo htmlspecialchars($_POST['password']); ?></p>
            <p><strong>Birthday:</strong> <?php echo htmlspecialchars($_POST['birthday']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
            <p><strong>Contact Number:</strong> <?php echo htmlspecialchars($_POST['contact_num']); ?></p>
        </div>
    <?php endif; ?>
</body>

</html>