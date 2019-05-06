<!DOCTYPE html>
<html lang="en">
<head>
  <title>MENU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet"  type="text/css" href="mon.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>
<?php include("nav.php")?>
<div class="container">
  <h2>BIENVENUE DANS NOTRE RESTAURANT</h2>
  <p>Voici les divers plats a votre disposition:</p>            
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
    $article = array(
        array("nom"=> 'mbakhalou_saloum',"pu"=> '2000',"quantité"=> '20'),
        array("nom"=> 'thiébou_djeunn',"pu"=> '4000',"quantité"=> '15'),
        array("nom"=> 'mafe',"pu"=> '2500',"quantité"=> '10'),
        array("nom"=> 'soupe_kandja',"pu"=> '3000',"quantité"=> '12'),
        array("nom"=> 'domoda',"pu"=> '2500',"quantité"=> '3'),
        array("nom"=> 'yassa',"pu"=> '3500',"quantité"=> '11'),
        array("nom"=> 'kaldou',"pu"=> '2000',"quantité"=> '8',),
        array("nom"=> 'cé bon',"pu"=> '4000',"quantité"=> '25'),
        array("nom"=> 'souloukhou',"pu"=> '3500',"quantité"=> '5'),
        array("nom"=> 'mbakhalou_djeunn',"pu"=> '3500',"quantité"=> '9')
        );
        for ($i=0;$i<count($article); $i++){
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
