<?php

// DATABASE CONNECT
$conn = mysqli_connect("localhost", "root", "", "muhammad_ahmad");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database Connected <br><br>";


// INSERT DATA 

$sql = "INSERT INTO users (name, email, age)
VALUES ('Muhammad Ahmad', 'muhammadahmad@gmail.com', 27)";

mysqli_query($conn, $sql);


// FETCH DATA 

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>

<h2>Users List</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['age']; ?></td>
</tr>
<?php } ?>

</table>

<?php
mysqli_close($conn);
?>