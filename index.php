<?php
if (isset($_POST['name'])){
$insert = false;
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to this database failed due to" . mysqli_connect_error());

}
//echo "Sucess Connected to the DataBase";
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email =  $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;

if ($con->query($sql) == true)
{
    $insert = true;//echo "sucessfully inserted";
}
else {
    echo "ERROR: $sql <br> $con-> error";
}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="cwh" src="cwh.jpg" alt="Wallpaper">
    <div class="container">
        <h1>Welcome to Travel Form</h1>
        <p>Enter your Details</p>
        <?php
        if ($insert == true){
        echo "<p class= 'submitMsg'>Thanks for Submitting Form</p>";
        }
        ?>
        

        <form action="index.php" method="post"></form>
        <input type="text" name="name" id="name" placeholder="Enter your Name">
        <input type="text" name="age" id="age" placeholder="Enter your Age">
        <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
        <input type="text" name="email" id="email" placeholder="Enter your Email">
        <input type="text" name="Phone" id="Phone" placeholder="Enter your PhoneNo">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
        <button class="btn">SUBMIT</button>
    </div>
<script src="index.js"></script>
</body>
</html>