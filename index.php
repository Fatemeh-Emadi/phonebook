<?php 
     include "database.php";
     $x = mysqli_query($connection,"SELECT * FROM contacts");
      
     
?>
<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    </head>
    <body style="background-color: rgb(167, 165, 165);">
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">Phonebook</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Show Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="addContact.php">Add Contact</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
      <div class="container">
      <table class="table table-dark table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($x as $contact):?>
    <tr>
      <th scope="row"><?php echo $contact["id"]; ?></th>
      <td><?php echo $contact["name"]; ?></td>
      <td><?php echo $contact["family"]; ?></td>
      <td><?php echo $contact["email"]; ?></td>
      <td><?php echo $contact["mobile"]; ?></td>
      <td><?php echo $contact["phone"]; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<form method="post" action="delete.php" >
  <input name="delete" type="submit" value="Delete" class="btn btn-danger">
</form>

       </div>   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    </body>
</html>