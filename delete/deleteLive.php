<?php 
$live_id = $_GET['live_id'];
require_once '../class/Live.php';
$Live = new Live();
$Live->deleteLive($live_id);

?>