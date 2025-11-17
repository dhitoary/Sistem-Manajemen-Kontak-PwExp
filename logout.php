<?php
require_once 'fungsi.php';

session_unset();
session_destroy();

header("Location: index.php");
exit;
?>