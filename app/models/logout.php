<?php
// logout to main page
session_destroy();
header("location:interfacepage.php");
?>