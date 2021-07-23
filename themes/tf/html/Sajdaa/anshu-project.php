<?php

if(isset($_POST['submit'])) {  
   
      $name = $_POST["name"];
      $email = $_POST["email"];
      $pass=$_POST["pass"];
      $cpass=$_POST["cpass"];
      echo "New record  ".$name ." " .$email." " .$pass. " ". $cpass;

      $c=mysqli_connect("localhost:3306","root","");
      mysqli_select_db($c,"mca");
      $q="insert into login2 values('$name','$email','$pass','$cpass')";
    
      if (mysqli_query($c, $q)) {
          echo '<script>window.location.href="login.html";</script>';
        } 
        else {
          echo"Error: " . $q . "<br>" . mysqli_error($c);
  } 
}
?>