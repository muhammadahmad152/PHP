<?php
    $con = myslqi_connect('localhost', 'root', '', 'file_uploading');

    if(isset($_POST['Upload-file'])){
        $image_name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $image_size = $_FILES['file']['size'];
        $image_type = pathinfo($image_name, pathinfo_EXTENSION);

        $destination = 'image/' .$image_name;

        // move_uploaded_file($tmp_name, $destination);

        if($image_size <= 100000000){
            
        if($image_type == 'jpg' || $image_type == 'jpeg' || $image_type == 'png'){

        if(move_uploaded_file($tmp_name, $destination)){

        $query = mysqli_query($con, "INSERT INFO file_uploading(file) VALUES ('$image-name')");

        if($query){
            
            echo
            '<script>
            alert("file upload successfully")
            location.assign("fetch_image.php")
            </script>';
        }
    }
        }else{

            echo 
            '<script>
            alert("unsupported format")
            </script>';
        }

        }else{

            echo
            '<script>
            alert("file size should be less than 5MB")
            </script>';
        }

        // echo 
        // print_r($_FILES['file']);
        // echo '</pre>';

    }
?>