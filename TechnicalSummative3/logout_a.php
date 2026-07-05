<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Clear and break active sessions
session_unset();
session_destroy();
header("Location: login_a.php");
exit();
?>