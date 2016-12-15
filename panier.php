<?php
require 'header.php';
?>
<div class="chaudron clearfix">
	<h2>Votre panier</h2>
	<hr>
	<article class="bg1">
		<img src="baguettes/bag01.png" alt="baguette">
		<div class="description">
			<h3>Baguette Roccus</h3>
			<p>Cette baguette en Acacia ne conviendra qu’aux sorciers les plus rigoureux et pointus. Légère et maniable elle sera un instrument fidèle.</p>

			Matériau: Bois d’acacia
			Coeur: Plume de Phoenix
			Taille: 19 cm de long
			<br>Prix: 8 Gallions et 12 Mornilles</p>
		</div>
		<div class="quantite">
		<form>
			<select name="QTE">
			    <option value="1">1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="1">4</option>
			    <option value="2">5</option>
			    <option value="3">6</option>
		  	</select>
			<p>Quantité</p>
		</form>
		</div>
	</article>
	<a href="#"><img src="img-layout/cauldron-button.png" class="acheter"></a>
</div>
<?php
require 'footer.php';
