<?php
$bdd = new PDO('mysql:host=localhost;dbname=ite_bibliotheque;charset=utf8','root','');

if(isset($_POST['login']) && isset($_POST['mdp'])) {
    $mdp = $bdd->prepare('SELECT nom, prenom  WHERE nom=:login AND prenom=:mdp');


    $mdp->execute(array(

        'prenom' => $_POST['login'],
        'nom' => $_POST['mdp'],
    ));
    echo "je suis le BOOOOOOOOOOOSSSSSSSS";
}
else "c'est vraiment po noce..";




