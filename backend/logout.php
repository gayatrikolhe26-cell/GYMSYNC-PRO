<?php
session_start();
session_unset();
session_destroy();

// redirect to login/auth page
header("Location: ../frontend/auth.html");
exit();
?>