<?php
// for loop 
// for($a= 1; $a <= 10; $a++){
//     echo $a.'<br>';
// }

// for($a =10; $a >= 1; $a--){
//     echo $a.'<br>';
// }

// While loop 

// $a = 1;
// while ($a<= 10){
//     echo $a. 'this is while loop <br>';
//     $a++;
// }

// Do while loop
// $a = 1;
// do{
//     echo $a.'this is do while loop <br>';
//     $a++;
// }
// while ($a<= 0);

// Break statement 

// for($a = 1; $a <= 10; $a++){
    
//     if($a == 6){
//         break;
//     }
//         echo $a .'this is break statement <br>';
//         }
//         die();
//         echo 'hello loop';

        // continue statement
        // for($a = 1; $a <= 10; $a++){

        // if ($a == 6 || $a == 3){
        //     continue;
        // }
        // echo $a. 'this is continue statement <br>';
        // }

        // ARRAYS 

        // ForEach Loop 
        
        $books = ['XML', 'JAVA', 'RUBY', 'PYTYHON', 'MYSQL', 8769, '<br>'];

        $books = array ('XML', 'PHP', 'HTML', 'CSS', 'MYSQL', 6867, '<br>');

            // echo $books;

            echo $books[3]. $books[0];

            echo '<pre>';
            var_dump($books);
            print_r($books);
            echo '<pre>';


        foreach($books as $value){

            echo $value .'<br>';
        }
?>