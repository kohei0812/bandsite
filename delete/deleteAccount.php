<?php 
session_start();
require_once '../class/Account.php';
$Account = new Account();
require_once '../class/User.php';
$User = new User();

$account_id = $_GET['user_id'];

$Account->deleteAccount($account_id);
$User->deleteUser($account_id);

session_destroy(); 

header('location:../store.php');

?>