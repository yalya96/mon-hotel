<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="mon.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>UPDATE PRODUIT</title>
</head>
<body>
<?php include("nav.php")?>
    <p>
    <h1>MODIFICATION DE PRODUIT</h1></p>
    <form action="page3.php" method="POST">
  <div class="form-group has-success has-feedback">
    <label for="Name">NOM DU PLATS</label>
    <input aria-describedby="Success2Status" type="text" name="plat" id="text" class="form-control">
  </div>
  <div class="form-group has-warning has-feedback">
    <label>Quantite</label>
    <input class="form-control"  placeholder="quantité" type="number" name="quantité" id="tel">
      </div>  
  <div class="form-group has-error has-feedback">
    <label>Prix Unitaire</label>
    <input class="form-control" placeholder="prix-unitaire" type="number" name="prix-unitaire" id="tel">
  </div>  
  <input type="submit" value="Modifier" name="Ajouter"> 
</form>
</div>
<?php
$article = array(
        array("nom"=> 'Mbakhalou Saloum',"pu"=> '2000',"quantité"=> '20'),
        array("nom"=> 'thiébou_djeunn',"pu"=> '4000',"quantité"=> '15'),
        array("nom"=> 'mafe',"pu"=> '2500',"quantité"=> '10'),
        array("nom"=> 'soupe_kandja',"pu"=> '3000',"quantité"=> '12'),
        array("nom"=> 'domoda',"pu"=> '2500',"quantité"=> '3'),
        array("nom"=> 'yassa',"pu"=> '3500',"quantité"=> '11'),
        array("nom"=> 'kaldou',"pu"=> '2000',"quantité"=> '8',),
        array("nom"=> 'ce_bon',"pu"=> '4000',"quantité"=> '25'),
        array("nom"=> 'souloukhou',"pu"=> '3500',"quantité"=> '5'),
        array("nom"=> 'mbakhalou_djeunn',"pu"=> '3500',"quantité"=> '9')
        );
?>
     <div class="container">            
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>nom:</th>
    <th>p.u:</th>
    <th>quantité:</th>
    <th>montant:</th>
      </tr>
    </thead>
        <?php
    if (isset($_POST['Ajouter'])) {
        $update = $_POST['plat'];
        for ($i = 0; $i < count($article); $i++) {
            if ($update == $article[$i]['nom']) {
                $article[$i]['nom']=$_POST['plat'];
                $article[$i]['quantité']=$_POST['quantité'];
                $article[$i]['pu']=$_POST['prix-unitaire'];

            }
        }
    }
    for ($i = 0; $i <= count($article); $i++) {

        if($article [$i]["quantité"]<10){
            echo "<tr class='r'>
                    <td class='r'>".$article[$i]["nom"]."</td>
                     <td class='r'>".$article[$i]["pu"]."</td>
                     <td class='r'>".$article[$i]["quantité"]."</td>
                     <td class='r'>".$article[$i]["pu"]*$article[$i]["quantité"]."</td>
                     </tr>";
                     }
               
                     else {
                         echo "<tr>
                     <td>".$article[$i]["nom"]."</td>
                     <td>".$article[$i]["pu"]."</td>
                     <td>".$article[$i]["quantité"]."</td>
                     <td>".$article[$i]["pu"]*$article[$i]["quantité"]."</td>
                     </tr>"; 
                     }
    }
    ?>

    </table>
    </div>
</body>
</html>