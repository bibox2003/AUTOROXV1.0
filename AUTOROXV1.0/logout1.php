<?php
session_start();
session_destroy();
header("Location: landing_page.php");
exit;
?>