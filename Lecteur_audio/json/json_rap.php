<?php
    require_once(__DIR__."../../pdo.php");

$sql1 = $pdo->query("SELECT * FROM MUSIC WHERE music_type = 'RAP' ");

$sql1->execute();
$liste=$sql1->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($liste);





