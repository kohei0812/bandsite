<?php 
session_start();
   require_once '../class/Contact.php';
  $Contact = new Contact(); //OBJECT
  
 
  if(isset($_POST['submit'])){
     $contact_name = $_POST['name'];   
     $contact_email = $_POST['email'];   
     $contact = $_POST['message'];    

      $Contact->createContact($contact_name,$contact_email,$contact);
  }
  ?>