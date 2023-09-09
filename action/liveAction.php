<?php 
session_start();
   require_once '../class/Live.php';
  $Live = new Live(); //OBJECT
  
 
  if(isset($_POST['posted'])){
     $live_date = $_POST['live_date'];   
     $live_ow = $_POST['live_ow']; 
     $live_place = $_POST['live_place'];
     $live_title = $_POST['live_title'];
     $live_details = $_POST['live_details'];
     $live_cw = $_POST['live_cw'];
     $live_picture = $_FILES['live_picture']['name'];   
     $live_locate = $_POST['live_locate'];
     
     $target_dir = "../upload/"; 
        $target_file = $target_dir . basename($_FILES["live_picture"]["name"]);

       $upload = $Live->createLive($live_date,$live_ow,$live_place,$live_title,$live_details,$live_cw,$live_picture,$live_locate);
      
       if($upload == 1){
         move_uploaded_file($_FILES["live_picture"]["tmp_name"],$target_file);
         header("Location: ../dashboard2.php");
       }else{
         echo "Error";
       }
  }elseif(isset($_POST['edit'])){
    $live_id = $_GET['live_id'];

    if(empty($_POST['new_live_date'])){
      $new_live_date = $_POST['old_live_date'];
   }else{
      $new_live_date = $_POST['new_live_date'];
   }
    if(empty($_POST['new_live_ow'])){
      $new_live_ow = $_POST['old_live_ow'];
   }else{
      $new_live_ow = $_POST['new_live_ow'];
   }
    if(empty($_POST['new_live_place'])){
      $new_live_place = $_POST['old_live_place'];
   }else{
      $new_live_place = $_POST['new_live_place'];
   }
    if(empty($_POST['new_live_title'])){
      $new_live_title = $_POST['old_live_title'];
   }else{
      $new_live_title = $_POST['new_live_title'];
   }
    if(empty($_POST['new_live_details'])){
      $new_live_details = $_POST['old_live_details'];
   }else{
      $new_live_details = $_POST['new_live_details'];
   }
    if(empty($_POST['new_live_cw'])){
      $new_live_cw = $_POST['old_live_cw'];
   }else{
      $new_live_cw = $_POST['new_live_cw'];
   }
    if(empty($_POST['new_live_locate'])){
      $new_live_locate = $_POST['old_live_locate'];
   }else{
      $new_live_locate = $_POST['new_live_locate'];
   }
         
    $new_live_picture = $_FILES['new_live_picture']['name'];   
    
    
    $target_dir = "../upload/"; 
      $target_file = $target_dir . basename($_FILES["new_live_picture"]["name"]);

     $upload = $Live->updateLive($live_id,$new_live_date,$new_live_ow,$new_live_place,$new_live_title,$new_live_details,$new_live_cw,$new_live_picture,$new_live_locate);
    
     if($upload == 1){
       move_uploaded_file($_FILES["new_live_picture"]["tmp_name"],$target_file);
       header("Location: ../dashboard2.php");
     }else{
       echo "Error";
     }


  }