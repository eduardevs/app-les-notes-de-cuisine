<?php

require_once('Headers.php');
require_once('PDOConnexion.php');


// include_once('getConnexion.php');

// var_dump($_REQUEST);
// die;
// $host = "db";
// $user = "root";
// $password = "example";
// $bdd = "bdd_blog";
// $conn;

// try {
//     $conn = new PDO('mysql:host=' . $host . ';dbname=' . $bdd, $user, $password);
// } catch (Exception $e) {
//     die('Erreur : ' . $e->getMessage());
// }




$method = $_SERVER['REQUEST_METHOD'];

// var_dump($_POST['name']);
// die();


switch ($method) {
    case 'POST':
        $db = new PDOConnexion();
        $conn = $db->getConnexion();
        $username = $_POST['username'];
        $name = $_POST['name'];
        // var_dump($username);
        // die();
        $lastName = $_POST['lastname'];
        $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // var_dump($_POST);
        // die('oki');
        // die();
        // connexion
        // envoie de data
        $insert = "INSERT INTO users(name ,lastName, username, password) VALUES (:name, :lastName , :username, :password)";
        $requete = $conn->prepare($insert);


        $res = $requete->execute(array(

            'name' => $username,
            'lastName' => $name,
            'username' => $lastName,
            'password' => $pwd
        ));

        // var_dump($res);
        // die();
        echo json_encode([
            // 'data' => $res,
            'data' => $res,
            'message' => 'Send with success'
        ]);

        break;
}



// echo $user;
// $method = $_SERVER['REQUEST_METHOD'];

// var_dump($method);

// $username = $_SERVER['QUERY_STRING'];

// echo $username;


//? CONNEXION


//?  INSERT
// $insert = "INSERT INTO users(name, lastName, password) VALUES (:name, :lastName, :password)";
// $requete2 = $bdd->prepare($insert);

// var_dump($requete2);
// $requete2->execute(array(
//     'name' => 'Ed',
//     'lastName' => 'Piss',
//     'password' => '1234'
// ));


// var_dump(getallheaders());

// echo json_encode([
//     'username' => $_SERVER['PHP_AUTH_USER'],
//     'password' => $_SERVER['PHP_AUTH_PW'],

// ]);
