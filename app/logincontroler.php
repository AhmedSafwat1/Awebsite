<?php
/*****************************************
 * @author:login controller
 * this is controller for login 
******************************************/
include_once "include/autoloader.php";
if($_POST)
{   #login
    
    if(isset($_POST) && $_POST['submit'] == "Login")
    {
        echo "ok";
        try
        {
            $v = new validtor() ; 
            $uername =$v->sentize($_POST['userlogin'],'srt');
            $password = $_POST['passwordlogin'];
            $rule =  array(
                'userlogin'=>'check_str2|check_Empty',
                'passwordlogin'=> 'check_Empty'
            );
            $v->validate($_POST,$rule);

        }catch(Exception $ex)
        {
            echo $ex->getMessage();
            die('');
        }
       
        try{
            include "models/loginclass.php";
            $login = new login($uername,$password);
            if($login)
            {
               echo "founded";
               session_start();
               $_SESSION['user'] = $uername;
               header("location:interfacepage.php");
            }
        }catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
    // reigster
    if(isset($_POST) && $_POST['submit'] == "Register")
    {
        
        try
        {
            $v = new validtor() ; 
            $data['username'] =$_POST['userregister'];
            $data['email'] =$v->sentize($_POST['email'],'email');
            $data['name'] = $_POST['name'];
            $data['password'] = $_POST['passwordregister'];
            $rule =  array(
                'userregister' => 'check_Empty',
                'email' => 'check_Empty|check_Email',
                'name' => 'check_Empty|check_str2',
                'passwordregister' => 'check_Empty'
            ); 
        
         $v->validate($_POST,$rule);  
        }catch(Exception $ex)
        {
            echo $ex->getMessage();
            die('');
        }
          
        $data['username'] = $_POST['userregister'];
        $data['email'] = $_POST['email'];
        $data['name'] = $_POST['name'];
        $data['password'] = $_POST['passwordregister'];
        
        try
        {
            
            include "models/registerclass.php";
            $register = new register($data);
            echo "<script>alert('del Sucessful');</script>";
            header("location:interfacepage.php");

        }catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
    
    //`id`, `name`, `username`, `password`, `email`
}
else{
    include 'login.php';
}
?>