<?php
session_start();
require_once '../class/User.php';
$user_id = $_GET['user_id'];
$User = new User();
$specificuser = $User->getOneUser($user_id);
include '../class/Account.php';
$Account = new Account();


if(!empty($_SESSION['login_id']))
{$account_id = $_SESSION['login_id'];
$specificAccount = $Account->getOneAccount($account_id);
$specificUser = $User->getOneUser2($account_id);
// $pre_user_id = $specificUser['user_id'];


}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Update User | Stacked State Official Site</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
  </head>
  <body>

  <div class="jumbotron jumbotron-fluid py-2 mb-0" style="background-color: white;">
    <div class="container text-center">
      <div class="row">
      <div class="col-8 text-right">
      <img class="img-fluid" src="../images/logo2.png" alt="">
      </div>
      <div class="col-4">
        <div class="text-left text-light" style="position: relative; height:150px;">
      <h3 style="color:black;  position: absolute;
        bottom: 0;">Official Online Store</h3>
      </div>
      </div>
      </div>
    </div>

  </div>
  
  
  <div style="color:white;" class="container-fluid bg-dark pl-5 mb-5"> 
   
   <nav class="navbar navbar-expand-lg navbar-toggleable-sm navbar-dark">
     <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
       <span class="navbar-toggler-icon"></span>
     </button>
    
     <ul class="navbar-nav collapse navbar-collapse justify-content-center"id="mainNav">
       
     <li class="nav-item"><a href="../J-index.php" class="nav-link">HOME</a></li>
       <li class="nav-item"><a href="../J-about.php" class="nav-link">ABOUT US</a></li>
       <li class="nav-item"><a href="https://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw" class="nav-link">VIDOE</a></li>
       <li class="nav-item"><a href="../J-live.php" class="nav-link">LIVE</a></li>
       <li class="nav-item"><a href="../J-store.php" class="nav-link">STORE</a></li>
       <li class="nav-item"><a href="../J-contact.php" class="nav-link">CONTACT</a></li>
       <?php if(!empty($specificAccount)) : ?>
          <?php if($specificAccount['status'] == 'U'): ?>
          <li class="nav-item"><a href="../J-userpage.php" class="nav-link">ACCOUNT</a></li>
          <?php elseif($specificAccount['status'] == 'A'): ?>
            <li class="nav-item"><a href="../dashboard.php" class="nav-link">DASHBOARD</a></li>
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
         <a href="../logout.php" class="text-light"><i class="fas fa-user-times"></i></a>
         </div>
       <?php else: ?>  
         <div class="container text-right text-light ">
         <p style="font-size:16px;" class="d-inline">Login</p>
         <a href="../J-login.php" class="text-light"><i class="fas fa-user-check"></i></a>
         </div>

       <?php endif; ?> 
     
     </div>
   
   </nav>
  
</div>
      <div class="container">
        <div class="card mx-auto w-50 border border-0">
           <div class="card-header bg-white text-dark border-0 text-center">

           <!-- <div class="container text-left my-2">
            <a role="button" class="btn btn-dark" href="../userpage.php">Back to Your Page</a>
           </div> -->

           <h2>会員情報編集</h2>
           </div>  
           <div class="card-body">
             <form action="../action/userAction.php?user_id=<?php echo $specificuser['user_id']?>"  method="post">
               
                <div class="form-row">
                   <div class="form-group col-md-12">
                     <input type="text" name="new_name" class="form-control p-4" placeholder="<?php echo $specificuser['name']?>">
                     <input type="hidden" name="old_name" class="form-control p-4" value="<?php echo $specificuser['name']?>">
                    
                   </div>
                </div>

                <div class="form-row"> 
                   <div class="form-group col-md-12">
                   <input type="email" name="new_email" class="form-control p-4" placeholder="<?php echo $specificuser['email']?>">
                   <input type="hidden" name="old_email" class="form-control p-4" value="<?php echo $specificuser['email']?>">
                   </div>

                </div>

                <div class="form-row">
                   <div class="form-group col-md-12">
                   <input type="number" name="new_postcode" class="form-control p-4" placeholder="<?php echo $specificuser['postcode']?>">
                   <input type="hidden" name="old_postcode" class="form-control p-4" value="<?php echo $specificuser['postcode']?>">
                   </div>

                </div>

                <div class="form-row">
                   <div class="form-group col-md-12">
                   <input type="text" name="new_address" class="form-control p-4" placeholder="<?php echo $specificuser['address']?>">
                   <input type="hidden" name="old_address" class="form-control p-4" value="<?php echo $specificuser['address']?>">
                   </div>

                </div>

                
                
                <div class="form-row">
                   <div class="form-group col-md-12">
                  <button name="edit" type="submit" class="btn btn-danger form-control">編集</button>   
                  
                  </div>

                </div>


             </form>
           </div>    

        </div>


      </div>

      <div class="jumbotron jumbotron-fluid text-center mb-0  bg-secondary" style="margin-top:300px;">
<p class="text-dark">All Right Reserved©Stacked State</p>
<div class="container">
<div class="icons">
      <a class="text-light mr-2 lead" href="https://twitter.com/stackedstate"><i class="fab fa-twitter"></i></a>
      <a class="text-light mr-2 lead" href="https://www.facebook.com/Stacked-State-113045213786062"><i class="fab fa-facebook-f"></i></a>
      <a class="text-light mr-2 lead" href="https://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw"><i class="fab fa-youtube"></i></a>
    </div>
</div>
</div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>