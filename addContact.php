
<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>

<form action="add.php" method="post">
<div class="container bg-dark rounded-3">
<div class="row mt-5">
  <h2 class="mt-3 ms-5" >Add New Contact</h2>
</div>
<div class="row mt-4">
  <div class="col">
  <label for="inputEmail4" class="form-label mt-4 ms-5"  >First Name</label>
    <input type="text" class="form-control ms-5"  aria-label="First name" name="name" >
  </div>
  <div class="col">
  <label for="inputEmail4" class="form-label mt-4 ms-5" >Last Name</label>
    <input type="text" class="form-control ms-5"  aria-label="Last name" name="family">
  </div>
</div>
<div class="row mt-5">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label ms-5" >Email</label>
    <input type="email" class="form-control ms-5" id="inputEmail4" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label ms-5" >Mobile Number</label>
    <input type="text" class="form-control ms-5" id="inputPassword4" name="mobile">
  </div>
</div>
<div class="row mt-5">
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label ms-5" >Phone Number</label>
    <input type="text" class="form-control ms-5" id="inputPassword4" name="phone">
  </div>
  <div class="col-md-6">
  <button type="submit" class="btn btn-primary mt-4 ms-5" id="btn1">Save Contact</button>
  </div>
</div>

</div>


</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
 </body>
</html>