<?php

require_once('Headers.php');
require_once('PDOConnexion.php');

$method = $_SERVER['REQUEST_METHOD'];


switch ($method) {
    case 'GET':

        // name verification
        // TODO: 1- LOGIN WITH PASSWORD VERIFICATION
        // TODO: 2- GESTION DE TOKEN (posibilities, with cookie php)

        $req = $conn->prepare("SELECT id FROM players WHERE name=? limit 1");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array($_POST['name']));
        $tab = $req->fetchAll();
        if (count($tab) > 0) {

            $_SESSION["message-error"] = "Désolé, ce personnage éxiste déjà !";

            header('Location:' . $_SERVER['HTTP_REFERER']);
        } else {
            $db = new PDOConnexion();
            $conn = $db->getConnexion();
            $username = $_POST['username'];
            // $name = $_POST['name'];
            $password = $_POST['password'];
        }

        var_dump($username);
        // die();
        echo json_encode([
            // 'data' => $res,
            'message' => 'Send with success'
        ]);

        break;
}

// $requete = 'SELECT * FROM users';
// $resp = $bdd->query($requete);

// $users = $resp->fetchAll(PDO::FETCH_OBJ);

//


// $username = $_SERVER['username'];

// if (isset($_POST)) {

//     $username = $_SERVER['PHP_AUTH_USER'];
//     $pwd = $_SERVER['PHP_AUTH_PW'];

//     $testpost = $_POST['username'];
//     $test2 = $_POST['lastName'];


//     echo $testpost;
//     echo $test2;

//     $insert = "INSERT INTO users(name ,lastName, username, password) VALUES (:name, :lastName , :username, :password)";
//     $requete2 = $bdd->prepare($insert);

//     // var_dump($requete2);
//     $requete2->execute(array(
//         'username' => $username,
//         'password' => $pwd
//     ));

//     echo 'data sent to db';
// }

// var_dump($users);


// insert

// if(isset($_POST[])

// var_dump($_POST);
//? GET
// if (isset($_POST['name'])) {
//     var_dump('test');
// }
// $name = $_POST['name'];
// $lastName = $_POST['lastName'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// echo ($name);