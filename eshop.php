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
<div class="eshop">
    <h2>Boutique</h2>
    <hr>
    <ul>
        <?php while($p = $products->fetch()) { ?>
            <li>
                <a href="produit.php?id=<?= $p['id'] ?>"><img src="baguettes/<?= $p['image'] ?>"></a> 
                <br> <h3><?= $p['titre'] ?></h3>
                <br> <?= $p['prix'] ?>
                </li>
       <?php } ?>
    </ul>
    <hr>
</div>
<?php
require 'footer.html';
?>

