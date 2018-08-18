
<?php
include_once "./include/function.php";
if(@$_GET['page'])
{
    $url = "site/".$_GET['page'].".php";

    if(is_file($url))
    {
        include_once $url;
    }
    else{
        echo "request not foound";
    }
}
else{
 include_once "site/index.php" ;
}
?>