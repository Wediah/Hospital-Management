<?php
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page after logout
header("Location: doctorSignin.php");
exit();
?>