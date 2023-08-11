<?php 
 
 // cookie store non sensitive information don't store username and password into cookies.

echo "welcome to the world of cookies";
setcookie("category","Books",time() +86400,"/");

echo "<br> The cookies is set"

//   '/ ' means throughout the website 

?>