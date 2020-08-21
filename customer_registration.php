<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Registration</title>
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
    <title></title>
  </head>
  <body>


    <header>
      <?php
      include("base.php");
      ?>
    </header>
    <!-- <div class="container">
      <h1 class ="text-center text-capitalize pt-5">Customer Registration</h1>
      <hr class = "w-25 mx-auto pt-5">
      <div class ="w-50  mx-auto my-auto">
        <form action="check_login_c.php" method="post">
          <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" placeholder="Enter username" id="username">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" placeholder="Enter password" id="pwd">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div> -->

    <div class="container">

        <h1 class ="text-center text-capitalize pt-5">Customer Registration</h1>
        <hr class = "w-50 mx-auto pt-5">
          <div class ="w-50  mx-auto my-auto">

        <form  class="pb-3" action="check_regis_c.php" method="POST">


          <div class="form-group ">

            <div class="input-group">
              <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
            </div>
          </div>



          <div class="form-group ">

            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">

            </div>
          </div>



          <div class="form-group ">

            <div class="input-group">
              <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">

            </div>
          </div>



          <div class="form-group">

            <div class="input-group">
              <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">
            </div>
          </div>



          <div class="form-group">

            <div class="input-group">
              <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
            </div>
          </div>



          <div class="form-group">

            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
            </div>
          </div>


          <div class="form-group">

            <select class="form-control" name = "foodtype" required>
              <option disabled selected hidden>Preference</option>
              <option>Veg</option>
              <option>Non-veg</option>
            </select>
          </div>


          <div class="form-group ">
              <button class="btn btn-primary" type="submit" name="submit">Submit</button>
          </div>


        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="customer_login.php">Have an account? Login.</a></label>

        </form>

      </div>
      </div>

  </body>
</html>
