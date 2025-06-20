<?php
$serveur="localhost";
$username="root";
$password=""; // Correction de l'espace
try{
    $bdd=new PDO("mysql:host=localhost;dbname=utilisateurs", $username, $password); // Correction de "muysql" en "mysql"
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    echo "Erreur: " . $e->getMessage();
}
if(isset($_POST['ok'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mdp = $_POST['pass'];
    $email = $_POST['email'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (3,:nom, :prenom, :mdp, :email)"); // Correction de l'espace supplémentaire

    $requete->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'mdp' => $mdp,
        'email' => $email
    ));

    echo "Votre inscription a été bien effectuée";
}
?>