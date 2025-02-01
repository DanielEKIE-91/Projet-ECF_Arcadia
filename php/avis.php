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
    
    //Récupérer les données du formulaire 
    $pseudoForm = $_POST['pseudo'];
    $commentaireForm = $_POST['commentaire'];

    //Vérifier l’unicité du pseudo
    $query = "SELECT * FROM avis WHERE pseudo = :pseudo";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':pseudo', $pseudoForm);
    $stmt->execute();

    //Insérer les données dans la base 
    $insertQuery = "INSERT INTO avis (pseudo, commentaire) VALUES (:pseudo, :commentaire)";
    $stmt = $pdo->prepare($insertQuery);
    $stmt->bindParam(':pseudo', $pseudoForm);
    $stmt->bindParam(':commentaire', $commentaireForm);
    $stmt->execute();
    
    echo "Avis envoyé";
    

    }
    catch (PDOException $e){

    echo "Erreur du formulaire : ". $e->getMessage();
} 
