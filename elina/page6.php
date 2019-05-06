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
  <title>Recherche</title>
</head>
<body>
<?php include("nav.php")?>
<form action="page6.php" method="POST">
  <div class="form-group has-success has-feedback">
    <label for="Name">Minimal</label>
    <input aria-describedby="Success2Status" type="number" name="plat" id="text" class="form-control"placeholder="minimal">
  </div>
  <div class="form-group has-warning has-feedback">
    <label>Maximal</label>
    <input class="form-control"  placeholder="maximal" type="number" name="max" id="tel">
      </div>  
  <div class="form-group has-error has-feedback">
    <label>SEUIL Quantité</label>
    <input class="form-control" placeholder="quantité seuil" type="number" name="seuil" id="tel">
  </div>  
  <input type="submit" value="recherche" name="recherche"> 
</form>
</div>

<?php
if(isset($_POST['recherche']))
{
    ?>

    <?php
$article = array(
    array("nom"=> 'mbakhalou_saloum',"pu"=> '2000',"q"=> '20'),
    array("nom"=> 'thiébou_djeunn',"pu"=> '4000',"q"=> '15'),
    array("nom"=> 'mafe',"pu"=> '2500',"q"=> '10'),
    array("nom"=> 'soupe_kandja',"pu"=> '3000',"q"=> '12'),
    array("nom"=> 'domoda',"pu"=> '2500',"q"=> '3'),
    array("nom"=> 'yassa',"pu"=> '3500',"q"=> '11'),
    array("nom"=> 'kaldou',"pu"=> '2000',"q"=> '8',),
    array("nom"=> 'ce_bon',"pu"=> '4000',"q"=> '25'),
    array("nom"=> 'souloukhou',"pu"=> '3500',"q"=> '5'),
    array("nom"=> 'mbakhalou_jeunn',"pu"=> '3500',"q"=> '9')
    );
$mi = $_POST["min"];
$ma= $_POST["max"];
$seui= $_POST["seuil"];
echo'<table class="table table-bordered">
<thead>
  <tr>
  <th>nom:</th>
<th>p.u:</th>
<th>quantité:</th>
<th>montant:</th>
  </tr>
</thead>';
      for ($i=0; $i <count($article) ; $i++) 
      { 
        $total=$article[$i]["pu"]*$article[$i]["q"];
        //pour mini
        if (($article[$i]["pu"])>=$mi && $ma==NULL && $seui==NULL) 
        {
          if($article [$i]["q"]<10){
            echo "<tr class=r>
                    <td class=r>".$article[$i]["nom"]."</td>
                     <td class=r>".$article[$i]["pu"]."</td>
                     <td class=r>".$article[$i]["q"]."</td>
                     <td class=r>".$total."</td>
                     </tr>";
                     }
               
                     else {
                         echo "<tr>
                     <td>".$article[$i]["nom"]."</td>
                     <td>".$article[$i]["pu"]."</td>
                     <td>".$article[$i]["q"]."</td>
                     <td>".$total."</td>
                     </tr>"; 
                     }
        } 
        //fin du min 
        //debut max
        elseif (($article[$i]["pu"])<=$ma && $mi==NULL && $seui==NULL) 
        {
          if($article [$i]["q"]<10){
            echo "<tr class=r>
                    <td class=r>".$article[$i]["nom"]."</td>
                     <td class=r>".$article[$i]["pu"]."</td>
                     <td class=r>".$article[$i]["q"]."</td>
                     <td class=r>".$total."</td>
                     </tr>";
                     }
               
                     else {
                         echo "<tr>
                     <td>".$article[$i]["nom"]."</td>
                     <td>".$article[$i]["pu"]."</td>
                     <td>".$article[$i]["q"]."</td>
                     <td>".$total."</td>
                     </tr>"; 
                     }
        }
        //fin max
        //debut Mmin et max
        elseif (($article[$i]["pu"])<=$ma && ($article[$i]["pu"])>=$mi ) 
        {
          if($article [$i]["q"]<10){
            echo "<tr class=r>
                    <td class=r>".$article[$i]["nom"]."</td>
                     <td class=r>".$article[$i]["pu"]."</td>
                     <td class=r>".$article[$i]["q"]."</td>
                     <td class=r>".$total."</td>
                     </tr>";
                     }
               
                     else {
                         echo "<tr>
                     <td>".$article[$i]["nom"]."</td>
                     <td>".$article[$i]["pu"]."</td>
                     <td>".$article[$i]["q"]."</td>
                     <td>".$total."</td>
                     </tr>"; 
                     }
      }
      //fin de min max
      //debut seuil
      elseif (($article[$i]["q"])<=$seui && $ma==NULL && $mi==NULL ) 
      {
        if($article [$i]["q"]<10){
          echo "<tr class=r>
                  <td class=r>".$article[$i]["nom"]."</td>
                   <td class=r>".$article[$i]["pu"]."</td>
                   <td class=r>".$article[$i]["q"]."</td>
                   <td class=r>".$total."</td>
                   </tr>";
                   }
             
                   else {
                       echo "<tr>
                   <td>".$article[$i]["nom"]."</td>
                   <td>".$article[$i]["pu"]."</td>
                   <td>".$article[$i]["q"]."</td>
                   <td>".$total."</td>
                   </tr>"; 
                   }
    }
      //fin seuil
  }
  }
  ?>
  </table>
<p ></p>
  </body>
  </html>