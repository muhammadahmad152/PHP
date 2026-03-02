<?php


$conn = mysqli_connect("localhost", "root", "", "formhandling");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}


// $conn = mysqli_connect("localhost", "root", "", "formhandling");

// if(!$conn){
//     die("Connection Failed: " . mysqli_connect_error());
// }
?>  