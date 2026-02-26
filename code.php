<?php
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    echo $name .'<br>' .$email .'<br>' .$password .'<br>' .$address; 
}

?>