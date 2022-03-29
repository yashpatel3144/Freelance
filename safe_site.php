<?php
session_start();

if (!isset($_SESSION["inloggning"]) || $_SESSION["inloggning"] !== true) {
header("Location: login.php");
exit;
}
?>