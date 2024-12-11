<?php
$bdd = new PDO('mysql:host=localhost;dbname=ie_bibliotheque;charset=utf8', 'root', '');
if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $mdp = $bdd->prepare('SELECT nom, prenom FROM inscrit WHERE prenom = :prenom AND nom = :nom');

    $mdp->execute(array(
        'prenom' => $_POST['login'],
        'nom' => $_POST['mdp'],
    ));


    if (empty($res)) {
        echo "Erreur de connexion. Veuillez vérifier vos identifiants.";
    } else {
        session_start();
        $_SESSION['utilisateurSession'] = $res;
        echo "Connexion réussie. Bienvenue, " . htmlspecialchars($res['prenom']) . " !";
    }
} else {
    echo "Veuillez remplir les champs de connexion.";
}
?>



