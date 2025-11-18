<?php
session_save_path('i:/custom/');
session_start();

$_SESSION = [];

session_destroy();

echo "Session destroyed. All session variables have been unset.";
?>
