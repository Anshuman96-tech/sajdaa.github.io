<?php

if(isset($_POST['submit'])) {  
    $host = "localhost:3306";  
    $user = "root";  
    $password = '';  
    $db_name = "mca";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    
      $email = $_POST["email"];
      $pass=$_POST["pass"];
      
        
          //to prevent from mysqli injection  
          $email = stripcslashes($email);  
          $pass = stripcslashes($pass);  
          $email = mysqli_real_escape_string($con, $email);  
          $pass = mysqli_real_escape_string($con, $pass);  
          
          $sql = "select * from login2 where email = '$email' and pass = '$pass'";  
          $result = mysqli_query($con, $sql)
          or die(mysqli_error($con));  
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
         
          $count = mysqli_num_rows($result);  
            
          if($count == 1){  
              echo '<script>window.location.href="donate.html";</script>';  
          }  
          else{  
              echo "<h1> Login failed. Invalid username or password.</h1>";  
          }  }   
  ?>