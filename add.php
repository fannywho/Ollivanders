<?php require_once 'connect.php';

require 'header.php';

// Stock tout le contenu des variables récuperé en POST via le formulaire dans les variables adéquat, ex $titre = $_POST['titre'];

$titre = $_POST['titre'];
$des = $_POST['description'];
$bois = $_POST['bois'];
$coeur = $_POST['coeur'];
$longueur = $_POST['longueur'];
$prix = $_POST['prix'];


// Verifie l'éxistence des variables récuperés en post via le formulaire
if (isset($_POST['titre']) && ($_POST['description']) && ($_POST['bois']) && ($_POST['coeur']) && ($_POST['prix']) && ($_POST['longueur'])) {
// Verifie si le champ fichier (input file ) existe et si il est différent de vide
    if(isset($_FILES['fichier']) AND !empty($_FILES['fichier'] ['name'])){
    //Stock la taille maximum du fichier reçu
        $tailleMax = 2097152;
        // Verifie si le fichier envoyé possède le bon format
        $extensionValides = array('jpg', 'jpeg', 'gif', 'png');
        // Verifie si le fichier ne dépasse pas la taille maximum
        if($_FILES['fichier']['size'] <= $tailleMax){
            // Force les caractères de l'image en minuscule sans espace
            $extensionUpload = strtolower(substr(strrchr($_FILES['fichier']['name'],'.'),1));

            if(in_array($extensionUpload, $extensionValides)){
                // Stock le chemin du dossier images dans une variable
                $chemin = "baguettes/" .$_FILES['fichier']['name'];
                // Déplace le fichier envoyé dans le dossier baguette
                $resultat = move_uploaded_file($_FILES['fichier']['tmp_name'],$chemin);

                if($resultat){
                    // Préparation de la requete
                    $updatefichier = $pdo -> prepare('INSERT INTO product(id, titre, image, description, bois, coeur, longueur, prix) VALUES (?,?,?,?,?,?,?,?)');
                    $updatefichier -> execute(array(NULL, $titre, $_FILES['fichier']['name'], $des, $bois, $coeur, $longueur,$prix ));
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

<div class="ajouter">

<p><a href="admin.php" class="button">Retourner à l'accueil</a></p> <br>

<form action="add.php" method="post"  enctype="multipart/form-data">

    <p><label for="titre">Titre</label> <br> <input type="text" name="titre" /></p>
    <p><label for="description">Description</label> <br> <input type="text" name="description" /></p>
    <p><label for="bois">Bois</label> <br> <input type="text"  name="bois"/></p>
    <p><label for="coeur">Coeur</label> <br> <input type="text"  name="coeur"/></p>
    <p><label for="longueur">Longueur</label> <br> <input type="text"  name="longueur"/></p>
    <p><label for="prix">Prix</label> <br> <input type="text" name="prix"/>
    <p> <input type="file" name="fichier"/></p>

    <p><button type="submit" name="upload">Envoyer</button></p>

</form>
</div>

<?php require 'footer.php';
