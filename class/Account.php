<?php 

 require_once "Database.php";

 class Account extends Database{

  public function login($email,$password){
    $sql = "SELECT * FROM accounts WHERE email = '$email' AND password = '$password'";
    
    $result = $this->conn->query($sql);
    
    if($result->num_rows == 1){
        return $result->fetch_assoc();
    }else{
        return false;
    }
}

public function getOneAccount($account_id){
    $sql = "SELECT * FROM accounts WHERE account_id = '$account_id'";
    $result = $this->conn->query($sql);
    if($result == FALSE){
      die('error getting one account '.$this->conn->error);
  }else{
      return $result->fetch_assoc();
  }

  }

  public function deleteAccount($account_id){
    $sql = "DELETE FROM accounts WHERE account_id = '$account_id'";
    $result = $this->conn->query($sql);
    if($result == FALSE){
       die('error delete Account '.$this->conn->error);
    }
}

public function updateEmail($account_id,$new_email){
    $sql ="UPDATE accounts SET email = '$new_email' WHERE account_id = '$account_id'";
    $result = $this->conn->query($sql);
    if($result == TRUE){
     header('Location:../userpage.php');
     }else{
     die('result has an error '.$this->conn->error);
}
  }

 }
 ?>