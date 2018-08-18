<?php
class login
{
 private $user;
 private $password;
 private $db;
 private $result;
 function __construct($username,$mypassword)
 {
    $this->setdata($username,$mypassword);
    $this->connectToDb();
     $this->getdat();
     $this->db->close();
 }  
 private function setdata($use,$pass)
 {
     $this->user = $use;
     $this->password = $pass;
 } 
 private function connectToDb()
 {
    try{
        include "database.php";
        $vars = "C:/xampp/htdocs/awebsite/app/include/vars.php";
        $this->db = new database($vars);
        }catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
   
 }
 private function getdat()
 {
    $query = "select * from users where username='$this->user'and password = '$this->password'";
    $stmt = $this->db->conn->prepare($query);
    $stmt->execute();
    // set the resulting array to associative
    
    $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
    if(count($this->result) >= 1)
    {
             
        return TRUE;
    }
    else
    {        
        throw new Exception("not found the date");
    }

 }
}
?>