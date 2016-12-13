<?php
require 'header.html';
?>
<?php
require_once 'connect.php';

// Affiche la liste de tous les produits par rapport à leur ID
$id = $_GET['id'];
$products = $pdo->query("SELECT * FROM `product` WHERE id = $id");
$p = $products->fetch();
?>

<div class="produit">
    <h2>Boutique</h2>

    <img src="baguettes/<?= $p['image'] ?>">
    <div class="detail">
        <h3><?= $p['titre'] ?></h3>
        <br> <?= $p['description'] ?> 
        <br>
        <br> <em>Bois :</em> <?= $p['bois'] ?>
        <br> <em>Coeur :</em> <?= $p['coeur'] ?> 
        <br> <em>Longueur :</em> <?= $p['longueur'] ?>
        <br>
        <br> <em>Prix :</em> <?= $p['prix'] ?>
        <br>
        <hr>
        <a href="#"><img src="img-layout/cauldron-button.svg" class="panier"></a>
    </div>
</div>
<?php
require 'footer.html';
?>

