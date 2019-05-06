<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 646464 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="mon.css">
</head>

<body>
<?php include("nav.php")?>
<div class="container">
<h1>AJOUT D'UN PRODUITS</h1>
<form action="page5.php" method="POST">
  <div class="form-group has-success has-feedback">
    <label for="Name">NOM DU PRODUITS</label>
    <input aria-describedby="Success2Status" type="text" name="nom" id="text" class="form-control" placeholder="Nombre">
  </div>
  <div class="form-group has-warning has-feedback">
    <label for="Email1">PRIX UNITAIRE</label>
    <input class="form-control"  placeholder="PU" type="number" name="p" id="tel">
      </div>  
  <div class="form-group has-error has-feedback">
    <label for="Password1">Nombre D'article</label>
    <input class="form-control" placeholder="Nombre"  type="number" name="qt" id="tel">
  </div>  
  <input type="submit" value="Ajouter" name="Ajouter"> 
</form>
</div>
<?php
if(isset($_POST['Ajouter']))
{
    ?>
    <?php
$article = array(
  array("nom"=> 'mbakhalou_saloum',"prix"=> '2000',"quantité"=> '20'),
  array("nom"=> 'thiébou_djeunn',"prix"=> '4000',"quantité"=> '15'),
  array("nom"=> 'mafe',"prix"=> '2500',"quantité"=> '10'),
  array("nom"=> 'soupe_kandja',"prix"=> '3000',"quantité"=> '12'),
  array("nom"=> 'domoda',"prix"=> '2500',"quantité"=> '3'),
  array("nom"=> 'yassa',"prix"=> '3500',"quantité"=> '11'),
  array("nom"=> 'kaldou',"prix"=> '2000',"quantité"=> '8',),
  array("nom"=> 'cé bon',"prix"=> '4000',"quantité"=> '25'),
  array("nom"=> 'souloukhou',"prix"=> '3500',"quantité"=> '5'),
  array("nom"=> 'mbakhalou_djeunn',"prix"=> '3500',"quantité"=> '9')
  );
$nom = $_POST["nom"];
$prix= $_POST["p"];
$quantité = $_POST["qt"];
$nom1=strtolower($nom);
for ($j=0; $j <count($article) ; $j++) { 
    if ($nom1==$article[$j]["nom"]) {
        echo"Erreur";
        echo"Ce nom figure dans ce tableau";
        break;
    }
    elseif ($nom!=''&& $prix!=''&& $quantité!=''&& $nom1!=$article [$j]["nom"]) {
            array_push($article,(array('nom' =>$nom , 'prix' =>$prix,'quantité' =>$quantité )));
            echo'<table class="table table-bordered">
            <thead>
              <tr>
              <th>nom</th>
            <th>prix</th>
            <th>quantité</th>
            <th>montant</th>
              </tr>
            </thead>';
            for ($i=0;$i<count($article); $i++){
                if($article [$i]["quantité"]<10){
                    echo "<tr class=r>
                            <td class=r>".$article[$i]["nom"]."</td>
                             <td class=r>".$article[$i]["prix"]."</td>
                             <td class=r>".$article[$i]["quantité"]."</td>
                             <td class=r>".$article[$i]["prix"]*$article[$i]["quantité"]."</td>
                             </tr>";
                             }
                       
                             else {
                                 echo "<tr>
                             <td>".$article[$i]["nom"]."</td>
                             <td>".$article[$i]["prix"]."</td>
                             <td>".$article[$i]["quantité"]."</td>
                             <td>".$article[$i]["prix"]*$article[$i]["quantité"]."</td>
                             </tr>";
                             }
            }
            }break;
            
    }
} 
?>
</div>
</body>
</html>