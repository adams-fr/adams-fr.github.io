<?php
    require 'dbcon.php';
    if(isset($_POST['save-student'])){

      $name= mysqli_real_escape_string($conn, $_POST['name']);
      $email= mysqli_real_escape_string($conn, $_POST['email']);
      $heure= mysqli_real_escape_string($conn, $_POST['heure']);
      $phone= mysqli_real_escape_string($conn, $_POST['phone']);

      $course= mysqli_real_escape_string($conn, $_POST['course']);

      $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name', '$email','$heure', '$phone','$course')";
    

      $query_run = mysqli_query($conn, $query);

      if($query_run){
        $_SESSION['message'] = "student creaed successfully";
        header("Location: index.php");
        exit(0);
      }


    }

?>