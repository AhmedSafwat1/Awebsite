<?php
class uplooad
{
    private $allowedext ;
    private $maxsize ;
    private $file;
    private $uploaddirectory;
    private $fileurl=[];
    private $filename=[];
    function __construct($file,$allowedext,$maxsize,$uploaddirectory)
    {
        if(is_int($maxsize) && is_array($allowedext))
        {
            $this->file=$file;
            $this->allowedext = $allowedext;
            $this->maxsize = $maxsize;
            $this->uploaddirectory = $uploaddirectory;
        }
        else
        {
            throw new Exception("Error Processing Request file extenstion or max size");
            
        }

    }
    function upload()
    {
        $files = $this->file;
        $allowedext = $this->allowedext;
        $destion = $this->uploaddirectory;
        for($i=0;$i<count($files['name']);$i++)
            {
            $filenaem = $files['name'][$i];
            $fileext = strtolower( end(explode('.',$filenaem)));
            $filesize = $files['size'][$i];
            $ereor = array();
            $filetemp = $files['tmp_name'][$i];
            if(in_array($fileext,$allowedext) === FALSE)
            {
                $ereor['fileextenstion'] = "extenstion not allowed";
            }
            if ($filesize > $this->maxsize) {
                $ereor ['filesize'] = 'size must 2kb only'; 
                # code...
            }
            if(empty($ereor))
                {
                $random = rand(0,99);
                $this->filename[$i] = $random.date('d-m-y')."_".$filenaem;
                $dest =$destion.$random.date('d-m-y')."_".$filenaem;;
                $this->fileurl[] = $dest;
                move_uploaded_file($filetemp,$dest);
               
                } 
                else{
                foreach ($ereor  as $value) {
                    # code...
                    throw new Exception("Error Processing Request".$value);
                    
                }
                }
            }
            return TRUE;
    }
    function geturl()
    {
        return $this->fileurl;
    }
    function getname()
    {
        return $this->filename;
    }
   
}     
      
      
?>