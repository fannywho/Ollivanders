<?php
require 'header.php';
?>
<?php
require_once 'connect.php';

// Pagination sql

$page = isset($_GET['page']) ?  (int)$_GET['page'] : 1;
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <=50 ? (int)$_GET['per-page'] : 6;

// Positionnement

$start = ($page > 1) ? ($page * $perPage) - $perPage  : 0;

// Requete
$products = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS  `id`,`titre`,`image`, `prix` FROM product WHERE confirm = 1 ORDER BY id DESC LIMIT {$start},{$perPage}");

$products->execute();

$products = $products->fetchAll(PDO::FETCH_ASSOC);

// Gère l'affichage des pages de la pagination
$total = $pdo->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
$pages = ceil($total / $perPage);
?>

<div class="eshop">
    <h2>Boutique</h2>
    <form method="GET" action="search.php">
        <input type="search" name="recherche" placeholder="Recherche..." class="recherche"/>
        <input type="submit" value="Valider" class ="valider"/>
    </form>
    <hr>
    <ul>
        <?php
        // Fait une boucle pour afficher les produits
        foreach ($products as $products):  ?>
            <li>
                <a href="produit.php?id=<?= $products['id'] ?>"><img src="baguettes/<?= $products['image'] ?>"></a>
                <br> <h3><a href="produit.php?id=<?= $products['id'] ?>"><?php echo $products['titre'];?></a></h3>
                <br> <?php echo $products['prix'];?>

            </li>
        <?php endforeach; ?>
        </ul>
        <hr>
        <div class="pagination">
            <?php // Fait une boucle pour afficher le numéro des pages de pagination
            for($x = 1; $x <= $pages; $x++):  ?>
                <a href="?page=<?php echo $x;?>$per-page=<?php echo $perPage; ?>" <?php if($page == $x){ echo 'selected'; } ?>><?php echo $x; ?></a>
            <?php endfor; ?>
</div>
</div>
<?php
require 'footer.php';


