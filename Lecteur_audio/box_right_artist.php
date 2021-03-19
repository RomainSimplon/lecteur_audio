<?php
require_once(__DIR__."/pdo.php");
$sql1 = 'SELECT * FROM MUSIC ';

?>

<?php

$music = $pdo->prepare("SELECT * FROM MUSIC ");

if (isset($_POST['searchMusic'])){
    $searchMusic = (string) trim($searchMusic);

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
$req_search = $req_searchStatement->fetchAll(); }
?>


<?php 

if( isset($_POST['search'])&& $valid){

    if(count($req_search)==0){
        echo "Aucun resultat";
    }
    ?>


            <?php foreach($req_search as $rs){ 
            echo '<tr>';
                echo '<td>'.$rs['music_name'].'</td>';
                echo '<td>'.$rs['music_album'].'</td>';
                echo '<td>'.$rs['music_artist'].'</td>';
                echo '<td>'.$rs['music_type'].'</td>';
            echo '</tr>';
            } 
            ?>

<?php }

?>