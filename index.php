<?php
$insert=false;
if(isset($_POST['name'])){
    
    $server= "localhost";
    $username="root";
    $password="";

    $connection = mysqli_connect($server,$username,$password);

    if(!$connection){
        die("Connection to this database failed due to". mysqli_connect_error());
    }
    // echo "Successfully connecting to the database";

    $name= $_POST['name'];
    $gender= $_POST['gender'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $Description= $_POST['Description'];

    // echo "<br> <br>";
    $sql = "INSERT INTO `vgectrip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt1`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$Description', current_timestamp())";

    // echo $sql;

    if($connection-> query($sql)==TRUE){
        // echo "Successfully inserted";
        $insert=true;
    }
    else{
        echo "Error: $sql <br> $connection->error";
    }

    $connection->close();
}
?>

