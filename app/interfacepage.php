<?php
session_start();
 if(!isset($_SESSION['user']))
 {
     header('location:logincontroler.php');
    //  include 'logincontroler.php';
     die();
 }
//  print_r($rule);
 $sactiv = '';
 $pageactiv = '';
 $baactiv = '';
 $secactve = '';
 $libactiv = '';
 $homeac = '';
 $commac ='';

 if(isset($_GET['page']) && $_GET['page'] == 'mainsetting' )
 {
    $sactiv = 'active';
    $pageactiv = '';
    $baactiv = '';
    $secactve = '';
    $libactiv = '';
    $homeac = '';
    $commac ='';
 }
 if(isset($_GET['page']) && $_GET['page'] == 'page' )
 {
    $pageactiv = 'active';
    $baactiv = '';
    $secactve = '';
    $libactiv = '';
    $homeac = '';
    $commac ='';
    $sactiv = '';
 }
 if(isset($_GET['page']) && $_GET['page'] == 'secttion' )
 {
    $secactve= 'active';
    $sactiv = '';
    $pageactiv = '';
    $baactiv = '';
    $libactiv = '';
    $homeac = '';
    $commac ='';

 }
 if(isset($_GET['page']) && $_GET['page'] == 'library' )
 {
    $libactiv = 'active';
    $sactiv = '';
    $pageactiv = '';
    $baactiv = '';
    $secactve = '';
    $homeac = '';
    $commac ='';
 }
 if(isset($_GET['page']) && $_GET['page'] == 'banner' )
 {
    $baactiv = 'active';
    $sactiv = '';
    $pageactiv = '';
    $secactve = '';
    $libactiv = '';
    $homeac = '';
    $commac ='';
 }
 if(isset($_GET['page']) && $_GET['page'] == 'comment' )
 {
    $commac = 'active';
    $sactiv = '';
    $pageactiv = '';
    $baactiv = '';
    $secactve = '';
    $libactiv = '';
    $homeac = '';
 }
 if(!(isset($_GET['page'])))
 {
     $homeac = 'active';
     $sactiv = '';
    $pageactiv = '';
    $baactiv = '';
    $secactve = '';
    $libactiv = '';
    $commac ='';
 }
 
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="bootsrip4">
    <title>Interface Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
   <div class="container">
        <!-- start header -->
     <header>
      <div class="row no-gutters align-items-end">
          <div class="col-md-6">
              <div class="logo text-center text-md-left ">
                  <img src="image/logo.png" class="img-fluid">
              </div>
          </div>
          <div class="col-md-6 text-center text-md-right ">
              <div class="headinfo">
                  Welcom <?php
                  if(isset($_SESSION['user']))
                  {
                      echo $_SESSION['user']."    <a  class='btn btn-outline-danger'href=\"?page=../logout\">Logout</a>";
                  }
                  ?>
              </div>
          </div>
      </div>
       
     </header>
     <!--end header-->
     <!-- start containt -->
     <div class="containt row ">
      <div class="col-md-4">
         <aside class="aside-content">
             <ul class="nav nav-pills flex-column list-unstyled">
              <li class="nav-item">
                <a class="nav-link <?php echo $homeac ;?>" href="interfacepage.php">Home Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $sactiv ;?>" href="?page=mainsetting">Main Setting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $secactve ;?>" href="?page=secttion">Section</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $pageactiv;?>" href="?page=page">Pages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $commac ;?> " href="?page=comment">Comments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $libactiv ;?> " href="?page=library">Librairy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $baactiv ;?>" href="?page=banner">Banner</a>
              </li>
            </ul>
         </aside>
      </div>
      <div class="col-md-8">
          <?php
           if(isset($_GET['page']))
           {
               $url = "controller/".$_GET['page'].".php";
               if(is_file($url))
               {
                   include $url;
               }
               else
               {
                   echo 'error  this is not fille';
               }
           }
          else
          {
              include 'controller/mainpage.php';
          }
          ?>
      </div>
       
     </div>
     <!-- end containt -->
     
    
   </div>
   <!--start footer-->
     <footer class="text-center mt-3">
         <p > Copy Right &copy; <span class="main-color">SAFWAT</span></p>
     </footer>
     <div class="endingblack"></div>
     <!--end footer-->
    <!--  scripts file for bootstarp -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/holder.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>