<?php
require_once 'connect.php'; ?>

<?php
require 'header.php'; ?>
<?php

if(isset($_GET['recherche']) AND !empty($_GET['recherche'])) {
    $recherche = htmlspecialchars($_GET['recherche']);
    $produit = $pdo->query('SELECT * FROM product WHERE CONCAT(titre, description, coeur, bois) LIKE "%' . $recherche . '%" ORDER BY id DESC');
    if ($produit->rowCount() == 0) {
        $produit = $pdo->query('SELECT * FROM product WHERE CONCAT(titre, description, coeur, bois) LIKE "%' . $recherche . '%" ORDER BY id DESC');
    }
}
?>
<div class="eshop">
    <h2>Boutique</h2>
    <form method="GET" action="search.php">
        <input type="search" name="recherche" placeholder="Recherche..." class="recherche"/>
        <input type="submit" value="Valider" class ="valider"/>
    </form>
    <hr>

    <?php if($produit->rowCount() > 0) { ?>
        <ul>
            <?php while($a = $produit->fetch()) { ?>
                <li>
                <a href="produit.php?id=<?= $a['id'] ?>"><img src="baguettes/<?= $a['image'] ?>"></a>
                <br> <h3><a href="produit.php?id=<?= $a['id'] ?>"><?php echo $a['titre'];?></a></h3>
                <br> <?php echo $a['prix'];?>

                </li>
            <?php } ?>
        </ul>
    <?php } else { ?>
    <div class="no-result">
        <p>Aucun résultat pour: "<?= $recherche ?>"...</p>
        <p class="jsp">¯\_(ツ)_/¯</p>
        </div>
        <?php
    } ?>
</div>

<?php
require 'footer.php'; ?>