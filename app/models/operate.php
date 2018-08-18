<?php
 include_once "./include/autoloader.php";
 autoloader('awebsite');
 class operate extends awebart
 {
    private $tablename ;
    private $db;
    private $id;
    public $data;
    function __construct($table)
    {
        $this->tablename = $table;
        
    }
    
    function delete_data_b_c_colum($cond,$colum)
    {
        $query = " delete FROM $this->tablename WHERE $colum = '$cond'";
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

    // ==============================================
    function getdata_last_row()
    {
        
        try{
            $this->db = $this->conectDb();
            $query = "select * from $this->tablename ORDER BY id DESC LIMIT 1";
            $stmt = $this->db->conn->prepare($query);
            $stmt->execute();
        // set the resulting array to associative
        
            $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
            $this->close($this->db);
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

    // ===========================================================================

function update_by_colum_date($colum,$cond,$data)
{
    $query  = "update $this->tablename set ";
    foreach ($data as $key => $value) {
        # code...
        $query .= $key." ='".$value."' , ";
    }
    $apt ="*/*-";
    $query .= $apt;
    $query = str_replace(', '.$apt," ",$query);
    $query .= " where $colum = '$cond'"; 
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
// ================================================================================
function add_row($data)
    {
        $this->db = $this->conectDb();

        foreach ($data as $key => $value) {
            $keys[] = $key;
            $values[] =$value;
        }
        $tablkey = implode(",",$keys);
        $tablevalue  = "'".implode("','",$values)."'";
        $query = "insert into $this->tablename($tablkey) values($tablevalue)";
        try{
            $this->db->conn->exec($query);
            $this->close($this->db);
            return TRUE;
        
        }catch(PDOException $e)
        {
        echo "<br>" . $e->getMessage();
        throw new Exception("Error:not add ");
        return FALSE;
        
        }

    }
    
}
?>