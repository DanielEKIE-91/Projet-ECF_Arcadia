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
    
    //Récupérer les données du formulaire d’inscription 
    $emailForm = $_POST['email'];
    $titleForm = $_POST['title'];
    $descriptionForm = $_POST['description'];

    //Vérifier l’unicité de l’adresse mail
    $query = "SELECT * FROM contact WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $emailForm);
    $stmt->execute();

    //Est-ce que l’utilisateur (mail) existe ?
    if($stmt->rowCount() > 0){
        die("Cette adresse email est déjà utilisée");
    }


    //Insérer les données dans la base 
    $insertQuery = "INSERT INTO contact ( email, title, description) VALUES (:email, :title, :description)";
    $stmt = $pdo->prepare($insertQuery);
    $stmt->bindParam(':email', $emailForm);
    $stmt->bindParam(':title', $titleForm);
    $stmt->bindParam(':description', $descriptionForm);
    $stmt->execute();

    echo "Formulaire envoyé";


    }
    catch (PDOException $e){

    echo "Erreur lors du formulaire : ". $e->getMessage();
}