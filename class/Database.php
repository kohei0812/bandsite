<?php 

 class Database{
   private $servername = "mysql57.stackedstate.sakura.ne.jp";
   private $db_username = "stackedstate";
   private $db_password = "cherrybomb0721";
   private $database = "stackedstate_db";
   public $conn;

   public function __construct(){
     
    $this->conn = new mysqli($this->servername,$this->db_username,$this->db_password,$this->database);

    if($this->conn->connect_error){
       die("Connection Error".$this->conn->connect_error);
    }

    return $this->conn; 

   }

 }

?>