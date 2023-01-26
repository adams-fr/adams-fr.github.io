<?php
    require 'dbcon.php';
   

    //   $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name', '$email','$heure', '$phone','$course')";
      
       
                                   
      $query = "SELECT SUM(heure) AS sum FROM Students";
      $query_run = mysqli_query($conn, $query);
      while($row = mysqli_fetch_assoc($query_run)){
        $output = " total"." ".$row['sum'];
        
        
      
      }
      

    

?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- <style>
        .container {
            margin-top: 260px;
            width: 650px;
        }
    </style> -->
    <title>Document</title>
</head>
<body>
    

        
    <div class="container">
  
     
 
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>student add
                        <a href="" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                <table class="table table-striped" >
            
            <thead style="text-align: center ;" >
                <tr >
                <th>ID</th>
                <th >Nom</th>
                <th>Prenom</th>
                <th>heure</th>
                <th>numero</th>
                <th>course</th>
                <th>action</th>
                <th>produit</th>
               
                <th>somme</th>
            </tr>
            </thead>
        
  
            <tbody style="text-align: center ;" >
              <?php
                    $query = "SELECT * FROM students";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0){

                        foreach($query_run as $students){
                            //  echo $students["heure"];
                            
                            ?>
                               <tr>
                                <td><?= $students["id"];?></td>
                                <td><?= $students["name"];?></td>
                                <td><?= $students["email"];?></td>
                                <td><?= $students["heure"];?></td>
                                <td><?= $students["phone"];?></td>
                                <td><?= $students["course"];?></td>
                              
                                <td>
                                    <a href="student-edit.php?id=<?= $students["id"]?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">delete</a>
                                </td>
                                <td>
                                    <?php 
                                   
                                    $produit = $students["id"]*$students["heure"];
                                    echo $produit;
                                 
                                    
                                    ?>
                                </td>
                                <td><?=
                            
                                        $produit;
                                ?></td>

                               
                               </tr>
                         <?php
                        }
                    }
                    else{
                        echo "<h5>No record found </h5>";
                    }
              ?>
            
            </tbody>
      
    </table>
    <?php 
                echo $output;  
        ?> 
          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>