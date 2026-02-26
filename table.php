<!DOCTYPE html>
<html>
<head>
    <title>PHP Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 50px auto;
            font-family: Arial;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>

<h2 align="center">Student Data Table</h2>

<?php
$students = [
    ["Muhammad Ahmad", "Front-End Developer", 20],
    ["Talha", "UI Designer", 21],
    ["Hamza", "Back-End Developer", 22],
    ["Farhan", "Full Stack Developer", 23]
];
?>

<table>
    <tr>
        <th>Name</th>
        <th>Skill</th>
        <th>Age</th>
    </tr>

    <?php
    foreach($students as $student){
        echo "<tr>";
        echo "<td>".$student[0]."</td>";
        echo "<td>".$student[1]."</td>";
        echo "<td>".$student[2]."</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>