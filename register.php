<?php
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Address = $_POST['Address'];
    $year = $_POST['year'];
    $con =mysqli_connect("localhost", "root","","database");

    $qry = "insert into db values ('$name','$email',$phone,'$Address','$year')";
    mysqli_query($con,$qry);
    $res = mysqli_affected_rows($con);
    if ($res >0)
    $msg="record inserted";
    else
    $msg ="entry failed".mysqli_error($con);

mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="logo.png" alt="logo"></div>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">About</a> </li>
            <li><a href="">Register</a></li>
            <li><a href="">Search for players</a></li>

            <li><a href="#Contact">Contact Us</a> </li>
        </ul>
        <div class="rightNav v-class-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <div class="container mt-8" >
    <h1>Pleae Enter the details to register with us</h1>
    <hr>

    
<form method="POST">
  <div class="form-group row">
    <label for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone number" class="col-sm-2 col-form-label">Enter your Phone Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" id="Phone_number" placeholder="Phone_number">
    </div>
  </div>
  <div class="form-group row">
    <label for="Address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" name="Address" class="form-control" id="address" placeholder="Address">
    </div>
  </div>
  <div class="form-group row">
    <label for="Year" class="col-sm-2 col-form-label">Type of sport</label>
    <div class="col-sm-10">
      <input type="text" name="sport" class="form-control" id="year" placeholder="Name of sport">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Terms & Condition
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="btn" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>