<?php 
$contact_id = $_GET['contact_id'];
require_once '../class/Contact.php';
$Contact = new Contact();
$Contact->deleteContact($contact_id);

?>