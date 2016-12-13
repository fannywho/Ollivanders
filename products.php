<?php
require 'header.html';
?>
<?php
require_once 'connect.php';
// Affiche la liste de tous les produits par rapport à leur ID
$products = $pdo->query('SELECT * FROM `product`');
// Verifie si la donnée GET récuperée dans l'url EXISTE et N'EST PAS VIDE
if (isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
    //Si la condition est vraie, stock la valeure de la donnée GET dans $supprime
    $supprime = (int) $_GET['supprime'];
    // Prépare la requete Mysql qui est stocké dans une variable req
    $req = $pdo->prepare('DELETE FROM `product` WHERE id = ?');
    // Execute la requete
    $req->execute(array($supprime));
}

?>

<ul>

    <h1>Page accueil</h1>

     <a href="gestion.php">Ajouter une nouvelle entrée</a>
    <?php while($p = $products->fetch()) { ?>
        <li><?= $p['id'] ?> : <?= $p['titre'] ?> : <?= $p['description'] ?> : <?= $p['bois'] ?> : <?= $p['coeur'] ?> : <?= $p['prix'] ?> - <a href="index.php?supprime=<?= $p['id'] ?>">Supprimer</a></li>
   <?php } ?>

</ul>
<?php
require 'footer.html';
?>

