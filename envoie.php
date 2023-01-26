<style>
.container1 {
    /* margin-top: 150px; 
     width: 750px; */
    text-align : center;
    align
    /* padding: 50px; */
    /* align-items:center */
}
.paragraphe{
    text-align : center;
}
h4{
    text-align :center;
}
h2{
    text-align :center;
}
.para{
    text-align :center;
}
</style>
<title>Document</title>
</head>

<body>
<!--   
<div class="container"  >
<h1 align="center">tableau de donnees</h1>
<div class="table-responsive">
<table class="table table-striped" >
    
        <thead style="text-align: center ;" >
            <tr >
            <th >Nom</th>
            <th>Prenom</th>
            <th>numero</th>
            <th>note</th>
        </tr>
        </thead>
    

        <tbody style="text-align: center ;" >
            <tr>
            <td >abanda</td>
            <td>jean</td>
            <td>904992</td>
            <td>13</td>
        </tr>
        <tr>
            <td >abanda</td>
            <td>jean</td>
            <td>904992</td>
            <td>13</td>
        </tr>
        <tr>
            <td >abanda</td>
            <td>jean</td>
            <td>904992</td>
            <td>13</td>
        </tr>
        </tbody>
  
</table>
</div> table-borderd
</div> -->

<form action="test.php" method="post" class="container">


<h2>INSTALLATION SOLAIRE DOMESTIQUE</h2><br>
<P>Pas besion d'etre un expert pour connaitre toutes les etapes INSTALLATIONS SOLAIRES DOMESTIQUES, l'application vous oriente dans chaque etape </P>
   <P style="color: red;"> NB: les cases qui ne seront pas utilisees dans le tableau completez les par des zeros</P><br>
<p class="para"><strong>1.ETAPE : Trouvez la puissance journaliere des equipes et l'energie consommee</strong> </p>
<table class="table table-bordered" class="col-sm-6" >
    <tr>
        <th>APPAREILLAGES</th>
    <th>PUISSANCE EN (WATT)</th>
    <th>TEMP D'UTILISATION EN (HEURE)</th>
    <th>ENERGIE CONSOMMER (EC = P*t)</th>
    <th>ENERGIE CONSOMMER (EC = P*t)</th>
    </tr>


 <?php
    require_once('save.php');


$matiere = ['REFRIGERATEUR','CLIMATISATION','ORDINATEUR PORTABLE','TELEVISEUR','FER A REPASSER','ECLAIRAGE'
,'CHAUFFE EAU','CHARGEUR TELEPHONE','CONGELATEUR','MIXEUR MOULINEX','FOUR','MICRO-ONDE','LAVE VAISSELLE','LAVE LINGE'];

$coefficient = [5,7,3,4,2,1,3,0,6,9,3,8,6,4,5];
// $note1 = array();
// global $note = array();
// global $note1 = array();
//tester l'existance d'un premier envoie

//initialisation de la variation somme notes

          

// declaration des liste

 $sommeNote =0;
 $sommepu = 0;
//  $note1 = array();
foreach ($matiere as $cle => $valeur) {
    ?>

<tr>
<td><?=$valeur?></td>
<td><input type="number" name="note1"  ></td>
<td><input type="number" step="any" name="note4" ></td>
<td><?=$coefficient[$cle]?></td>
<td><?php
  error_reporting(0);
if(isset($_POST['valider'])){
    if(isset($_POST['note1']) AND isset($_POST['note4'])){
  

    $note1 = $_POST['note1'];
    $note4 = $_POST['note4'];
    echo ($note1[$cle]*$note4[$cle]); 
    // echo "tableau 1 bonsoir";
    $sommeNote =0;
    $sommepu = 0;
// $note1 = array();
for($i=0 ; $i<=13 ; $i++){
    $sommeNote = $sommeNote + $note1[$i]*$note4[$i];
    $sommepu = $sommepu + $note1[$i];
}
//i
    }

   ?></td>
</tr>
<?php } 
}
?>



<tr>
<th>RESULTAT GLOBAL</th>
<th><?=$sommepu." W"; ?></th>
<th></th>
<th></th>
<th><?=$sommeNote." Wh";?></th>
</tr>

<tr>
<td>
    <button type="submit" name="valider" >valider</button>
</td>
</tr>

  </table>
</form>


<div class="container">
    <div class="row">
        <div id="block1" class="col-sm-6" style="border:1px solid red;">
        <h4>GUIDE DES FREQUENCES D'UTILISATION SELON LA NORME :</h4>
        <p >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selon la norme les chauffe-eau / ballon d'eau chaude
      electrique ont
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;une frequence d'utilisation de :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 heures par jour
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;televiseur :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 heures par jour <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ordinate&nbsp;ur de bureau :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 heures par jour <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ordinateur portable :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 heures par jour <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ampoule : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 heures par jour <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console jeu :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 heures par jour <br>
    
</p>
        </div>

        <div id="block2" class="col-sm-6" style="border:1px solid red;">
        <br><h4>GUIDE SELON LA NORME :</h4>
      
        <p>
  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;chargeur smarphone :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 heures par jour <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;refrigerateur :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24 heures <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seche linge :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 heures par jour <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lave linge :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6h par jour <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lave vaisselle :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 heures par jour <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;chauffe eau :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 heures par jour <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;four :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1,5 h par jour
</p>
        </div>

    </div>
</div>
<script src="script.js"></script>