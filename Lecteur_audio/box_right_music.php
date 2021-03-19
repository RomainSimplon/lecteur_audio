<?php
require_once(__DIR__."/pdo.php");
?>
    <h1> Liste des Musiques </h1>
    <table class="table">
        <thead>
            <tr>
                <th>MUSIC</th>
                <th>ALBUM
                <th>ARTIST</th>
                <th>PLAY</th>
                
            </tr>
        </thead>
        <tbody>
        <?php 
        
        foreach($pdo->query($sql1) as $key => $music)
             {               
                echo '<tr>';
                echo '<td>' .$music['music_name']. '</td>';
                echo '<td> '.$music['music_album']. '</td>';
                echo '<td> '.$music['music_artist']. '</td>';
                echo '<td> '.'<button id="playId" data-key ="'.$key.'"><i data-key ="'.$key.'" class="fa fa-play"
                aria-hidden="true"></i></button>'. '</td>';
                echo '</tr>';
            }  
        ?>
        </tbody>
    </table>
    


</body>
</html>