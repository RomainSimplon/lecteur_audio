<?php
        session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="css/index_co.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
        if (isset($_SESSION["user_name"])) {
            // echo '<h3>Connexion réussie, Bienvenue ' . $_SESSION["user_name"] . '</h3>';
        } else {

         echo "<script type='text/javascript'>document.location.replace('index.php?message= connection fail, utilisateur inconnu');</script>";
        }

    
        include("header.php");
?>


<div class="container">
  <div class="row">
    <div class="case col-sm-12 col-md-4 col-lg-3"><a href="#">ROCK</a></div>
    <div class="caseclear col-sm-12 col-md-1 col-lg-1"></div>
    <div class="case col-sm-12 col-md-4 col-lg-3"><a href="#">HIP-HOP</a></div>
    <div class="caseclear col-sm-12 col-md-1 col-lg-1"></div>
    <div class="case col-sm-12 col-md-6 col-lg-3"><a href="#">RAP</a></div>
  </div>
  <div class="row">
    <div class="case col-sm-12 col-md-4 col-lg-3"><a href="#">CLASSIC</a></div>
    <div class="caseclear col-sm-12 col-md-1 col-lg-1"></div>
    <div class="case_favorite col-sm-12 col-md-4 col-lg-3"><a href="./lecteuraudio.php">Favoris</a></div>
    <div class="caseclear col-sm-12 col-md-1 col-lg-1"></div>
    <div class="case col-sm-12 col-md-6 col-lg-3"><a href="#">JAZZ</a></div>
  </div>
  <div class="row">
    <div class="case col-sm-12 col-md-4 col-lg-3"><a href="#">Latino</a></div>
    <div class="caseclear col-sm-12 col-md-1 col-lg-1"></div>
    <div class="case col-sm-12 col-md-4 col-lg-3"><a href="#">Country</a></div>
    <div class="caseclear col-sm-12 col-md-1 col-lg-1"></div>
    <div class="case col-sm-12 col-md-6 col-lg-3"><a href="#">Reggae</a></div>
  </div>
</div>

    <?php include("footer.php");
    ?>  

</body>
</html>