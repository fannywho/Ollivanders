<?php
// La connexion à la base de donnée est requis
require_once 'connect.php';

// Stock tout le contenu des variables récuperé en POST via le formulaire dans les variables adéquat, ex $titre = $_POST['titre'];

$titre = $_POST['titre'];
$des = $_POST['description'];
$bois = $_POST['bois'];
$coeur = $_POST['coeur'];
$prix = $_POST['prix'];


// Verifie l'éxistence des variables récuperés en post via le formulaire
if (isset($_POST['titre']) && ($_POST['description']) && ($_POST['bois']) && ($_POST['coeur']) && ($_POST['prix'])) {
// Requete insert stocké dans la variable sql
    $sql = "INSERT INTO `product` (`id`, `titre`, `image`, `description`, `bois`, `coeur`, `prix`) VALUES (NULL, '$titre','$image', '$des', '$bois', '$coeur', '$prix');";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
// Redirrection vers index.php si le script c'est bien éxécuter
    header ('Location: index.php');
}else {
    //echo "Veuillez remplir tous les champs.";
}


?>
<h1>Panel Admin</h1>
<a href="index.php">Accueil</a>

<form action="gestion.php" method="post"  enctype="multipart/form-data">

        <input type="text" name="titre" />
        <label>Titre</label><br />



        <input type="text" name="description" />
        <label>Description</label><br />

        <input type="text"  name="bois"/>
        <label>Bois</label><br />

        <input type="text"  name="coeur"/>
        <label>Coeur</label><br />

        <input type="text" name="prix"/>
        <label>Prix</label><br />

    <button type="submit" name="upload">Envoyer</button>

</form>



