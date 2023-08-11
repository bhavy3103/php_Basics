<?php 
 
//start the session and get the data

session_start();

if(isset($_SESSION['username'])){
echo "Welcome " . $_SESSION['username'];
echo "<br> Your favorite category is ". $_SESSION['favCta']="Books";
echo "<br>";}
else{
    echo "Please login to continue";
}

// echo "We saved your session";


?>