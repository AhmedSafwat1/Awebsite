<?php
////`site_name`, `site_url`, `site_description`, `site_email`, `site_tages`, `site_homepanel`, `fb`, `fw`, `rss`, `yt`
include_once "models/awebsite.php";
class add extends awebart
{
    private $data;
    private $tablename ;
    private $db;
    function __construct($data,$table)
    {
       if(is_array($data))
       {
            $this->data = $data;
            $this->tablename = $table;
            $this->db = $this->conectDb();
            $this->adddata();
            $this->close($this->db);
       }
       else
       {
           throw new Exception("Error: not array");
           
       }
    }
    private function adddata()
    {
        foreach ($this->data as $key => $value) {
            $keys[] = $key;
            $values[] =$value;
        }
        $tablkey = implode(",",$keys);
        $tablevalue  = "'".implode("','",$values)."'";
        $query = "insert into $this->tablename($tablkey) values($tablevalue)";
        try{
            $this->db->conn->exec($query);
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