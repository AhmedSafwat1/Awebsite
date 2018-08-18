<?php
 include "models/awebsite.php";
 class updata extends awebart
 {
    private $tablename ;
    private $db;
    private $id;
    public $data;
    function __construct($table,$d)
    {
        $this->data = $db;
        $this->tablename = $table;
        $this->db = $this->conectDb();
        
    }
    function updbyid($id)
    {
        $query  = "update $this->tablename set";
        foreach ($this->data as $key => $value) {
            # code...
            $query .= "'".$key."'='".$value."'";
        }
        $query .= "where id = $id"; 
        echo "$query";
    }

 } 
?>