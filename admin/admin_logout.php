<?php

session_start();

session_unset();
session_destroy();
header('location: /collage projects/min-mbs/register_validation/login.php');
