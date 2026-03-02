<?php
include 'connection.php'; // Ensure $conn exists here

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $message = $_POST['message'];

    $stmt = mysqli_prepare($conn, "INSERT INTO register (Name, Email, Password, Message) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password, $message);

    if(mysqli_stmt_execute($stmt)){
        header('Location: register.php'); // Redirect on success
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>