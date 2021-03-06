<?php require 'header.php';
require_once 'connect.php';

// Affiche le produit par rapport à son ID récupéré dans l'url
$id = $_GET['id'];
$products = $pdo->query("SELECT titre, image,description,bois, coeur, longueur, prix FROM `product` WHERE id = $id");
$p = $products->fetch();
?>


<?php
// Vérifie si le champ recherche existe et si il est différent de vide
if(isset($_GET['recherche']) AND !empty($_GET['recherche'])) {
    // Empeche l'insertion d'HTML dans le champ recherche
    $recherche = htmlspecialchars($_GET['recherche']);
    // Execute la requete
    $produit = $pdo->query('SELECT titre, image,description,bois, coeur, longueur, prix FROM product WHERE CONCAT(titre, description, coeur, bois) LIKE "%' . $recherche . '%" ORDER BY id DESC');
    if ($produit->rowCount() == 0) {
        $produit = $pdo->query('SELECT titre, image,description,bois, coeur, longueur, prix FROM product WHERE CONCAT(titre, description, coeur, bois) LIKE "%' . $recherche . '%" ORDER BY id DESC');
    }
}
?>

<div class="produit clearfix">
    <h2>Produit</h2>
    <form method="GET" action="search.php">
        <input type="search" name="recherche" placeholder="Recherche..." class="recherche"/>
        <input type="submit" value="Valider" class ="valider"/>
    </form>
    <hr>

    <img src="baguettes/<?= $p['image'] ?>">
    <div class="detail">
        <h3><?= $p['titre'] ?></h3>
        <br> <?= $p['description'] ?>
        <br>
        <br><em><strong>Bois :</strong> <?= $p['bois'] ?></em>
        <br><em><strong>Coeur :</strong> <?= $p['coeur'] ?></em>
        <br><em><strong>Longueur :</strong> <?= $p['longueur'] ?> cm</em>
        <br>
        <br><strong>Prix :</strong> <?= $p['prix'] ?>
        <br>
        <a href="panier.php"><img src="img-layout/cauldron-button.png" class="panier"></a>
    </div>
</div>
<?php require 'footer.php';


