<?php
session_start();
include 'class/Account.php';
$Account = new Account();
include 'class/Live.php';
$Live = new Live();
include 'class/User.php';
$User = new User();
include 'class/Contact.php';
$Contact = new Contact();
include 'class/PastLive.php';
$pastLive = new pastLive();


if(!empty($_SESSION['login_id']))
{$account_id = $_SESSION['login_id'];
$specificAccount = $Account->getOneAccount($account_id);
$specificUser = $User->getOneUser2($account_id);
$pre_user_id = $specificUser['user_id'];

// $preOrderData = $Order->displayPreOrders($pre_user_id);
// $preOrderNumbers = 0;

// if(!empty($preOrderData)){
// foreach($preOrderData as $row){
//   $preOrderNumbers += 1;
// }}

}

if($specificAccount['status'] != 'A'){
  header('location:store.php');
}

function sanitize_br($str){
  
  return nl2br(htmlspecialchars($str, ENT_QUOTES, 'UTF-8'));

 }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
  </head>
  <body style="background-color: #e9ecef;">

  <div class="jumbotron jumbotron-fluid py-2 mb-0">
    <div class="container text-center">
     
      
      <img class="img-fluid" src="images/logo2.png" alt="">
     
      
    </div>

  </div>


  <div class="container-fluid bg-dark pl-5 mb-2"> 
   
   <nav class="navbar navbar-expand-lg navbar-toggleable-sm navbar-dark">
     <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
       <span class="navbar-toggler-icon"></span>
     </button>
    
     <ul class="navbar-nav collapse navbar-collapse justify-content-center"id="mainNav">
       
     <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
       <li class="nav-item"><a href="about.php" class="nav-link">ABOUT US</a></li>
       <li class="nav-item"><a href="https://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw" class="nav-link">VIDOE</a></li>
       <li class="nav-item"><a href="live.php" class="nav-link">LIVE</a></li>
       <li class="nav-item"><a href="store.php" class="nav-link">STORE</a></li>
       <li class="nav-item"><a href="contact.php" class="nav-link">CONTACT</a></li>
       <?php if(!empty($specificAccount)) : ?>
          <?php if($specificAccount['status'] == 'U'): ?>
          <li class="nav-item"><a href="userpage.php" class="nav-link">ACCOUNT</a></li>
          <?php elseif($specificAccount['status'] == 'A'): ?>
            <li class="nav-item"><a href="dashboard.php" class="nav-link">DASHBOARD</a></li>
          <?php endif; ?>
        <?php endif ?>

     </ul>
     <div class="navbar-brand">
       
     <?php if(!empty($specificAccount)): ?>
         <?php if($specificAccount['status'] == 'A'): ?>
         <div class="container text-right text-light">
         <p style="font-size:16px;" class="d-inline">HELLO! <?php echo $specificUser['name']?></p>
         <!-- <a href="contactpage.php" class="text-light">
         <i class="fas fa-exchange-alt"></i></a> -->
         </div>
         <?php else : ?>
         <div class="container text-right text-light">
         <p style="font-size:16px;" class="d-inline">HELLO! <?php echo$specificUser['name']?></p>
         <!-- <a href="shoppingCart.php" class="text-light">
         <i class="fas fa-shopping-cart"></i></a> -->
         <?php // echo $preOrderNumbers ?>
         </div>
         <?php endif ; ?>
       <?php endif; ?>  
      
     </div>
     <div class="navbar-brand">
      
       <?php if(!empty($specificAccount)): ?>
         <div class="container text-right text-light ">
         <p style="font-size:16px;" class="d-inline">Logout</p>
         <a href="logout.php" class="text-light"><i class="fas fa-user-times"></i></a>
         </div>
       <?php else: ?>  
         <div class="container text-right text-light ">
         <p style="font-size:16px;" class="d-inline">Login</p>
         <a href="login.php" class="text-light"><i class="fas fa-user-check"></i></a>
         </div>

       <?php endif; ?> 
     
     </div>
   
   </nav>
  
