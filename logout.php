<?php
session_start();
?>


<?php 
    
if(isset($_SESSION['username'])) {

session_start();
session_unset();
session_destroy();

header('location:login.php');
 
}  else {
    echo "error";
 }
 ?>
