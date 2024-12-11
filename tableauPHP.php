<h1>Formulaire connexion</h1><br>
<h3>Vérifier vos informations</h3>


<?php
$bdd = new PDO('mysql:host=localhost;dbname=ite_bibliotheque;charset=utf8','root','');
$prenom = $bdd ->prepare('INSERT INTO inscrit(nom, prenom, email,tel_fixe ,tel_portable , ville, cp, rue) VALUES (:nom, :prenom, :email, :tel_fixe, :tel_portable, :ville, :codePostal, :rue)');


$prenom->execute( array (
    'prenom'=> $_POST['prenom'],
    'nom' => $_POST['nom'],
    'email' => $_POST['email'],
    'tel_fixe' => $_POST['tel_fix'],
    'tel_portable' => $_POST['tel_portable'],
    'ville' => $_POST['ville'],
    'codePostal' => $_POST['codePostal'],
    'rue' => $_POST['rue'],
));


echo "Prénom :".$_POST['prenom']."<br/>";
echo "nom :".$_POST['nom']."<br/>";
echo "email :".$_POST['email']."<br/>";
echo "tel_fix :".$_POST['tel_fix']."<br/>";
echo "tel_portable :".$_POST['tel_portable']."<br/>";
echo "ville :".$_POST['ville']."<br/>";
echo "codePostal :".$_POST['codePostal']."<br/>";
echo "rue :".$_POST['rue']."<br/>";
?>

<a href="Inscription.html">Revenir sur la page de connexion</a><br>
<p>le prenom est le login et le mot de passe c est le nom</p>
<form action="Session_1.php" method="post">
    votre login : <input type="text" name="login">
    votre mot de passe : <input type="password" name="mdp"><br/>
    <input type="submit" value="Connexion">
</form>