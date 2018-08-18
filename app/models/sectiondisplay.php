<?php
  include_once "./include/autoloader.php";
  autoloader('awebsite');
 class displaysection extends awebart
 {
    public $data = NULL;
    private $tablename ;
    private $db;
    public $rowcount;
    function __construct($table)
    {
        $this->tablename = $table;
        $this->db = $this->conectDb();
        $this->getdataall();
        $this->close($this->db);
    }
  function getdataall()
    {
        
        try{
            $query = "select * from $this->tablename ";
            $stmt = $this->db->conn->prepare($query);
            $stmt->execute();
        // set the resulting array to associative
        
            $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
            $this->rowcount = $stmt->rowCount() ;
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
        echo "Error: " 
        . $e->getMessage();
    }

    }

 }
?>