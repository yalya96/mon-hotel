<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="essai.css">
    <title>Connection</title>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<body>
<?php
 $personnes = array(
 array('ELina','antoinette','badiane'),
 array('Elhadi','mbacke','mbaye'),
 array('sokhna','fatou','diouf'),
 array('Grand','yahya','ly'),
 array('awa','ndiaye','sene')
 );
 ?>
    <div id="login">
        <h3 class="text-center text-white pt-5">Page De Connection</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-info">Veuiller entrez vos informations</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">LOGIN:</label><br>
                                <input type="text" name="login" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mot_De_Passe:</label><br>
                                <input type="text" name="pass" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Mémoriser</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="valider" class="btn btn-info btn-md" value="Se Connecter">
                            </div>
                            <?php


          if (isset($_POST['valider'])){
            if($_POST['login']!=" " || $_POST['pass']!=" "){
              header("location:page1.php");

            }
                for($indice=0;$indice<=5;$indice++){
                  if($personnes[$indice][1]== $_POST['login'] && $personnes[$indice][2]== $_POST['pass']){
                    header("location:page2.php");
                  }
                  
                    
                }
          }
          ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</body>
</html>