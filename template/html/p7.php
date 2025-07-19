<?php

$host="localhost";
$dbname="sorrentino";
$username = "root";
$password  ="";

if (isset($_POST['registrer'])){
   
    $phone_number=$_POST["phone_number"];
// }
$conn=mysqli_connect( hostname: $host, 
                database: $dbname,
                password: $password, 
                username: $username );
 
if(mysqli_connect_errno()){
    die("Connection error: " .mysqli_connect_errno());
}

$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];



$sql= "INSERT INTO SORRENTINO_SKINBOOSTER_L (first_name, last_name,phone_number,email)
        VALUES ('$first_name','$last_name','$phone_number','$email')";
        
$stmt = mysqli_stmt_init($conn);

mysqli_query($conn,$sql);
header('location:index.html');
}