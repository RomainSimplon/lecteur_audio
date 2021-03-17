<?php

require_once(__DIR__."../../pdo.php");


if(empty($_POST["title"])) {
    die("paramètre  manquant.");
}

    
$insertStatement = $pdo->prepare("

INSERT INTO MUSIC
(music_name,music_artist,music_album,music,music_photo)
values
(?, ?, ?, ?, ?)
");

$insertStatement->execute([
    $_POST["title"],
    $_POST["artist"],
    $_POST["album"],
    "/music/".$_FILES['chanson']['name'],
    "/image/". $_FILES["photo"]["name"]

]);
    
    
    
    if(isset($_FILES['chanson'])){ // obliger de demander si la variable existe sinon ne marche pas
        // $_FILES contient les informations sur les fichiers
         $dossier = '../music/';
         $fichier = basename($_FILES['chanson']['name']);// prend le chemin complet pour en extraire juste le nom du fichier sans extension, enleve les " / , \ , . , etc..."
         $taille_maxi = 10000000000000000000; // taille (en octets) maximum du fichier uploader = 100Ko
         $taille = filesize($_FILES['chanson']['tmp_name']); // Lit la taille du fichier donné.
         //On formate le nom du fichier ici: cela permet de remplacer les lettres accentué par des non accentué et on récupere le résultat dans le fichier
         $fichier = strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
         //On formate le nom du fichier ici: cela permet de remplacer les caracteres spéciaux (sauf lettre d'avant) par des "_"
         $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
         $extensions = array('mp3','mp4'); // différents format de musique que l'utilisateur peut upload
         $extension = strtolower(substr(strrchr($_FILES['chanson']['name'], '.') ,1));
         // strrchr renvoie l'extension avec le point " ."
         // substr($_FILES['chanson']['name'],1) ignore le premier caractère de chaine
         // strtolower met l'extension en minuscules
        
         // CONDITIONS DE SECURITEES //
           if(in_array($extension, $extensions)){ //Si l'extension est dans le tableau
                
               if($taille<$taille_maxi){// si la taille correspond
                    
                  
                    
                   if(move_uploaded_file($_FILES['chanson']['tmp_name'],"../music/".$_FILES['chanson']['name'],)) { // TRUE, c'est que ça a fonctionné...
                        
                       $msg = 'Téléchargement effectué avec succès !';
                   }
                   else{ //Sinon FALSE.
                        
                       $msg = 'Echec du téléchargement !';
                   }
               }
               else{
                    
                   $erreur = 'Le fichier est trop gros !';
               }
           }
           else{
                
               $erreur = 'Vous devez télécharger un fichier de type mp3 !';
           }  
       }
                   if(isset($erreur)){ //S'il y a une erreur, on n'upload pas et on affiche l'erreur
                        
                        echo $erreur;
                   }
                    
                   if(isset($msg)){
                        
                       echo $msg;
                   }
        


// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("../image/" . $_FILES["photo"]["name"])){
                echo $_FILES["photo"]["name"] . " existe déjà.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../image/" . $_FILES["photo"]["name"]);
                echo "Votre fichier a été téléchargé avec succès.";
            } 
        } else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}


echo "<script type='text/javascript'>document.location.replace('../upload.php?message=Votre music a bien été ajouter');</script>";