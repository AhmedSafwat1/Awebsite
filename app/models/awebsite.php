<?php
//   this class contant function which use more one time
class awebart
{
    function conectDb()
      {
        try{
            include_once "database.php";
            $vars = "C:/xampp/htdocs/awebsite/app/include/vars.php";
            $db = new database($vars);
            }catch(Exception $ex)
            {
                echo $ex->getMessage();
            }
            return $db;
      }
      function close($db)
      {
          $db->conn = null;

      }
}
?>