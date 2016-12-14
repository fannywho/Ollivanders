<?php
require 'header.html';
?>
<?php
require_once 'connect.php';

// Affiche le produit par rapport à son ID récupéré dans l'url
$id = $_GET['id'];
$products = $pdo->query("SELECT * FROM `product` WHERE id = $id");
$p = $products->fetch();
?>
<div class="produit clearfix">
    <h2>Produit</h2>
    <hr>

    <img src="baguettes/<?= $p['image'] ?>">
    <div class="detail">
        <h3><?= $p['titre'] ?></h3>
        <br> <?= $p['description'] ?> 
        <br>
        <br><em><strong>Bois :</strong> <?= $p['bois'] ?></em>
        <br><em><strong>Coeur :</strong> <?= $p['coeur'] ?></em>
        <br><em><strong>Longueur :</strong> <?= $p['longueur'] ?></em>
        <br>
        <br><strong>Prix :</strong> <?= $p['prix'] ?>
        <br>
        <a href="#"><img src="img-layout/cauldron-button.png" class="panier"></a>
    </div>
</div>
<?php
require 'footer.html';
?>

