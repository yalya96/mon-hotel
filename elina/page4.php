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
        <title>SUPPRIMEZ UN PLAT</title>
    </head>
<body>
<?php include("nav.php")?>
    <h1>SUPPRIMEZ UN PLAT</h1>
    <form action="page4.php" method="POST">
        <label for="Produit">Plat</label> 
        <input type="text"name="plat" required>
        <input type=submit value="supprimer" name="envoyer">
    </form> 
    <br>
    <br>
<?php
$article = array(
    array("nom"=> 'mbakhalou_saloum',"pu"=> '2000',"quantité"=> '20'),
    array("nom"=> 'thiébou_djeunn',"pu"=> '4000',"quantité"=> '15'),
    array("nom"=> 'mafé',"pu"=> '2500',"quantité"=> '10'),
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
    $sup = $_POST["plat"];
    for ($i = 0; $i < count($article); $i++) {
        if ($sup == $article[$i]['nom']) {
            unset($article[$i]);

        }
    }
    for ($i = 0; $i <= count($article); $i++) {
                    if($article [$i]["quantité"]<10){
            echo "<tr class='r'>
                    <td class='r'>".$article[$i]["nom"]."</td>
                     <td class='r'>".$article[$i]["pu"]."</td>
                     <td class='r'>".$article[$i]["quantité"]."</td>
                     <td class='r'>".$article[$i]["quantité"] * $article[$i]["pu"]."</td>
                     </tr>";
                     }
               
                     else {
                         echo "<tr>
                     <td>".$article[$i]["nom"]."</td>
                     <td>".$article[$i]["pu"]."</td>
                     <td>".$article[$i]["quantité"]."</td>
                     <td>".$article[$i]["quantité"] * $article[$i]["pu"]."</td>
                     </tr>"; 
                     }
        // if ($article[$i]['quantité'] >= 10) {
        //     echo "<tr>
        //         <td>" . $article[$i]["nom"] . "</td>
        //         <td>" . $article[$i]["pu"] . "</td>
        //         <td>" . $article[$i]["quantité"] . "</td>
        //         <td>" . $article[$i]["quantité"] * $article[$i]["pu"] . "</td>
        //     </tr>";
        // } else if ($article[$i]['quantité'] < 10) {
        //     echo "<tr class=rouge>
        //         <td>" . $article[$i]["nom"] . "</td>
        //         <td>" . $article[$i]["pu"] . "</td>
        //         <td>" . $article[$i]["quantité"] . "</td>
        //         <td>" . $article[$i]["quantité"] * $article[$i]["pu"] . "</td>
        //     </tr>";
        // }
    }

    ?>

    </table>
</div>
</body>
</html>