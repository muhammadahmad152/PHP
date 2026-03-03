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
                                <td><?php echo $value['Message'];?></td>
                            <td>  <!-- Button troggle modal --> 
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?php echo $value['id'];?>">
                                Edit
                            </button>
                            </td>

                            <!-- Update modal Start -->

                            <div class="modal fade" id="edit<?php echo $value['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                             <div class="modal-content">
                            <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User Details</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                             <div class="modal-body">
                            
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $value['Name']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $value['Email']; ?>">
                                        </div>
                                        <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>

                                        <div class="input-group">
                                        <input type="password" 
                                             class="form-control" 
                                                id="password_<?php echo $value['id']; ?>" 
                                                name="password" 
                                             value="<?php echo $value['Password']; ?>">

                                    <span class="input-group-text" 
                                  onclick="togglePassword(<?php echo $value['id']; ?>)" 
                                  style="cursor:pointer;">👁️</span>
                                    </div>
                                    </div>
                                </form>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="button" class="btn btn-primary">Save changes</button>
                                 </div>
                             </div>
                        </div>
                     </div>
                    </div>
                            <!-- Update modal End -->
                        </tr>   
                            <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <script>
function togglePassword(id) {
    var passwordField = document.getElementById("password_" + id);

    if (passwordField.type === "password") {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
}
</script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
     <!-- <td>< ?php echo $value ['role'];?></td> -->
</body>
</html>