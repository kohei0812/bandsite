<?php 

 require_once "Database.php";

 class User extends Database{
    public function createUser($name,$email,$password,$postcode,$address){
    $firstSql ="INSERT INTO accounts(email,password)VALUES('$email','$password')";
    $firstResult = $this->conn->query($firstSql);

    if($firstResult == TRUE){
       $account_id = $this->conn->insert_id;
       $secondSql = "INSERT INTO users(name,email,postcode,address,account_id)VALUES('$name','$email','$postcode','$address','$account_id')";
       $secondResult = $this->conn->query($secondSql);

       if($secondResult == TRUE){
           header('location:../login.php');  

       }else{
           echo "second result has an error ".$this->conn->error;
       }

    }else{
           echo "first result has an error ".$this->conn->error;
    }

    }

   

    public function displayUsers(){
        $sql = "SELECT * FROM users";
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

    public function getOneUser($user_id){
        $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
        $result = $this->conn->query($sql);
        if($result == FALSE){
          die('error getting one user '.$this->conn->error);
      }else{
          return $result->fetch_assoc();
      }
  
      }

      public function getOneUser2($account_id){
        $sql = "SELECT * FROM users WHERE account_id = '$account_id'";
        $result = $this->conn->query($sql);
        if($result == FALSE){
          die('error getting one user from account '.$this->conn->error);
      }else{
          return $result->fetch_assoc();
      }
  
      }

     public function updateUser($user_id,$new_name,$new_email,$new_postcode,$new_address){
       $sql ="UPDATE users SET name = '$new_name',email = '$new_email', postcode = '$new_postcode',address = '$new_address' WHERE user_id = '$user_id'";
       $result = $this->conn->query($sql);
       if($result == TRUE){
        header('Location:../userpage.php');
        }else{
        die('result has an error '.$this->conn->error);
   }
     }

     public function deleteUser($account_id){
        $sql = "DELETE FROM users WHERE account_id = '$account_id'";
        $result = $this->conn->query($sql);
        if($result == FALSE){
           die('error delete User '.$this->conn->error);
        }
    } 

     
 }
 
 ?>