<?php
session_start();
require_once '../class/Live.php';
require_once '../class/PastLive.php';
$Live = new Live();
$pastLive = new pastLive();


$live_id = $_GET['live_id'];
$specificlive = $Live->getOneLive($live_id);

$past_live_date = $specificlive['live_date'];
$past_live_ow = $specificlive['live_ow'];
$past_live_place = $specificlive['live_place'];
$past_live_title = $specificlive['live_title'];
$past_live_cw = $specificlive['live_cw'];


$pastLive->moveLive($past_live_date,$past_live_ow,$past_live_place,$past_live_title,$past_live_cw,$live_id);

?>