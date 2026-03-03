<?php

include 'connection.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $message = $_POST['message'];

    $sql = "INSERT INTO register (Name, Email, Password, Message) 
            VALUES ('$name', '$email', '$password', '$message')";

    if(mysqli_query($conn, $sql)){
        header("Location: fatch.php");
        exit();
    } else {
        die("Insert Failed: " . mysqli_error($conn));
    }
}


// include 'connection.php';

// if(isset($_POST['register'])){

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//     $message = $_POST['message'];

//     $stmt = mysqli_prepare($conn, "INSERT INTO register (Name, Email, Password, Message) VALUES (?, ?, ?, ?)");
//     mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password, $message);

//     if(mysqli_stmt_execute($stmt)){
//         header('Location: register.php');
//         exit();
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }
// }
?>