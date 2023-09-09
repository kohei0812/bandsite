<?php 
$past_live_id = $_GET['past_live_id'];
require_once '../class/PastLive.php';
$PastLive = new PastLive();
$PastLive->deletePastLive($past_live_id);

?>