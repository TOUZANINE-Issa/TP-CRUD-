<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://i.goopics.net/nfav5r.jpg'); /* Changer l'image ici */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.4); /* Fond semi-transparent */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            margin-top: 50px;
        }

        h1, h3 {
            text-align: center;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Formulaire connexion</h1><br>
    <h3>Vérifier vos informations</h3>

    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=ie_bibliotheque;charset=utf8', 'root', '');
    $prenom = $bdd->prepare('INSERT INTO inscrit(nom, prenom, email, tel_fixe, tel_portable, ville, cp, rue) VALUES (:nom, :prenom, :email, :tel_fixe, :tel_portable, :ville, :codePostal, :rue)');

    $prenom->execute(array(
        'prenom' => $_POST['prenom'],
        'nom' => $_POST['nom'],
        'email' => $_POST['email'],
        'tel_fixe' => $_POST['tel_fix'],
        'tel_portable' => $_POST['tel_portable'],
        'ville' => $_POST['ville'],
        'codePostal' => $_POST['codePostal'],
        'rue' => $_POST['rue'],
    ));

    echo "Prénom :" . $_POST['prenom'] . "<br/>";
    echo "Nom :" . $_POST['nom'] . "<br/>";
    echo "Email :" . $_POST['email'] . "<br/>";
    echo "Tel Fix :" . $_POST['tel_fix'] . "<br/>";
    echo "Tel Portable :" . $_POST['tel_portable'] . "<br/>";
    echo "Ville :" . $_POST['ville'] . "<br/>";
    echo "Code Postal :" . $_POST['codePostal'] . "<br/>";
    echo "Rue :" . $_POST['rue'] . "<br/>";
    ?>

    <a href="Inscription.html">Revenir sur la page de connexion</a><br>
    <p>Le prénom est le login et le mot de passe est le nom</p>
    <form action="Session_1.php" method="post">
        <div class="mb-3">
            <label for="login" class="form-label">Votre login :</label>
            <input type="text" class="form-control" id="login" name="login">
        </div>
        <div class="mb-3">
            <label for="mdp" class="form-label">Votre mot de passe :</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
    <a class="navbar-brand" href="acceuil.html">Acceuil</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
