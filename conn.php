<?php
    $conn=mysqli_connect('localhost', 'root', '', 'blog');
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>