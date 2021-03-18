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
  <link href="css/upload_img.css" rel="stylesheet">
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

    <div class="container1">
   


 <h1>upload_music</h1>
        <!-- <form action="process/insert_music.php" method="POST">
            
            Music en .mp3: <input type="file" name="photo" accept=".mp3"><br>
            <input type="submit" value="upload"/>
        </form> -->

    
   
           
                
               <form method="POST" action="./process/insert_music.php" enctype="multipart/form-data">
               <!-- POST permet de garder des information ou ficher en binéaire dans la variable-->
               <!-- encodage du fichier  et action = nom du site ou renvoyer le formulaire -->  
                    Title: <input type="text" name="title" /><br>
                    Artist:  <input type="text" name="artist" /><br>
                    Album: <input type="text" name="album" /><br>
                    <Select name="type">
                    <option>ROCK</option>
                    <option>HIP HOP</option>
                    </Select>
                    <input type="file" name="photo" id="fileUpload">
                   Music en .mp3: <input type="file" name="chanson" accept=".mp3"><br>
            <input type="submit" value="upload"/>
               </form>
    </div>
   
   <?php
   include('footer.php');
   ?>
     
</body>

</html>