<?php
  
   require_once "Database.php";

class pastLive extends Database{
      public function createPastLive($past_live_date,$past_live_ow,$past_live_place,$past_live_title,$past_live_cw ){
         
         $sql = "INSERT INTO past_lives(past_live_date,past_live_ow, past_live_place, past_live_title, past_live_cw) VALUES ('$past_live_date', '$past_live_ow','$past_live_place', '$past_live_title', '$past_live_cw')";

         $result = $this->conn->query($sql);

         if($result == false){
             die("CANNOT ADD PAST LIVE: ".$this->conn->connect_error);
         }else{
             header("Location: ../dashboard2.php");
         }
     }

      public function displayPastLives(){
          $sql = "SELECT * FROM past_lives ORDER BY past_live_date DESC LIMIT 10";
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
      
      public function getOnePastLive($past_live_id){
          $sql = "SELECT * FROM past_lives WHERE past_live_id = '$past_live_id'";
          $result = $this->conn->query($sql);
          if($result == FALSE){
              die('error getting one past live '.$this->conn->error);
          }else{
              return $result->fetch_assoc();
          }

      }

      public function updatePastLive($past_live_id,$new_past_live_date,$new_past_live_ow,$new_past_live_place,$new_past_live_title,$new_past_live_cw){
         
          $sql = "UPDATE past_lives SET past_live_date = '$new_past_live_date',past_live_ow = '$new_past_live_ow',past_live_place = '$new_past_live_place',past_live_title = '$new_past_live_title',past_live_cw = '$new_past_live_cw' WHERE past_live_id = '$past_live_id'";
          $result = $this->conn->query($sql);
          if($result == TRUE){
              header('Location:../dashboard2.php');
          }else{
              die('result has an error '.$this->conn->error);
          }
      }

      public function deletePastLive($past_live_id){
        $sql = "DELETE FROM past_lives WHERE past_live_id = '$past_live_id'";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            header('Location:../dashboard2.php');
        }else{
            die('error delete Past Live '.$this->conn->error);
        }
    }
    public function moveLive($past_live_date,$past_live_ow,$past_live_place,$past_live_title,$past_live_cw,$live_id){
        $firstSql = "INSERT INTO past_lives(past_live_date,past_live_ow, past_live_place, past_live_title, past_live_cw) VALUES ('$past_live_date', '$past_live_ow','$past_live_place', '$past_live_title', '$past_live_cw')";

        $firstResult = $this->conn->query($firstSql);

        if($firstResult == false){
            die("CANNOT ADD PAST LIVE: ".$this->conn->connect_error);
        }else{
            $secondSql = "DELETE FROM lives WHERE live_id = '$live_id'";
            $secondResult = $this->conn->query($secondSql);
            if($secondResult == false){
                die("CANNOT DELETE LIVE: ".$this->conn->error); 
            }else{

            header('Location: ../dashboard2.php');
            }
            }


        }
    }
   ?>