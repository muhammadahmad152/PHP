<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    <h1 class="text-center mt-3">Registration form</h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto"> 
                <form action="code.php" method="post">
                    <input type="text" placeholder="Enter your name" class="form-content mt-3" name="name">
                    <input type="text" placeholder="Enter your email" class="form-content mt-3" name="email">
                    <input type="text" placeholder="Enter your password" class="form-content mt-3" name="password">
                    <input type="text" placeholder="Enter your address" class="form-content mt-3" name="address">

                    <button class="btn btn-dark mt-3" name="register">Register</button>
                </form>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>