<?php
 include_once "./include/autoloader.php";
 autoloader('awebsite');
 class del extends awebart
 {
    private $tablename ;
    private $db;
    private $id;
    public $data;
    function __construct($table)
    {
        $this->tablename = $table;
        $this->db = $this->conectDb();
        
    }
    function deldatabyid($id)
    {
        $query = " delete FROM $this->tablename WHERE section_id = '$id'";
        try{
            $this->db->conn->exec($query);
            $this->close($this->db);
            return TRUE;

        }catch(PDOException $e)
        {
        echo "<br>" . $e->getMessage();
        throw new Exception("Error:not delete ");
        $this->close($this->db);
        return FALSE;
        
        }

    }
    function deldatabyidandcolum($id,$colum)
    {
        $query = " delete FROM $this->tablename WHERE $colum = '$id'";
        try{
            $this->db = $this->conectDb();
            $this->db->conn->exec($query);
            $this->close($this->db);
            return TRUE;

        }catch(PDOException $e)
        {
        echo "<br>" . $e->getMessage();
        throw new Exception("Error:not delete ");
        $this->close($this->db);
        return FALSE;
        
        }

    }
    function getdatabyid($id)
    {

      try  
      {
            $query = " select * FROM $this->tablename WHERE section_id = '$id'";
            $stmt = $this->db->conn->prepare($query);
            $stmt->execute();
        // set the resulting array to associative
        
            $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
            if(count($this->data) >= 1)
            {    
                $this->close($this->db);
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
function getdatabyidandcolum($id,$col)
{
    
  try  
  {
        $query = " select * FROM $this->tablename WHERE $col = '$id'";
        $stmt = $this->db->conn->prepare($query);
        $stmt->execute();
    // set the resulting array to associative
    
        $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
        if(count($this->data) >= 1)
        {    
            $this->close($this->db);
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
function updbyid($id,$data)
{
    $query  = "update $this->tablename set ";
    foreach ($data as $key => $value) {
        # code...
        $query .= $key." ='".$value."' , ";
    }
    $apt ="*/*-";
    $query .= $apt;
    $query = str_replace(', '.$apt," ",$query);
    $query .= " where section_id = '$id'"; 
    echo $query;
    try{
        $this->db = $this->conectDb();
        $stmt = $this->db->conn->prepare($query);
        $stmt->execute();
        echo "<br>".$stmt->rowCount();
       
        return TRUE;

    }catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    throw new Exception("Error:not update ");
    return FALSE;
    
    }
}
function updbyidcol_Co($id,$data,$cond)
{
    $query  = "update $this->tablename set ";
    foreach ($data as $key => $value) {
        # code...
        $query .= $key." ='".$value."' , ";
    }
    $apt ="*/*-";
    $query .= $apt;
    $query = str_replace(', '.$apt," ",$query);
    $query .= " where $cond = '$id'";   
    try{
        $this->db = $this->conectDb();
        $stmt = $this->db->conn->prepare($query);
        $stmt->execute();
        $this->close($this->db);
       
        return TRUE;

    }catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    throw new Exception("Error:not update ");
    return FALSE;
    
    }
}

}

?>