<?php

require_once "connect.php";

require 'header.php';

$sql = "SELECT `id`, `titre`, `image`, `description`, `bois`, `coeur`,`longueur`,`prix` FROM `product` WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(":id", $_POST['id'] ?? 0 );

$stmt->execute();

if(false == $row = $stmt->fetch(PDO::FETCH_ASSOC)){

    //header("Location: index.php");

}


?>

<h1 style="color: #333;">Editez votre formulaire</h1>
<form action="edit.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?=$row['id']?>">

    <p><label for="titre">Titre</label><br/><input type="text" name="titre"  placeholder="Votre titre" value="<?=$row['titre']?>"></p>

    <p><label for="description">Description</label><br/><input type="text" name="description"  placeholder="Votre Description" value="<?=$row['description']?>"></p>

    <p><label for="bois">Bois</label><br/><input type="text" name="bois"  placeholder="Votre bois" value="<?=$row['bois']?>"></p>

    <p><label for="coeur">Coeur</label><br/><input type="text" name="coeur"  placeholder="Votre Coeur" value="<?=$row['coeur']?>"></p>

    <p><label for="longueur">Longueur</label><br/><input type="text" name="longueur"  placeholder="Votre Longueur" value="<?=$row['longueur']?>"></p>

    <p><label for="prix">Prix</label><br/><input type="text" name="prix"  placeholder="Votre Prix" value="<?=$row['prix']?>"></p>


    <label>photo :</label>
    <input type="file" name="fichier"/><br/><br/>


    <input type="submit" value="Mettre à jour!" />

</form>

<?php   require 'footer.php'; ?>