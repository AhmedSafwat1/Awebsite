<?php
////`site_name`, `site_url`, `site_description`, `site_email`, `site_tages`, `site_homepanel`, `fb`, `fw`, `rss`, `yt`
include_once "models/awebsite.php";
class add extends awebart
{
    private $tablename ;
    private $db;
    function __construct($table)
    {
            $this->tablename = $table;     
    }
 function adddata($data)
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