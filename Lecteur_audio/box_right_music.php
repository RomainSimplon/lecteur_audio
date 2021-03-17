<?php
require_once(__DIR__."/pdo.php");
$sql1 = 'SELECT * FROM MUSIC ';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lecteuraudio.css">
    <title>Document</title>
</head>
<body>

<?php

$music = $pdo->prepare("SELECT * FROM MUSIC ");


?>


    <h1> Liste des Musiques </h1>
    <table class="table">
        <thead>
            <tr>
                <th>MUSIC</th>
                
                <th>ARTIST</th>
                <th>PLAY</th>
                
            </tr>
        </thead>
        <tbody>
        <?php 
        
        foreach($pdo->query($sql1) as $music)
             {               
                echo '<tr>';
                echo '<td>' .$music['music_name']. '</td>';
                echo '<td> '.$music['music_album']. '</td>';
                echo '<td> '.$music['music_artist']. '</td>';
                echo '<td> '.'<a href="#">PLAY</a>'. '</td>';
                echo '</tr>';
            }  
        ?>
        </tbody>
    </table>
    


</body>
</html>