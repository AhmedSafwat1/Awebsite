
<?php
/********************************
 *awebsite
 *@author:Ahmed Safwat
 *class conect to database
********************************/
class database
{
    private $host;
    private $user;
    private $password;
    private $database;
    public $conn;
    function __construct($filename)
    {
        if(is_file($filename)) include $filename;
        else throw new Exception("error");
        $this->host = $host;
        $this->user = $user;
        $this->password = $pass;
        $this->database = $database;
        $this->connect();
        
        
        
    }
    function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database",  $this->user, $this->password,array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "set NAMES utf8",
            ));
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return TRUE;
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            return FALSE;
            }
    }
    function close()
    {
        $this->conn = null;;
    }
    
}
?>