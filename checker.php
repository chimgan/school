<?php
include_once 'roles.php';
session_start();
if (isset($_SESSION['user_access']) && $_SESSION['user_access'] === true)
{
    $role = 'viewer';
}
else
{
    $role = 'guest';
}

$page = $_SERVER['PHP_SELF'];
//echo $page; exit;

$page = substr($page, 1, strlen($page) - 5);

if (!in_array($page, $roles[$role]))
{
    echo '<h1>You have not permission for this page</h1>';
    header('Refresh: 5; URL = login.php');
    die('Bye-Bye-Bye');
}
