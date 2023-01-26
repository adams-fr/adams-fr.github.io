
    <?php    
    
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $_POST['result'];

        // echo $resultat;
        $operator = $_POST['operator'];
        switch ($operator) {
            case 'Non':
                echo " il faut selectionner un operateur";
                break;

                case 'Addition':
                    $result =$num1 + $num2;
                    break;

                    case 'Multiplication':
                        $result = $num1 * $num2;
                        break;

                        
                    case 'soustractration':
                        $result = $num1 - $num2;
                        break;

                        case 'division':
                            $result = $num1 / $num2;
                            break;

                            
               
           
            default:
                # code...
                break;
        }
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

    <title>Document</title>
</head>

<body>
   


    <div class="container">
        <div class="row">
            <div class="calcul">
            <div class="table-responsive">
       
            
              
<h2>INSTALLATION SOLAIRE DOMESTIQUE</h2><br>
<P>Pas besion d'etre un expert pour connaitre toutes les etapes INSTALLATIONS SOLAIRES DOMESTIQUES, l'application vous oriente dans chaque etape </P>
   <P style="color: red;"> NB: les cases qui ne seront pas utilisees dans le tableau completez les par des zeros</P><br>
<p class="para"><strong>1.ETAPE : Trouvez la puissance journaliere des equipes et l'energie consommee</strong> </p>

<form action="" method="post">
<table class="table table-striped" >
    <tr>
        <th>APPAREILLAGES</th>
    <th>PUISSANCE EN (WATT)</th>
    <th>TEMP D'UTILISATION EN (HEURE)</th>
    <th>ENERGIE CONSOMMER (EC = P*t)</th>
    <th>ENERGIE CONSOMMER (EC = P*t)</th>
    </tr>
         <tr>
         <td> <select name="Appareillage" id="">
                       <option value="chauffe-eau">chauffe-eau</option>
                       <option value="eclairage">ECLAIRAGE</option>
                       <option value="moulinex">MOULINEX</option>
                       <option value="REFRIGERATEUR">REFRIGERATEUR</option>
                       <option value="ORDINATEUR PORTABLE">ORDINATEUR PORTABLE</option>
                   </select></td>
                    <td><input type="number" step="any" name="num1"></td>
                   
                   <td><input type="number" step="any" name="num2">
                   
</td>
                  <td> <select name="operator" id="">
                       <option value="Non">Non</option>
                       <option value="Addition">Addition</option>
                       <option value="Multiplication">Multiplication</option>
                       <option value="soustractration">soustractration</option>
                       <option value="division">division</option>
                   </select></td>

                   <td><input type="number" step="any" name="result" value="<?php echo $result ;?>"></td>
                   
            </tr> 


            
            <td><input type="submit" value="Calculer" name="submit"></td>
               </form>
        </table>
    </div>  
              
                    
                 
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivarr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>