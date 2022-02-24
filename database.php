<?php
  //اتصال به پایگاه داده
  $connection = mysqli_connect("localhost", "root" ,"", "phonebook");
  
  if(mysqli_connect_errno() == 0){
     // print("ok");
  }
  else{
      print("error");
      print(mysqli_connect_error());
  }


?>