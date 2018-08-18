<?php
  include_once "./include/autoloader.php";
  autoloader('awebsite');
//   include "models/awebsite.php";
  class display extends awebart
  {
    public $data;
    private $tablename ;
    private $db;
    function __construct($table)
    {
        $this->tablename = $table;
        $this->db = $this->conectDb();
        $this->getdata();
        $this->close($this->db);
    }
  function getdata()
    {
        
        try{
            $query = "select * from $this->tablename ORDER BY id DESC LIMIT 1";
            $stmt = $this->db->conn->prepare($query);
            $stmt->execute();
        // set the resulting array to associative
        
            $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
            if(count($this->data) >= 1)
            {    
                return $this->data;

            }
            else
            {        
                throw new Exception("Error: empty table");
                return FALSE;
            }
        }
        catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    }

  }
?>