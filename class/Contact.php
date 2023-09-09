<?php
  
   require_once "Database.php";

class Contact extends Database{
      public function createContact($contact_name,$contact_email,$contact){
         $newContact = $this->conn->real_escape_string($contact);
         $sql = "INSERT INTO contacts(contact_name, contact_email,contact) VALUES ('$contact_name', '$contact_email','$newContact')";
          $result = $this->conn->query($sql);
        

         if($result == false){
             die("CANNOT ADD CONTACT: ".$this->conn->connect_error);
         }else{
             header("Location: ../index.php");
         }
     }

     public function displayContacts(){
        $sql = "SELECT * FROM contacts";
        $result =$this->conn->query($sql);
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

     public function deleteContact($contact_id){
         $sql = "DELETE FROM contacts WHERE contact_id = '$contact_id'";
         $result = $this->conn->query($sql);
         if($result == TRUE){
             header('Location:../dashboard.php');
         }else{
             die('error delete Contact '.$this->conn->error);
         }
     }
    }
    ?>