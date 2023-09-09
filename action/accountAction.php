<?php 
session_start();
   require_once '../class/Account.php';
  $Account = new Account(); //OBJECT
  
 
  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $login = $Account->login($email,$password);
    if($login){
      if($login['status'] == "A"){
        $_SESSION['login_id'] = $login['account_id'];
        header("Location: ../dashboard.php");
      }else{
       $_SESSION['login_id'] = $login['account_id'];
       header("Location: ../store.php");
        
      }

    }else{
      echo "Incorrect Email and Password";
    }


}


  ?>