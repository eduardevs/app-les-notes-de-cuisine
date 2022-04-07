<?php
//http://localhost:3000
header('Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Headers: content-type');
header('Access-Control-Allow-Methods: GET, POST');

//echo $message;
// echo json_encode([
//     $_SERVER
// ]);

$host = "db";
$user = "root";
$password = "example";
$bdd = "bdd_blog";

try {
    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $bdd, $user, $password);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = 'SELECT * FROM users';
$resp = $bdd->query($requete);

$users = $resp->fetchAll(PDO::FETCH_OBJ);

var_dump($users);


// insert

// if(isset($_POST[])



$insert = "INSERT INTO users(name, lastName, password) VALUES (:name, :lastName, :password)";
$requete2 = $bdd->prepare($insert);

var_dump($requete2);
$requete2->execute(array(
    'name' => 'Ed',
    'lastName' => 'Piss',
    'password' => '1234'
));
