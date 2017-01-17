<?php
include_once 'checker.php';
unset($_SESSION["user_access"]);

echo 'You have cleaned session';
header('Refresh: 2; URL = login.php');
