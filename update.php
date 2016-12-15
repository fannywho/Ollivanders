<?php
// La connexion à la base de donnée est requis
require_once 'connect.php';

require 'header.php';

// Stock tout le contenu des variables récuperé en POST via le formulaire dans les variables adéquat, ex $titre = $_POST['titre'];

$titre = $_POST['titre'];
$des = $_POST['description'];
$bois = $_POST['bois'];
$coeur = $_POST['coeur'];
$longueur = $_POST['longueur'];
$prix = $_POST['prix'];


// Verifie l'éxistence des variables récuperés en post via le formulaire
if (isset($_POST['titre']) && ($_POST['description']) && ($_POST['bois']) && ($_POST['coeur']) && ($_POST['prix'])&& ($_POST['longueur'])) {

    if(isset($_FILES['fichier']) AND !empty($_FILES['fichier'] ['name'])){

        $tailleMax = 2097152;
        $extensionValides = array('jpg', 'jpeg', 'gif', 'png');

        if($_FILES['fichier']['size'] <= $tailleMax){

            $extensionUpload = strtolower(substr(strrchr($_FILES['fichier']['name'],'.'),1));

            if(in_array($extensionUpload, $extensionValides)){

                $chemin = "baguettes/" .$_FILES['fichier']['name'];
                $resultat = move_uploaded_file($_FILES['fichier']['tmp_name'],$chemin);

                if($resultat){
                    // Requete insert stocké dans la variable sql
                    $updatefichier = $pdo -> prepare('INSERT INTO product(id, titre, image, description, bois, coeur, prix) VALUES (?,?,?,?,?,?,?)');
                    $updatefichier -> execute(array(NULL, $titre, $_FILES['fichier']['name'], $des, $bois, $coeur, $prix ));
                    $msg="votre fichier a bien été reçu";
                    // Redirrection vers index.php si le script c'est bien éxécuter
                    header ('Location: admin.php');


                }else{
                    $msg="Problème durant l'importation du fichier";
                }
            }else{
                $msg="votre fichier doit etre au bon format!!";
            }
        }else{
            $msg="Votre fichier ne doit pas dépasser 2Mo";
        }

    }






}else {
    //echo "Veuillez remplir tous les champs.";
}




?>
<style>
    h1 {
        color: #333;
    }
</style>
<h1>Ajouter votre produit</h1>

<a href="index.php">Accueil</a><br /><br />

<form action="update.php" method="post"  enctype="multipart/form-data">

    <input type="text" name="titre" />
    <label>Titre</label><br /><br />



    <input type="text" name="description" />
    <label>Description</label><br /><br />

    <input type="text"  name="bois"/>
    <label>Bois</label><br /><br />

    <input type="text"  name="coeur"/>
    <label>Coeur</label><br /><br />

    <input type="text"  name="longueur"/>
    <label>Longueur</label><br /><br />

    <input type="text" name="prix"/>
    <label>Prix</label><br /><br />

    <input type="file" name="fichier"/><br/><br />

    <button type="submit" name="upload">Envoyer</button>

</form>


<?php require 'footer.php'; ?>

