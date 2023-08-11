<?php 
 
//  what is session?
// Used to manage information across different pages so every time we don't need to login again and again

//verify the user login info
session_start();
$_SESSION['username']="Bhvay";
$_SESSION['favCta']="Books";

echo "We saved your session";


?>