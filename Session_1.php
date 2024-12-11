<?php
$bdd = new PDO('mysql:host=localhost;dbname=ie_bibliotheque;charset=utf8','root','');

if(isset($_POST['login']) && isset($_POST['mdp'])) {
    $mdp = $bdd->prepare('SELECT nom, prenom  FROM inscrit WHERE nom = :nom AND prenom = :prenom');

    $mdp->execute(array(

        'prenom' => $_POST['login'],
        'nom' => $_POST['mdp'],
    ));
    session_start();
    //inserer image
    echo "je suis le BOOOOOOOOOOOSSSSSSSS";
}
else "c'est vraiment po noce..";




