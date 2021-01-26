<?
session_start();

session_unset();

session_destroy();

header('Location: /collage%20projects/min-mbs/register_validation/login.php');
exit;

?>