    <?php
        
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
        
        <form action="" method="POST" class="container" >
        
        
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
            
     
            <!-- <th>D</th> -->
       

            </tr>
        

        
         <?php
        //  var_dump($_POST);
            include('new.php');
        
        
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
        <td><input type="number" step="any" name="note1" ></td>
        <td><input type="number" step="any" name="note4" ></td>
        <td><?=$coefficient[$cle]?></td>
        <td><?php
        //   error_reporting(0);
        if(isset($_POST['valider'])){
            if(isset($_POST['note1']) AND isset($_POST['note4'])){
          
        
            $note1 = $_POST['note1'];
            $note4 = $_POST['note4'];
            // echo ($note1[$cle]*$note4[$cle]); 
            // echo "tableau 1 bonsoir";
            // $sommeNote =0;
            $sommepu = 0;
        // $note1 = array();
        // for($i=0 ; $i<=13 ; $i++){
            // $sommeNote = $note1[$i]*$note4[$i];
        //    $sommepu = $sommepu + $note1[$i];
        //i
            }
            

            
        
            
            ?>
        
           </td>
        </tr>
        



        <?php } 
        }
?>
            
            
          
      

        
        
        
        
        <tr>
        <th>RESULTAT GLOBAL</th>
        <th><?=include('afficher.php'); ?></th>

   

        <th></th>
        <th></th>
        <th><?=$sommeNote?></th>
        </tr>
        <tr>
               
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
    
        
        



<br>
    <p class="para"><strong>2.ETAPE : Calculons l'energie a produire qui tiendra compte de pertes soit 25 a 30% de l'energie consommee Ep = Ec + 25%Ec</strong></p>
    <p class="para"> <h4><?php
                         echo "EP = ".$sommeNote ." + 25%".$sommeNote;
                        echo "<br>";
                     $sommeNote1 = $sommeNote + 0.25*$sommeNote;
                     
                        echo "EP = ".$sommeNote1." wh ou ".($sommeNote1/1000)." kwh";
                        ?></h4>  </p>
                        <p class="para"><strong>3.ETAPE : Definir la tension a utiliser entre 12, 24 et 48V en fonction de la puissance <?="Ep = ".$sommepu." W";?></strong></p>
                        <P class="para">-On utilisera le 12V pour des puissances allant jusqu'a 1000W</P>
                        <P class="para">-On utilisera le 24V pour des puissances allant jusqu'a 1000 et 2000W</P>
                        <P class="para">-On utilisera le 48V pour des puissances allant a plus de 2000W</P>
                        <p class="para"><strong>   <?php
                        $u1 = 12;
                        $u2 = 24;
                        $u3 = 48;
                        if($sommepu<=1000){
                            echo " Dans ce cas vous utiliserez U =".$u1."V comme tension donc un panneau de 36 cellules <br>
                            on prendra un paneau avec une tension de sortie de 17 a 19V tension en plein charge avec d'autres equipements";

                        }elseif ($sommepu<=2000) {
                            echo "Dans ce cas vous utiliserez U = ".$u2."V comme tension donc un panneau de 48 cellules (02 panneaux de 36 cellules monte en serie) <br>
                            on prendra un paneau avec une tension de sortie 33 a 36V tension en plein charge avec d'autre equipement";
                        }
                        else{
                            echo "Dans ce cas vous utiliserez U = ".$u3."V comme tension donc un panneau de 144 cellules ou (04 panneaux de 36 cellules monte en serie) <br>
                            on prendra un paneau avec une tension de sortie 72V tension en plein charge avec d'autre equipemen";
                        }
                        
                        ?></strong></p>

                        
                        <p class="para"><strong>4.ETAPE : Type de batterie a utiliser (capacite des batteries)</strong></p>
                        <p class="para"> C = (Ep x N)/(D x U ) </p><br>

<div class="container">
    <div class="row">
        <div id="block3" class="col-sm-6" style="border:1px solid red;">
    
    
        <p class="para"> N : Autonomie de fonctionnnement de la batterie. Il depend de  la region ou tu te trouves <br>
                    par exemple: si vous etes dans une zone ou il ya beaucoup de soleil (donc 06jours de soleil) la/les batterie(s) va/vont fonctionner pendant une journee donc N = 1 <br>
                si vous etes dans une region ou le soleil apparait pendant 03jours et le reste des jours il ya pas de soleil donc les batteries font fonctionner pendant N = 4</p>
                     
    </div>
        

        

        <div id="block4" class="col-sm-6" style="border:1px solid red;">
    
       <br>
                        <p class="para">D : c'est la decharge de la batterie. Generalement on laisse la batterie se decharger a 20% ou 30% cest au choix <br>
                        ici on prendra D = 80% donc on laissera la batterie se decharger jusqu'a 20%.</p>
                        
    </div>
        </div>
        </div> <br> 





<!-- <a href="vide.php?$sommepu">click</a> -->

<p class="para"><strong>choix de N ET D</strong></p>



<?php include('vide.php');?>
            
       
      

            <p class="para">
                <strong>position geographie</strong> <br>
                orientation du panneau <br>
                - taux d'ensoleilement :
                    au nord on : 250 W/m2 <br>
                    a est : 700 w/m2 <br>
                    a l'ouest : 700W/m2 <br>
                    au sud : 1000W/m2 maximum de soleil <br>
             <strong>inclinaison :</strong> <br>
             -inclinaison : 0 degre panneaux a plat donc il est horizontal <br>
             (photo du graphe moyenne mensuelle par an avec inclinaison de 0 degre) <br>
             -inclinaison : 35 degre panneaux est au maximum d'electricite sur toute l'annee <br>
             (photo du graphe moyenne mensuelle par an avec inclinaison de 35 degre) <br>
             -inclinaison : 60 degre panneaux est au maximum d'electricite en hiver <br>
             (photo du graphe moyenne mensuelle par an avec inclinaison de 60 degre) <br>

             <strong>comment trouver les donnees :</strong> <br>
                logiciel pvgis
            </p>



            
<script src="https://cdn.jsdelivarr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
<script src="bootstrap.bundle.min.js"></script>


    
    





</body>

</html>