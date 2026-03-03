<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <table class="table table-bordered table-hover table-striped">

                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Massage</th>
                    <th>Role</th>
                </tr>

                <?php

                    include 'connection.php';

                    $query = mysqli_query($conn , "SELECT * from register");
                    // echo $query;

                    foreach($query as $value){
                        ?>
                            <tr>
                                <td><?php echo $value['id'];?></td>
                                <td><?php echo $value['Name'];?></td>
                                <td><?php echo $value['Email'];?></td>
                                <td><?php echo $value['Password'];?></td>
                                <td><?php echo $value['Massage'];?></td>
                                <td><?php echo $value['role'];?></td>
                            </tr>

                            <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>