</div>
  <div class="container-fluid py-0 py-2 " style="background-color: #e9ecef;">
     <div class="row">
       <div class="col-lg-2 col-md-4">
         <a role="button" class="btn btn-primary btn-block" href="create/createLive.php">+ Live</a>
       </div>
       <div class="col-lg-2 col-md-4">
         <a role="button" class="btn btn-success btn-block" href="create/createPastLive.php">+ PastLive</a>
       </div>
       <div class="col-lg-2 col-md-4">
         <a role="button" class="btn btn-warning btn-block" href="#">+ Bio</a>
       </div>
       <div class="col-lg-2 col-md-4">
         <a role="button" class="btn btn-light btn-block" href="#">+ Disco</a>
       </div>
       <div class="col-lg-2 col-md-4">
         <a role="button" class="btn btn-dark btn-block" href="#">+ Product</a>
       </div>
       <div class="col-lg-2 col-md-4">
         <a role="button" class="btn btn-danger btn-block" href="#">+ User</a>
       </div>
     </div>

  </div>
 <?php 
 $userData = $User->displayUsers();
 

 ?>
  <div class="container-fluid mt-3 text-center mx-0">
    <div class="row">
       <div class="col-lg-9 col-md-12">
          
            <div class="container pl-5 text-left">
             <table class="table table-bordered">
               <thead class="bg-dark text-light">
                 <th colspan="5">Customers</th>
               </thead>
               <tbody class="bg-light">
                 <?php if(!empty($userData)):?>
                  <tr>
                    <th style="width:10%;"> 
                     NAME
                    </th>
                    <th style="width:40%;">
                     EMAIL
                    </th>
                    <th style="width:10%;">
                      POSTCODE
                    </th>
                    <th style="width:40%;">
                      ADDRESS
                    </th>
                    <th></th>
                    
                   </tr>
                  <?php foreach($userData as $row):?> 
                  <tr>
                    <td>
                      <?php echo $row['name']?>
                    </td>
                    <td>
                      <?php echo $row['email']?>
                    </td>
                    <td>
                      <?php  echo $row['postcode']?>
                    </td>
                    <td>
                      <?php 
                         echo $row['address']
                      ?>
                    </td>
                    <td>
                      <a role="button" class="btn btn-danger mb-1" href="delete/deleteAccount.php?user_id=<?php echo $row['user_id']?>">Delete</a>
                      <a role="button" class="btn btn-warning mb-1" href="update/updateUser.php?user_id=<?php echo $row['user_id']?>">Edit</a>
                      <a role="button" class="btn btn-dark" href="purchaseHistory.php?user_id=<?php echo $row['user_id']?>">Bought</a>
                    </td>
                    
                  </tr>

                  <?php endforeach;?>
                 <?php else:?>
                    <tr>
                      <td colspan="5">None So Far</td>
                    </tr>
                 <?php endif;?> 
               </tbody>

             </table>
            </div> 

           
            



       </div>

       <div class="col-lg-3 col-md-12">
         <div class="container">
           
           <a role="button" class="btn btn-light btn-block my-2" href="dashboard.php">Contacts</a>
           <a role="button" class="btn btn-light btn-block my-2" href="dashboard2.php">Lives</a>
           <a role="button" class="btn btn-light btn-block my-2" href="#">Orders</a>
           <a role="button" class="btn btn-light btn-block my-2" href="dashboard3.php">Customers</a>
         </div>
       
       </div>

    </div>

  </div>

  <div class="jumbotron jumbotron-fluid text-center mb-0 mt-5 bg-secondary">
<p class="text-dark">All Right Reserved©Stacked State</p>
<div class="container">
<a class="text-dark mr-1" href=""><i class="fab fa-twitter "></i></a>
<a class="text-dark mr-1" href=""><i class="fab fa-facebook-f "></i></a>
<a class="text-dark mr-1" href=""><i class="fab fa-youtube "></i></a>
</div>
</div>
      
    

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>