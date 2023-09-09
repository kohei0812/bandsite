<?php 
session_start();
   require_once '../class/PastLive.php';
  $pastLive = new pastLive(); //OBJECT
  
 
  if(isset($_POST['posted'])){
     $past_live_date = $_POST['past_live_date'];   
     $past_live_ow = $_POST['past_live_ow'];   
     $past_live_place = $_POST['past_live_place'];   
     $past_live_title = $_POST['past_live_title'];   
     $past_live_cw = $_POST['past_live_cw'];   
     

      $pastLive->createPastlive($past_live_date,$past_live_ow,$past_live_place,$past_live_title,$past_live_cw );
  }elseif(isset($_POST['edit'])){
   $past_live_id = $_GET['past_live_id'] ;

    if(empty($_POST['new_past_live_date'])){
      $new_past_live_date = $_POST['old_past_live_date'];
   }else{
      $new_past_live_date = $_POST['new_past_live_date'];
   }
    if(empty($_POST['new_past_live_ow'])){
      $new_past_live_ow = $_POST['old_past_live_ow'];
   }else{
      $new_past_live_ow = $_POST['new_past_live_ow'];
   }
    if(empty($_POST['new_past_live_place'])){
      $new_past_live_place = $_POST['old_past_live_place'];
   }else{
      $new_past_live_place = $_POST['new_past_live_place'];
   }
    if(empty($_POST['new_past_live_title'])){
      $new_past_live_title = $_POST['old_past_live_title'];
   }else{
      $new_past_live_title = $_POST['new_past_live_title'];
   }
    if(empty($_POST['new_past_live_cw'])){
      $new_past_live_cw = $_POST['old_past_live_cw'];
   }else{
      $new_past_live_cw = $_POST['new_past_live_cw'];
   }
   
         

   $pastLive->updatePastLive($past_live_id,$new_past_live_date,$new_past_live_ow,$new_past_live_place,$new_past_live_title,$new_past_live_cw);
}
  ?>