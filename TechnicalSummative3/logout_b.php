<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Clear parameters completely
session_unset();
session_destroy();
header("Location: login_b.php");
exit();
?>