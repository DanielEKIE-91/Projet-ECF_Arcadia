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

 


/*
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // permet d'activer le mode verbeux pour les erreurs
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC   // lire les enregistrements comme un tableau


$reponse = $requete->fetchALL(PDO::FETCH_ASSOC);
    var_dump($reponse);
 

--------------------------------------------------------------------------------------------------

//TESTER CONNEXION BASE DE DONNEES//   
<?php
$dsn = 'mysql:host=localhost;dbname=ProjetAuthentificationBDD';
$username = 'user_php';
$password = '3f7zhhRn4NH69R';

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer les utilisateurs 
    $query = "SELECT * FROM users";
    $stmt = $pdo->query($query);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Afficher les utilisateurs
    foreach($users as $user){
        echo "ID : " . $user['idUser'] . "<br>";
        echo "Nom : " . $user['name'] . "<br>";
        echo "Prenom : " . $user['surname'] . "<br>";
        echo "email : " . $user['email'] . "<br>";
        echo "<br>";
    }
}
catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
}

?>



//CONNEXTION//
<?php

$dsn = 'mysql:host=localhost;dbname=ProjetAuthentificationBDD';
$username = 'user_php';
$password = '3f7zhhRn4NH69R';

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer les données du formulaire de connexion
    $emailForm = $_POST['email'];
    $passwordForm = $_POST['password'];

    //Récupérer les utilisateurs 
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $emailForm);
    $stmt->execute();

    //Est-ce que l’utilisateur (mail) existe ?
    if($stmt->rowCount() == 1){
        $monUser = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($passwordForm, $monUser['password'])){
            echo "Connexion réussie ! Bienvenue " . $monUser['name'] . $monUser['surname'];
        }else{
            echo "Mot de passe incorrect";
        }
    }
    else{
        echo "Utilisateur introuvable, êtes-vous sûr de votre mail ?";
    }
}
catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
}

?>





//INSCRIPTION//
<?php

$dsn = 'mysql:host=localhost;dbname=ProjetAuthentificationBDD';
$username = 'user_php';
$password = '3f7zhhRn4NH69R';

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer les données du formulaire d’inscription 
    $nameForm = $_POST['name'];
    $surnameForm = $_POST['surname'];
    $pseudoForm = $_POST['pseudo'];
    $emailForm = $_POST['email'];
    $passwordForm = $_POST['password'];

    //Vérifier l’unicité de l’adresse mail
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $emailForm);
    $stmt->execute();

    //Est-ce que l’utilisateur (mail) existe ?
    if($stmt->rowCount() > 0){
        die("Cette adresse email est déjà utilisée");
    }

    // Hashage(encryptage)
    $hashedPassword = password_hash($passwordForm, PASSWORD_DEFAULT);

    //Insérer les données dans la base 
    $insertQuery = "INSERT INTO users (pseudo, name, surname, email, password) VALUES (:pseudo, :name, :surname, :email, :password)";
    $stmt = $pdo->prepare($insertQuery);
    $stmt->bindParam(':pseudo', $pseudoForm);
    $stmt->bindParam(':name', $nameForm);
    $stmt->bindParam(':surname', $surnameForm);
    $stmt->bindParam(':email', $emailForm);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->execute();

    echo "Inscription réussie";

}
catch (PDOException $e){
    echo "Erreur lors de l’inscription : ". $e->getMessage();
}

?>    

 ///SUPERGLOBALES $_POST
<?php
// Vérifie si les champs ont été soumis
if (isset($_POST['pseudo']) && isset($_POST['password'])) 
{ 
  $pseudo = $_POST['pseudo'];
  $password = $_POST['password'];
       // exemple de validation
  if (empty($pseudo) || empty($password)) 
	{
      echo "Veuillez entrer un pseudo et un mot de passe";
	} 
	else 
	{
		echo "Bienvenue, $pseudo !";	   
	}
}
?> 


*/