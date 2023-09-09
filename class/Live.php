<?php
  
   require_once "Database.php";

class Live extends Database{

  public function createLive($live_date,$live_ow,$live_place,$live_title,$live_details,$live_cw,$live_picture,$live_locate){
         $sql = "INSERT INTO lives(live_date,live_ow,live_place,live_title,live_details,live_cw,live_picture, live_locate) VALUES ('$live_date', '$live_ow','$live_place', '$live_title','$live_details','$live_cw','$live_picture', '$live_locate')";
          // echo $sql;
         $result = $this->conn->query($sql);

         if($result == false){
             die("CANNOT Create Live: ".$this->conn->error);
         }else{
            return 1;
           }
     }
     public function displayLives(){
      $sql = "SELECT * FROM lives ORDER BY live_date ASC";
      $result = $this->conn->query($sql);
      if($result->num_rows > 0){
          $row = array();
          while($rows = $result->fetch_assoc()){
              $row[] = $rows;
          }
         return $row; 
       }else{
           return FALSE;
       }   

  }
  public function getOneLive($live_id){
    $sql = "SELECT * FROM lives WHERE live_id = '$live_id'";
    $result = $this->conn->query($sql);
    if($result == FALSE){
      die('error getting one live '.$this->conn->error);
  }else{
      return $result->fetch_assoc();
  }

  }

  public function updateLive($live_id,$new_live_date,$new_live_ow,$new_live_place,$new_live_title,$new_live_details,$new_live_cw,$new_live_picture,$new_live_locate){
    $sql = "UPDATE lives SET live_date = '$new_live_date',live_ow = '$new_live_ow',live_place = '$new_live_place',live_title = '$new_live_title',live_details = '$new_live_details',live_cw = '$new_live_cw',live_picture = '$new_live_picture',live_locate = '$new_live_locate' WHERE live_id = '$live_id'";
    $result = $this->conn->query($sql);
    if($result ==FALSE){
      die("CANNOT UPDATE LIVE: ".$this->conn->error);
    }else{
      return 1;
    }

  }
  public function deleteLive($live_id){
    $sql = "DELETE FROM lives WHERE live_id = '$live_id'";
    $result = $this->conn->query($sql);
    if($result == TRUE){
      header('Location:../dashboard2.php');
    }else{
      die('error delete live '.$this->conn->error);
    }
  }

 
    }