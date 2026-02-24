<?php

// Associative Array 

// $student = ['Name'=> 'ali', 'Email' => 'ali@gmail.com', 'Password' => 'ali123', 'age' => 20];

// // echo $student;
// echo $student['Email']. $student ['age'];

// echo '<pre>';
// var_dump($student);
// print_r($student);
// echo '</pre>';

// foreach($student as $value){
//     echo $value .'<br>';
// }

// Multi dimentional 
// Index Array 
// $courses = [
//     ['HTML', 'PHP', 'JS', 'MYSQL', 'FLUTTER'],
//     ['LARAVEL', 'JAVA', 'C', 'C++', 'C#'],
//     ['RUBY', 'DART', 'JSON', 'ANGULAR', 'XML'],
// ];

// // echo $courses;
// echo $courses[1][3] . $courses[2][3];

// foreach($courses as $data){
//     // Nested loop 
//     foreach($data as $value){
//         echo $value.'<br>';
//     }
// }

// Associative Array 
$student = [
    ['Name' => 'ali', 'Email' => 'ali@gmail.com', 'age' => 20],
    ['Name' => 'hamza', 'Email' => 'hamza@gmail.com', 'age' => 37],
    ['Name' => 'umar', 'Email' => 'umar@gmail.com', 'age' => 25],
    ['Name' => 'usman', 'Email' => 'usman@gmail.com', 'age' => 33],
];

echo $student[1]['Email']. '&nbsp;' . $student[3]['Name'];

foreach($student as $value){
    $value['Name'].'<br>';
    echo $value['Email']. '<br>';
    echo $value['age']. '<br>';
}

foreach($student as $value){

    foreach($value as $key => $data){

    // ?>

    <h3>






    }
}
?>