<?php
session_start(); // Start the session

// Destroy all session data and logout the user
session_unset();  // Unset all session variables
session_destroy(); // Destroy the session

// Redirect the user to the login page after logging out
header("Location: login.php");
exit();
?>
