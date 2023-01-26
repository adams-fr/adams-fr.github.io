<?php
$serveur="localhost";
$user="root";
$pass="";

try {
   $conn = new PDO("mysql:host=$serveur;dbname=blog",$user,$pass);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete = $conn->prepare("INSERT INTO students(note1,note4) VALUES(:note1,:note4)");
// $requete->bindParam(':note',$_POST['note']);
$requete->bindParam(':note1',$_POST['note1']);
// $requete->bindParam(':note2',$_POST['note2']);
$requete->bindParam(':note4',$_POST['note4']);
// if(isset($_POST['valider'])){




   // if(!empty($_POST['note']) && !empty($_POST['note1']) && !empty($_POST['note2']) && !empty($_POST['note4']))
   // {

    



   // }
   
   


// $requete->bindParam(':note',$note);
// $requete->bindParam(':note1',$note1);
// $requete->bindParam(':note2',$note2);
// $requete->bindParam(':note4',$note4);

   $requete->execute(); 

   echo "bien enregistrer";



} catch (PDOException $e) {
  
   echo "Erreur".$e->getMessage();
}




 









?>

