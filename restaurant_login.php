
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Login</title>
    <?php include('base_link.php'); ?>
  </head>
  <body>
    <header>
      <?php
      include("base.php");
      ?>
    </header>
    <div class="container">
      <h1 class ="text-center text-capitalize pt-5"> Login Restaurant</h1>
      <hr class = "w-25 mx-auto pt-5">
      <div class ="w-50  mx-auto my-auto">
        <form action="check_login_r.php" method="post">
          <div class="form-group">
          <label for="name">Restaurant:</label>
          <input type="text" class="form-control" name="name" placeholder="Enter restaurant" id="username" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd" required>
        </div>
        <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
    </form>
      </div>
    </div>



  </body>
</html>
