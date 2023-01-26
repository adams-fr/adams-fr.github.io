<?php

include('dbcon.php');

$sommepu = mysqli_query($conn,"SELECT sum(note1) FROM students") or die(mysqli_error());
           while($rows = mysqli_fetch_array($sommepu)){
                echo $rows['sum(note1)'];
           }


?>