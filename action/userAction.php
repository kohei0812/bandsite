<?php 
session_start();
   require_once '../class/User.php';
  $User = new User(); //OBJECT
  require_once '../class/Account.php';
  $Account = new Account();
  
 
  if(isset($_POST['signup'])){
     $name = $_POST['name'];   
     $email = $_POST['email'];  
     $password = md5($_POST['password']); 
     $postcode = $_POST['postcode'];   
     $address = $_POST['address']; 
        

      $User->createUser($name,$email,$password,$postcode,$address);
  }elseif(isset($_POST['edit'])){

   $user_id = $_GET['user_id'] ;

  if(empty($_POST['new_name'])){
      $new_name = $_POST['old_name'];
   }else{
      $new_name = $_POST['new_name'];
   }
    if(empty($_POST['new_email'])){
      $new_email = $_POST['old_email'];
   }else{
      $new_email = $_POST['new_email'];
   }
    if(empty($_POST['new_postcode'])){
      $new_postcode = $_POST['old_postcode'];
   }else{
      $new_postcode = $_POST['new_postcode'];
   }
    if(empty($_POST['new_address'])){
      $new_address = $_POST['old_address'];
   }else{
      $new_address = $_POST['new_address'];
   }

   $User->updateUser($user_id,$new_name,$new_email,$new_postcode,$new_address);

   $account_id = $user_id;

   $Account->updateEmail($account_id,$new_email);
}

  ?>