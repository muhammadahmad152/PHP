<?php
include 'connection.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    // echo $name .'<br>' .$email .'<br>' .$password .'<br>' .$address; 

    $insert = mysqli_query($econ, "INSERT into register(Name, Email, Password, Address)VALUES
    ('$name', '$email', 'password', 'address')");

    if($insert){
        // echo "<script> 
        // alert('Data inserted successfully')
        // location.assign('register.php')
        // </script>";

        herder('location: register.php');
    }
}

?>