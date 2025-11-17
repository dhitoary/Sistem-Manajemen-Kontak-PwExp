<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'fungsi.php';
require_login();

$contact_id = $_GET['id'] ?? null;

if ($contact_id !== null) {
    delete_contact($contact_id);
}

header("Location: dashboard.php");
exit;
?>