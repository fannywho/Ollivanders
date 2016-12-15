
<?php

require_once "connect.php";

// Verifie l'éxistence de la variable fihier
if(isset($_FILES['fichier']) AND !empty($_FILES['fichier'] ['name'])){

    $tailleMax = 2097152;
    $extensionValides = array('jpg', 'jpeg', 'gif', 'png');

    if($_FILES['fichier']['size'] <= $tailleMax){

        $extensionUpload = strtolower(substr(strrchr($_FILES['fichier']['name'],'.'),1));

        if(in_array($extensionUpload, $extensionValides)){

            $chemin = "baguettes/" .$_FILES['fichier']['name'];
            $resultat = move_uploaded_file($_FILES['fichier']['tmp_name'],$chemin);

        }

    }
}

$sql = "UPDATE `product` SET

 `titre` = :titre, 
 
 `image` = :fichier, 

 `description` = :description, 

 `bois` = :bois, 

 `coeur` = :coeur,
 
 `longueur` = :longueur,
 
 `prix` = :prix

WHERE

 id = :id

";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(":titre", $_POST['titre']);

$stmt->bindValue(":description", $_POST['description']);

$stmt->bindValue(":fichier", $_FILES['fichier']['name']);

$stmt->bindValue(":bois", $_POST['bois']);

$stmt->bindValue(":coeur", $_POST['coeur']);

$stmt->bindValue(":longueur", $_POST['longueur']);

$stmt->bindValue(":prix", $_POST['prix']);

$stmt->bindValue(":id", $_POST['id']);

$stmt->execute();




header ('Location: admin.php');
?>


