<?php 
 

session_start();
session_unset();
session_destroy();


// $_SESSION['username']="Bhvay";
// $_SESSION['favCta']="Books";

echo "<br> You are logout";


?>