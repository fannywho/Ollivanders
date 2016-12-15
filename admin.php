<?php
require_once 'connect.php';

require 'header.php';
// Affiche la liste de tous les produits par rapport à leur ID
//$products = $pdo->query('SELECT * FROM `product`WHERE confirm = 1');

$products = $pdo->query('SELECT `id`, `titre`, `image`, `prix`, `confirm` FROM `product` ORDER BY id DESC');


// Verifie si la donnée GET récuperée dans l'url EXISTE et N'EST PAS VIDE
if (isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
    //Si la condition est vraie, stock la valeure de la donnée GET dans $supprime
    $supprime = (int) $_GET['supprime'];
    // Prépare la requete Mysql qui est stocké dans une variable req
    $req = $pdo->prepare('DELETE FROM `product` WHERE id = ?');
    // Execute la requete
    $req->execute(array($supprime));
}


if (isset($_GET['confirm']) AND !empty($_GET['confirm'])) {
    //Si la condition est vraie, stock la valeure de la donnée GET dans $supprime
    $comfirmer = (int) $_GET['confirm'];
    // Prépare la requete Mysql qui est stocké dans une variable req
    $req = $pdo->prepare('UPDATE `product` SET `confirm` = 1 WHERE id = ?');
    // Execute la requete
    $req->execute(array($comfirmer));
}

if (isset($_GET['confirm_not']) AND !empty($_GET['confirm_not'])) {
    //Si la condition est vraie, stock la valeure de la donnée GET dans $supprime
    $comfirmer = (int) $_GET['confirm_not'];
    // Prépare la requete Mysql qui est stocké dans une variable req
    $req = $pdo->prepare('UPDATE `product` SET `confirm` = 0 WHERE id = ?');
    // Execute la requete
    $req->execute(array($comfirmer));
}


?>
    <section class="panel-admin">
        <h1>Page d'administration</h1>

        <div class="admin-button">
            <a href="update.php" class="button">Ajouter un nouveau produit</a>
            <a href="eshop.php" class="button">Retour à la Boutique</a>
        </div>
                <ul>
                <?php while($p = $products->fetch()) { ?>
                    <li><?= $p['titre'] ?> 
                        <img src="baguettes/<?= $p['image']; ?>" width="5%" />  
                        Prix : <?= $p['prix'] ?>  
                        <?= $p['confirm'] ?> 
                        <a href="admin.php?supprime=<?= $p['id'] ?>">Supprimer</a>
                        <a href="admin.php?confirm=<?= $p['id']?>">Rendre visible</a>/<a href="admin.php?confirm_not=<?= $p['id']?>">Rendre invisible</a>

                        <form action="edit-form.php" method="post">
                            <input type="hidden" name="id" value="<?=$p['id']?>">
                            <input type="submit" value="Modifier">
                        </form>
                    </li>
    <?php } ?>
    </ul>
        </section>







<?php require 'footer.php';  ?>