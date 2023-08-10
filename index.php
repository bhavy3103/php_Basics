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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel Form</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <img class="bg" src="bg.jpeg" alt="Vgec">

    <div class="container">
        <h2>Welcome to Vgec trip Form</h2>

        <p>Enter your details and submit to confirm your participation </p>

        <?php
        if($insert=true){
            echo '<p class="submitMsg">Thanks for submitting your details</p>';
        } 
    ?>

        <form action="index.php" method="post">

            <input type="text" name="name" id="name" placeholder="Enter your name">

            <input type="text" name="age" id="age" placeholder="Enter your age">

            <input type="text" name="gender" id="gender" placeholder="Enter your gender">

            <input type="email" name="email" id="email" placeholder="Enter your email">

            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">

            <textarea name="Description" id="Description" cols="50" rows="10"
                placeholder="Enter any other information here">
            </textarea>


            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->



        </form>


    </div>

    <script src="index.js"></script>

    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt1`) VALUES ('1', 'bhavy', '19', 'male', 'bhavy@gmail.com', '9999999999', 'Hello ', current_timestamp()); -->
</body>

</html>