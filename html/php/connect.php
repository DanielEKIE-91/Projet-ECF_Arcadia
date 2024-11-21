<?php

// caracteristiques de la connexion
$dsn = 'mysql:dbname=arcadia;host=localhost;port=3306;charset=utf8';

//infos de connexion
$username = 'root';
$password = '';

try{
    //créer la connexion à la bdd
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// permet d'activer le mode verbeux pour les erreurs

    //Récupérer les données du formulaire de connexion
    $usernameForm = $_POST['username'];
    $passwordForm = $_POST['password'];

    //Récupérer les utilisateurs 
    $query = "SELECT * FROM utilisateur WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $usernameForm);
    $stmt->execute();

    //Est-ce que l’utilisateur (mail) existe ?
    if($stmt->rowCount() == 1){
        $monUser = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($passwordForm, $monUser['password'])){
            echo "Connexion réussie ! Bienvenue " . $monUser['surname'] . $monUser['name'];
        }else{
            echo "Mot de passe incorrect";
        }
    }
    else{
        echo "Utilisateur introuvable, êtes-vous sûr de votre mail ?";
    }

    }
    catch (PDOException $e){

    echo "Erreur lors de l’inscription : ". $e->getMessage();
}

 


