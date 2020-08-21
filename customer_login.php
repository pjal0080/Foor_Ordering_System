<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style >
      *{
          margin: 0;padding: 0;font-family: 'Josefin Sans', sans-serif;
      }

    </style>
  </head>
  <body>
    <header>
      <?php
      include("base.php");
      ?>
    </header>
    <div class="container">
      <h1 class ="text-center text-capitalize pt-5"> Login Customer</h1>
      <hr class = "w-25 mx-auto pt-5">
      <div class ="w-50  mx-auto my-auto">
        <form action="check_login_c.php" method="post">
          <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" name = "username" placeholder="Enter username" id="username" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name = "password" placeholder="Enter password" id="pwd" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>






  </body>
</html>
