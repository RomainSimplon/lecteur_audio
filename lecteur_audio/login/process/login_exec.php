<?php
//Fichier PHP pour gérer côté server, le traitement du login
require_once(__DIR__."../../../pdo.php");

$data = $_POST;

if (empty($data['user_name']) ||
    empty($data['user_pass'])) {
    
    die('paramètre manquant');
}

 

 
 
session_start();//démarrage de la session
$pdo = new PDO('mysql:host=127.0.0.1;dbname=lecteur_audio;charset=utf8', 'root', '');
// print_r($pdo);
$message = "";
 
if(isset($_POST["user_name"]))
{//Si le formulaire est vide
    if(empty($_POST["user_name"]) || empty($_POST["user_pass"]))
    {
        $_SESSION['$message'] = '<label>Veuillez remplir les champs!</label>';
        header("location:../login.php");
    }
    else//sinon, requête préparée
    {
        $sql = "SELECT * FROM users WHERE user_name = :user_name AND user_pass = :user_pass";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':user_name' => $_POST["user_name"], ':user_pass' => $_POST["user_pass"]));
            $count = $stmt->rowCount();
            if($count > 0)
            {
                $_SESSION["user_name"] = $_POST['user_name'];
                header('Location: ../../index.php');
            }
            else
            {
                $message = '<label>Mauvaises données</label>';
            }
        } catch (Exception $e) {
            print "Erreur de lecture! " . $e->getMessage() . "<br/>";
        }
    }

}
header('Location: ../../index_co.php');
?>