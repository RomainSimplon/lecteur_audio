<?php


require_once(__DIR__."../../../pdo.php");


$data = $_POST;

if (empty($data['user_name']) ||
    empty($data['user_email']) ||
    empty($data['user_pass']) ||
    empty($data['password_confirm'])) {
    
    die('paramètre manquant');
}

if ($data['user_pass'] !== $data['password_confirm']) {
    die('Password and Confirm password should match!');   
 }


$pseudo = $_POST['user_name'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE user_name=?");
$stmt->execute([$pseudo]); 
$user = $stmt->fetch();
if ($user) {
    // le nom d'utilisateur existe déjà
    header("Location: ../../index.php?message=le nom d'utilisateur existe déjà");
    
    
} else {
    // le nom d'utilisateur n'existe pas
    $insertStatement = $pdo->prepare("

    INSERT INTO users
    (user_name, user_email, user_pass)
    values
    (?, ?, ?)
    ");

$insertStatement->execute([
    $_POST["user_name"],
    $_POST["user_email"],
    $_POST["user_pass"],
  
   
]);
header('Location: ../../index.php?message=Votre compte a bien été Créé');
}
