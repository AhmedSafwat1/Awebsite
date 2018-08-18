<?php
 class del_F
 {
    private $file;
    function __construct($files)
    {
        if(is_array($files))
        {
           $this->files = $files;
           $this->delete_file();
        }
        else{
            throw new Exception("Error Processing Reques File not array");
            
        }
    }
    function delete_file()
    {
        foreach ($this->files as $file) {
            # code...
            if(file_exists($file))
            { 
                unlink($file);
                
                
            }
            else{
                throw new Exception("Error Processing file not xist");
                return FALSE;
            }
        }
        return TRUE;
       
    }
 } 
?>