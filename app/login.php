<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="bootsrip4">
    <title>Interface Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<!-- start reigster seeion-->
   <header>
       <div class="container">
           <div class="logo ">
               <img src="image/logo.png" class="img-fluid">
           </div>
       </div>
   </header>
    <div class="container">
    <!--reigster-->
     <div class="row page-repair">
      <div class="register col-md-6  text-center">
         <h2 class="h1 text-center">Register New user</h2>
          <form action="logincontroler.php" method="post" novalidate>
              <div class="form-group">
                <input type="email" name="email" required class="form-control"aria-describedby="emailHelp" placeholder="PLZ Enter Your Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <input type="text" name="name" required class="form-control"  placeholder="PLZ Enter Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="userregister" required class="form-control"  placeholder="PLZ Enter Your User Name">
              </div>
              <div class="form-group">
                <input type="password" name="passwordregister" required class="form-control"  placeholder="PLZ Enter Your User Password">
              </div>
              <input type="submit"  name="submit" value='Register' required class="btn btn-outline-secondary mb-3 button">
          </form>
      </div>
      <!--loginn-->
      <div class="login col-md-6">
         <h2 class="h1 text-center">Login </h2>
          <form class="text-center" action="logincontroler.php" method="post" novalidate>
              <div class="form-group">
                <input type="text" required name="userlogin" class="form-control"  placeholder="PLZ Enter Your User Name">
              </div>
              <div class="form-group">
                <input type="password" required name="passwordlogin" class="form-control"  placeholder="PLZ Enter Your User Password">
              </div>
              <input type="submit" name="submit" value="Login" class="btn btn-danger button">
          </form>
      </div>
     </div>
    </div>
<!--end register seestion-->
     <footer class="text-center mt-3">
         <p > Copy Right &copy; <span class="main-color">SAFWAT</span></p>
     </footer>
     <div class="endingblack"></div>
 <!--  scripts file for bootstarp -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/holder.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>