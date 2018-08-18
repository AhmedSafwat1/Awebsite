<?php
//  reigsdter class to regisert foerm
  include "models/awebsite.php";
  class register extends awebart
  {
      private $username;
      private $email;
      private $password;
      private $name;
      private $db;
      function __construct($data)
      {
          if(is_array($data))
          {
              $this->setdata($data);
              $this->db=$this->conectDb();
              $this->insert();
              $this->close($this->db);
          }
          else{
              throw new Exception("data not arry enter arry");
              
          }


      }
      private function setdata($data1)
      {
          $this->username = $data1['username'];
          $this->email =  $data1['email'];
          $this->name = $data1['name'];
          $this->password = $data1['password'];

      }
      private function insert()
      {
          try{
          $sql = "insert into users(name,username,password,email) values('$this->name','$this->username',
          '$this->password','$this->email')";
          $this->db->conn->exec($sql);
          echo "New record created successfully";
          }catch(PDOException $e)
          {
          echo $sql . "<br>" . $e->getMessage();
           throw new Exception("not add to dabase");
           
          };

      }
      //`id`, `name`, `username`, `password`, `email`
  }
?>