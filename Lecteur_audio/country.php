<?php
        session_start();
        require_once(__DIR__."/pdo.php");
$sql1 = 'SELECT * FROM MUSIC WHERE music_type = "COUNTRY" ';
$music = $pdo->prepare("SELECT * FROM MUSIC WHERE music_type = 'COUNTRY'");
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
  <link href="css/lecteuraudio.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="./index_co.php">
      <img src="image/simplify.jpeg" alt="logo">
  </a>



<div class="container_header">
  
  <h2><?php echo " ".$_SESSION['user_name']." "?></h2>

  <div class="container_icons">
    <div class="settings"><a href="./upload.php"><i class="fa fa-cog"></i></a></li></div>
    <div class="logout"><a href="login/process/logout.php"><i class="fa fa-sign-out"></i></a>
    </div>
  </div>

</div> 

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php
require_once(__DIR__."/pdo.php");

if( !empty($_POST)){
    extract($_POST);
    $valid = true;

if (isset($_POST['searchMusic'])){
        $searchMusic = (string) trim($searchMusic);

if(empty($searchMusic)){

        $valid = false;
        $message_er = "Mettre une recherche";
}
        
        if($valid){    
            $req_searchStatement = $pdo->prepare(
            
            "SELECT *
            FROM MUSIC
            WHERE music_name 
            LIKE ?
            OR music_artist
            LIKE ?"
);

$req_searchStatement->execute([
             $_POST["searchMusic"].'%',
             $_POST["searchMusic"].'%'
]);   
        
        }    
        
  
    }
}

?>
    
    <form method="post">
        <div class="form-group">
            <input class="form-control" type="search" name="searchMusic"  value="<?php if(isset($searchMusic)){ echo $searchMusic;}?>"placeholder="Recherche"/>
            </br>
            <input type="submit" class="btn btn-primary" value="Rechercher" name="search"/>
        </div>
    </form>
    
  </div>
</nav>
<div class="global-container">

    
    <?php
    include("lecteur.php");
    ?>
                 
    <div class="bloc-comm"> 
        <div class="comm">
            <h4>Votre avis sur ce titre:</h4>
            <input type="text" class="comm_area" name="comm" /><br>
        </div>
        <div class="rating">
          <a href="#5" title="Donner 5 étoiles">☆</a>
          <a href="#4" title="Donner 4 étoiles">☆</a>
          <a href="#3" title="Donner 3 étoiles">☆</a>
          <a href="#2" title="Donner 2 étoiles">☆</a>
          <a href="#1" title="Donner 1 étoile">☆</a>
        </div>
    </div>
    </div>

    <div class="right-bloc">
        <div class="bloc-music">
        <?php include("box_right_music.php");
        ?>  
        </div>

        <div class="bloc-artiste">

        <h1 class="searchh1"> Resultat de la recherche </h1>
        <table class="table" border="1">
            <thead>
                <tr>
                <th style="background-color: grey">MUSIC</th>
                <th style="background-color: grey">ALBUM</th>
                <th style="background-color: grey">ARTIST</th>
                <th style="background-color: grey">TYPE</th>
                </tr>
            </thead>
            <tbody>
        <?php include("box_right_artist.php");
        ?>              
        </tbody>
        </table>
        </div>
    </div>


</div>

<div>
    <?php 
    include("footer.php");
    ?> 
</div>


<script src="js/country.js"></script>
</body>
</html>
